<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model {
	
	//获取1级分类
	public function getLevel1(){
		return $this->where("class=1 and if_show=1")->order->find();
	}
	
	//获取2级分类
	public function getLevel2(){
		return $this->where("class=2 and if_show=1")->find();
	}
	
	//获取3级分类
	public function getLevel3(){
		return $this->where("class=3 and if_show=1")->find();
	}
	
	//获取下1级
	public function getChild($parent){
		return $this->where("parent={$parent} and if_show=1")->find();
	}
	
	//获取该分类下所有子类
	public function getChildren($parent){
	}
}
	