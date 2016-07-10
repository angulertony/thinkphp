<?php
namespace Admin\Controller;
use Think\Controller;	
class CategoryController extends Controller{
	
	private $categoryD;
	private $xmlPath;
	private $defaultIco;
	
	public function index(){
		$this->display("/category");
	}
	
	public function _before_add(){
		$this->categoryD = new \Home\Model\CategoryModel();
		$this->xmlPath = PUBLIC_ROOT."category.inc";
//		$this->defaultIco = C("defaultIco");
	}
	
	public function add(){
		if(!IS_POST){
			$all = $this->categoryD->getChildren(0);
			$this->assign('all',$all);
			$this->display("/categoryAdd");
		}else{
			$pid = I("post.pid/d",0,"int");
			$name = I("post.name/s");
			$class = empty($pid) ? 1 : $pid + 1;
			$ifShow = I("post.ifShow/d");
			$sortOrder = I("post.sortOrder/d");			
			$icoInfo =  upLoad(array('savePath'=>'Ico/'));//一维或二维数组 /或0
//			$icoInfo = e($icoInfo,0);
			$id = $this->categoryD->addData($class,$pid,$name,$ifShow,$sortOrder);
			
			if(!file_exists($this->xmlPath)){ return; }
			$id = "id".$id;
			$icoPath =$icoInfo["savename"];
			$xml = simplexml_load_file($this->xmlPath);
			$xml->addChild($id,"1");
			$xml->$class->addAttribute("pid",$pid);
			$xml->$class->addAttribute("name",$name);
			$xml->$class->addAttribute("ico",$icoPath);
			$xml->asXML($this->xmlPath);
			echo "新增成功";
		}
	}
}
