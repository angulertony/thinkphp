<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
	
	function index(){
		//跳转错误页面
		echo "请求页面未找到.";
	}
}