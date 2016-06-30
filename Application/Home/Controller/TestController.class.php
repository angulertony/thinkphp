<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
    	$test = M("test");
		dump($test->where("id=1")->find());
    }
}