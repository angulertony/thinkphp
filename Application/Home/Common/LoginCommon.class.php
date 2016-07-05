<?php
namespace Home\Common;
class LoginCommon {
	
	/*
	 * 入口
	 */
	public function run($id="0"){
		if($id){
			//用户是登录进入,则id需传入用户id
			$this->setCookie($id);
			$this->setSession($id);
		}else{
			//用户已登录则$id为0;
			$id = $this->getSession();
		}
		return $id;
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
		$encrypted =urldecode(cookie("xyzId")); 
		
		$public_key = PUBLIC_ROOT."rsa_public_key.pem";
		$pu_key = openssl_pkey_get_public(file_get_contents($public_key)); 
		$decrypted = "";
		openssl_public_decrypt(base64_decode($encrypted),$decrypted,$pu_key);//私钥加密的内容通过公钥可用解密出来  
		
		$id = substr($decrypted,3,(strlen($decrypted)-6));
		$head = substr($decrypted,0,3);
		$foot = substr($decrypted,strlen($decrypted)-3,3);
		
		if($head !== "xyz" || $foot !== "xyz" || !is_numeric($id)){
			setcookie("xyzId",null);
			echo "cookie信息验证失败.";
			$this->toLogin();
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
	
	/*
	 * 跳转登录页面
	 */
	private function toLogin(){
		//跳转login界面
		echo "信息验证失败,跳转登录界面";
		exit;
	}
	
}
