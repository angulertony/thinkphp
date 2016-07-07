<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
	
	private $categoryD;
	
	public function _before_index(){
		//$this->categoryD = D("Category");
	}
	
	/* 需要完成的			
	 * 1.展示所有1级分类
	 * 2.用户点击分类. ajax返回数据		
	 * */
    public function index(){
		//$level1 = $this->categoryD->getLevel1();
		$level1 = array(
			0=>array(
				"id"=>1,
				"name"=>"php",
			),				
			1=>array(
				"id"=>2,
				"name"=>"js",
			),		
			2=>array(
				"id"=>3,
				"name"=>"css",
			),		
		);
		
		
		$this->assign("level1",$level1);
		$this->display("/category");
    }
	
	public function ajaxGetChild(){
		if(!IS_AJAX){
			return;
		}
		
//		$id = I("get.id");
//		$child = $this->categoryD->getChild($id);

		$children = array(
			0=>array(
				"id"=>7,
				"name"=>"child1",
			),				
			1=>array(
				"id"=>8,
				"name"=>"child2",
			),		
			2=>array(
				"id"=>9,
				"name"=>"child3",
			),		
		);

		$this->ajaxReturn($children);	
	}
	
}