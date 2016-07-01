<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
	
	/* 需要完成的			
	 * 1.展示所有1级分类
	 * 		
	 * 
	 * */
    public function index(){
		$categroyD = D("Category");
		$test = $categroyD->where("class=1")->find();
		$level1 = $categroyD->getLevel1();
    }
	
	
	
	
}