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
	
	function cookies(){
//		$name = "xyzthinkxyz";
//		cookie('name','think',3600); // 指定cookie保存时间	
		
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
	
	
	

}
