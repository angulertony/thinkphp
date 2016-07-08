<?php
namespace Admin\Controller;
use Think\Controller;	
class CategoryController extends Controller{
	
	private $categoryD;
	private $xmlPath;
	
//	private _befor_index(){
//		$this->categoryD = D("category");
//		$this->xmlPath = PUBLIC_ROOT."category.inc";
//	}
	
	public function index(){
		$this->display("/category");
	}
	
	public function addCategory(){
		if(!IS_POST){
			$this->display("categoryAdd.html");
		}else{
			/*需要的数据
			 * 1.上级主键id
			 * 2.分类名
			 * 3.排序
			 * 4.图标
			 * 5.是否显示
			 */
			$pid = I("post.pid/d",0,"int");
			$name = I("post.name/s");
			$class = $pid - 1;
			$ifShow = I("post.ifShow/d");
			$sortOrder = I("post.sortOrder/d");			
			$icon = I("post.icon");
			
			
			$id = $this->categoryD->addData($class,$pid,$name,$ifShow,$sortOrder);
			
			if(!file_exists($this->xmlPath)){ return; }
			
			$xml = simplexml_load_file($this->xmlPath);
			$xml->addChild($id,$name);
			$xml->$id->addAttribute("pid",$pid);
			$xml->asXML($this->xmlPath);
		}
	}
}
