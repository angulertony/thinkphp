<?php
namespace Admin\Controller;
use Think\Controller;	
class CategoryController extends Controller{
	
	private $categoryD;
	private $defaultIco;
	
	public function index(){
		$this->display("/category");
	}
	
	public function _before_add(){
		$this->categoryD = new \Home\Model\CategoryModel();
	}
	
	public function add(){
		if(!IS_POST){
			$all = $this->categoryD->getChildren(0);
			$this->assign('all',$all);
			$this->display("/categoryAdd");
		}else{
			$pid = I("post.pid/d",0,"int");
			$name = I("post.name/s");
			$class = $this->categoryD->where(array('id'=>$pid))->getField('class') + 1 ;
			$ifShow = I("post.ifShow/d");
			$sortOrder = I("post.sortOrder/d");			
			$icoInfo =  upLoad(array('savePath'=>'Ico/'));//一维或0 
			$icoInfo = empty($icoInfo) ? array('savename'=>"ico.jpg") : $icoInfo ;
//			$icoInfo = e($icoInfo,0);//用于检测是否为空,为空赋予默认值
			$id = $this->categoryD->addData($class,$pid,$name,$ifShow,$sortOrder);
			$ico =$icoInfo["savename"];
			
			$xml = xml()->addC(array('id'=>$id,'pid'=>$pid,'class'=>$class,'name'=>$name,'ico'=>$ico));
			if($xml === false){  echo "Add Category Fail!"; return;}			
			echo "Add Category Success!";
		}
	}
}
