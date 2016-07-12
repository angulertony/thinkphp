<?php
namespace Admin\Controller;
use Think\Controller;
class ResourceController extends Controller{
	
	public function index(){
		$this->display("/resource");		
	}
	
	public function add(){
		if(!IS_POST){
			$this->display("/resourceAdd");		
		}else{
			/*
			 * 需要信息
			 * 1,所属分类
			 * 2,资源类型
			 * 3,资源链接
			 * 4,资源标题
			 * 5,资源图片
			 * 6,资源内容简介(文章)
			 */
			$id = I("post.id/d");
			$type = I("post.type/d");
			$url = I("post.url");
			$title = I("post.title");
			$introduce = I("post.introduce");
			$ifshow = I("post.ifshow");
			
			
			
			
		}
	}
	
}
