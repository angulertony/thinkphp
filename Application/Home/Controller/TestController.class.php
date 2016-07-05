<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {



	function index() {
		
	}

	function xml() {
		$xmlpath = PUBLIC_ROOT."category.inc";
		$category = simplexml_load_file(PUBLIC_ROOT."category.inc");
		$category->item;//查询
		$category->item = "test_edit";//修改
		$category->addChild('name', 'Mr. Parser');//新增值
		
		$category->name;
//		$category->addAttribute('type', 'mpaa');//新增属性
//		$category->asXML($xmlpath);//保存
	}
	
	function session(){
		$head = "xyz";
		$foot = "xyzz";
		$test = 1;
		if($head !== $foot || $foot !== "xyz" || $test != 1){
			echo 11111111;  
		}
		echo 222;
		exit;
		
		
		$_SESSION_EXPIRE = C("SESSION_EXPIRE");
		$sid = 728;
		
		session(array("id"=>$sid,'name'=>"user",'expire'=>$_SESSION_EXPIRE));
		session("user.name","qskane");
		echo session('?name');
		echo "<br />";
		dump(session());
	}
	
	function test_cookie(){
		dump(cookie());
	}
	
	function rsa(){
		$id = 1234;
		
		$data = "xyz".$id."xyz";//原始数据  
		$private_key = PUBLIC_ROOT."rsa_private_key.pem";
		$pi_key = openssl_pkey_get_private(file_get_contents($private_key));  
		$encrypted = "";   
		openssl_private_encrypt($data,$encrypted,$pi_key);//私钥加密  
		$encrypted = urlencode(base64_encode($encrypted));  
		setcookie("xyzId",$encrypted,time()+3600);
		
	}
	
	function rsa1(){
		$encrypted =urldecode(cookie("xyzId")); 
		
		$public_key = PUBLIC_ROOT."rsa_public_key.pem";
		$pu_key = openssl_pkey_get_public(file_get_contents($public_key)); 
		
		$decrypted = "";
		openssl_public_decrypt(base64_decode($encrypted),$decrypted,$pu_key);//私钥加密的内容通过公钥可用解密出来  
		$decrypted = substr($decrypted,3,(strlen($decrypted)-6));
	}
	
	function test_click(){
		
		$id = 1111;
		if(!IS_POST){
			$this->display("/test");
		}else{
			echo "test_else";
			echo "<br />";
			echo  $id;
		}
		
	}
	
	function test_visitor(){
		echo  "<br />";
		echo "===";
		echo  "<br />";
		echo  $this->visitor()->get("id");
	}
	
	
	

}
