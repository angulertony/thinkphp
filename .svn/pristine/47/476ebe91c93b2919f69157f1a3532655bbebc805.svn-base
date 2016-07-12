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
				"name"=>"中文",
			),				
			1=>array(
				"id"=>2,
				"name"=>"过长中",
			),		
			2=>array(
				"id"=>3,
				"name"=>"csssss",
			),		
			3=>array(
				"id"=>4,
				"name"=>"html",
			),	
			
			4=>array(
				"id"=>5,
				"name"=>"Aandroid",
			),
			6=>array(
				"id"=>7,
				"name"=>"C",
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