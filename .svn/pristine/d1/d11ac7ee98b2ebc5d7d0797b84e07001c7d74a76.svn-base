<?php
namespace \Home\Controller;
class LoginRegisteController extends \Think\Controller\Controller{
	
	private $userD;
	
	public function _before_index(){
		$this->userD = D("User");
	}
	
	public function index(){ 
		$this->display("/LoginRegiste");
	}
	
	public function Login(){
		$username = I("post.username");
		$password = I("post.password");
		check(IS_POST,array($username,$password));
		
		$userInfo = $this->userD->verifyUser($username,$password);
		
		$this->assign("userInfo",$userInfo);		
		//显示登陆前的页面
		echo "登录成功!";
		dump($userInfo);
//		$this->display("");		
	}
	
	public function registe(){
//		$usernameE = I("post.usernameE","","email");			//邮箱注册
//		$username = I("post.username","","/^1[34578]\d{9}$/");	//电话号码注册

		$username = I("post.username");
		$password = I("post.password");
		check(IS_POST,array($username,$password));
		
		$userInfo = $this->userD->addUser($username,$pasword);
		
		//提示成功,跳转用户注册前界面
		echo "注册成功!";
		dump($userInfo);
	}
	
	//找回密码
	public function getBackPassword(){
		echo "找回密码";
	}
	
	
	
}
