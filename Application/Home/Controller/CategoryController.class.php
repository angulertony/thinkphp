<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
	
	private $categoryD;
	
	public function _before_index(){
		$this->categoryD = D("Category");
	}
	
	/* 需要完成的			
	 * 1.展示所有1级分类
	 * 2.用户点击分类. ajax返回数据		
	 * */
    public function index(){
		$level1 = $this->categoryD->getLevel1();
		$this->assign("level1",$level1);
		$this->display("category");
    }
	
	public function ajaxGetChild(){
		if(!IS_AJAX){
			return;
		}
		
		$id = I("get.id");
		$child = $this->categoryD->getChild($id);
		$this->ajaxReturn($child);	
	}
	
}