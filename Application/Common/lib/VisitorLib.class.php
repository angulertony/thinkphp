<?php
namespace Common\Lib;
/**
 *  访客类
 */
class VisitorLib {
	
	//用户表对象
	private $userM = null;
	
	private $id = null;
	
	private $isMust = 0;
	
   	public function __construct() {
   		$this->userM = M("user");
   	}
	
	/*
	 * $pram需要获取访客的信息
	 * $isMust是否强制跳转登录
	 */
	public function get($pram,$isMust){
		$this->isMust = $isMust;
		$this->id = $this->getSession();
		if(!is_null($this->id)){
			if($pram === "id"){
				$result = $this->$id;
			}elseif($pram === "user_name"){
				$result = $this->userM->where("id={$this->id}")->getField('user_name');		
			}else{
				$result = $this->userM->where("id={$this->id}")->find();
			}
			return $result;
		}else{
			return 0;
		}
	}
	
		
	/*
	 * 将用户信息在服务器文件中id加密后存到浏览器cookie
	 */
	private function setCookie($id){
		$data = "xyz".$id."xyz";//原始数据  
		$private_key = PUBLIC_ROOT."rsa_private_key.pem";
		$pi_key = openssl_pkey_get_private(file_get_contents($private_key));  
		$encrypted = "";   
		openssl_private_encrypt($data,$encrypted,$pi_key);//私钥加密  
		$encrypted = urlencode(base64_encode($encrypted));  
		setcookie("xyzId",$encrypted,time()+3600);
	}
	
	/*
	 * 取出浏览器cookie解密,验证  
	 */
	private function getCookie(){
		if(empty(cookie("xyzId"))){
			//用户首次进入/用户手动删除cookie
			return null;
		}
		$encrypted =urldecode(cookie("xyzId"));

		$public_key = PUBLIC_ROOT."rsa_public_key.pem";
		$pu_key = openssl_pkey_get_public(file_get_contents($public_key)); 
		$decrypted = "";
		openssl_public_decrypt(base64_decode($encrypted),$decrypted,$pu_key);//私钥加密的内容通过公钥可用解密出来  
		
		$id = substr($decrypted,3,(strlen($decrypted)-6));
		$head = substr($decrypted,0,3);
		$foot = substr($decrypted,strlen($decrypted)-3,3);
		
		//Cookie错误
		if($head !== "xyz" || $foot !== "xyz" || !is_numeric($id)){
			if($this->isMust){
				echo "使用必须登录功能,跳转登录页面...";
			}else{
				echo "cookie信息验证失败.";
				setcookie("xyzId",null);
			}
			return null;
		}
		//cookie正确
		return  $id; 
	}
	
	/*
	 * 用户cookie验证成功,保存登录信息在session中,10分钟有效
	 * 10分钟内,用户有操作,更新cookie有效期
	 * 10分钟内,用户无操作,需再次验证cookie,并新建session
	 */
	private function setSession($id){
		$_SESSION_EXPIRE = C("SESSION_EXPIRE");
		session(array("id"=>$id,'name'=>"user",'expire'=>$_SESSION_EXPIRE));
		session("user.id",$id);
		session("user.login",1);
	}
	
	
	/*
	 * 1检查session中是否有该用户数据
	 * 2若有,直接放行
	 * 3若无,检查cookie
	 * 4cookie正确,放行/错误跳转登录
	 */
	private function getSession(){
		if(session('?user')){
			$id = session("user.id");
		}else{
			$id = $this->getCookie();
		}
		$this->setSession($id);
		return $id;
	}
}