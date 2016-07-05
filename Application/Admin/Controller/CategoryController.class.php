<<<<<<< HEAD
<?php
namespace Admin\Controller;
use Think\Controller;	
class CategoryController extends Controller{
	
	private $categoryD;
	private $xmlPath;
	
	private _befor_index(){
		$this->categoryD = D("category");
		$this->xmlPath = PUBLIC_ROOT."category.inc";
	}
	
	public function index(){
		
	}
	
	public function addCategory(){
		if(!IS_POST){
			$this->display("categoryAdd.html");
		}else{
			/*需要的数据
			 * 1.上级主键id
			 * 2.分类名
			 * */
			$pid = I("post.pid",0,"int");
			$name = I("post.name");
			$class = $pid - 1;
			$ifShow = I("post.ifShow");
			$sortOrder = I("post.sortOrder");			
			
			$id = $this->categoryD->addData($class,$pid,$name,$ifShow,$sortOrder);
			
			if(!file_exists($this->xmlPath)){	return;	}
			
			$xml = simplexml_load_file($this->xmlPath);
			$xml->addChild($id,$name);
			$xml->$id->addAttribute("pid",$pid);
			$xml->asXML($this->xmlPath);
		}
	}
	
	public function addResource(){
		if(!IS_POST){
			$this->display("resouceAdd.html");
		}else{
			
			
		}
		
		
		
	}
}
=======
<?php
namespace Admin\Controller;
use Think\Controller;	
class CategoryController extends Controller{
	
	private $categoryD;
	private $xmlPath;
	
	private _befor_index(){
		$this->categoryD = D("category");
		$this->xmlPath = PUBLIC_ROOT."category.inc";
	}
	
	public function index(){
		
	}
	
	public function addCategory(){
		if(!IS_POST){
			$this->display("categoryAdd.html");
		}else{
			/*需要的数据
			 * 1.上级主键id
			 * 2.分类名
			 * */
			$pid = I("post.pid",0,"int");
			$name = I("post.name");
			$class = $pid - 1;
			$ifShow = I("post.ifShow");
			$sortOrder = I("post.sortOrder");			
			
			$id = $this->categoryD->addData($class,$pid,$name,$ifShow,$sortOrder);
			
			if(!file_exists($this->xmlPath)){	return;	}
			
			$xml = simplexml_load_file($this->xmlPath);
			$xml->addChild($id,$name);
			$xml->$id->addAttribute("pid",$pid);
			$xml->asXML($this->xmlPath);
		}
	}
	
	public function addResource(){
		if(!IS_POST){
			$this->display("resouceAdd.html");
		}else{
			
			
		}
		
		
		
	}
}
>>>>>>> dd6655446e5ea48ed0e965096d888ee10f512a70
