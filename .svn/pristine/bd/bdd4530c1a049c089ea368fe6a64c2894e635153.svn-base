<?php
namespace Think;
/**
 * ThinkPHP 访客者类
 */
class Visitor {
	
	//用户表对象
	private $userM = null;
	
	//\Home\Common\下公用类对象
	private $userCommon = null;
	
	private $id = 0;
	
   	public function __construct() {
   		$this->userM = M("user");
		$this->userCommon = new \Home\Common\LoginCommon(); 
		$this->id = $this->userCommon->run();
   	}
	
	/*
	 * 取得访客指定信息
	 */
	 
	public function get($pram){
		if($pram === "id"){
			$result = $this->$id;
		}elseif($pram === "user_name"){
			$result = $this->userM->where("id={$this->id}")->getField('user_name');		
		}else{
			$result = $this->userM->where("id={$this->id}")->find();
		}
		return $result;
	}
	
	
}