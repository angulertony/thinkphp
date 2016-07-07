<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model {
	//使用add 时.
//  protected $insertFields = array('account','password','nickname','email');
//  protected $updateFields = array('nickname','email');
//	
	
	//获取1级分类
	public function getLevel1(){
		return $this->where("class=1 and if_show=1")->select();
	}
	
	//获取2级分类
	public function getLevel2(){
		return $this->where("class=2 and if_show=1")->select();
	}
	
	//获取3级分类
	public function getLevel3(){
		return $this->where("class=3 and if_show=1")->select();
	}
	
	//获取下1级
	public function getChild($parent){
		return $this->where(array("parent"=>$parent,"if_show"=>1))->select();
	}
	
	
	//获取该分类下所有子类
	public function getChildren($parent){
	}
	
	//添加数据
	public function addData($class,$pid,$name,$ifShow=1,$sortOrder=65525){
		$addData = array(
			"class"=>$class,
			"pid"=>$pid,
			"name"=>$name,
			"if_show"=>$ifShow,
			"sort_order"=>$sortOrder,
		);
		$id = $this->add($addData);
		if(!is_numeric($id)){
			//跳转错误页面
			echo "插入数据出错";
			dump($addData);
			exit;
		}		
		
		return $id;
	}
	
}
	