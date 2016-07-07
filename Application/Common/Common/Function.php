<?php

/*
 * 获取访客信息
 * $id  判断是新登录,还是已登录 ;新登录传入id值,0已登录
 */
function visitor($id=0){
	$Visitor = new Common\lib\VisitorLib();
	$Visitor->$isMust = $isMust;
	if($id){
		//用户是新登录进入,则id需传入用户id
		$Visitor->setCookie($id);
		$Visitor->setSession($id);
	}
	return $Visitor;
}

/*
 * 检查提交内容
 * 传入数据格式:
 * array("name|TYPE"=>$value,);
 * 		name:返回数据变量名
 * 		|  :分割数组key名和指定数据格式
 * 		TYPE:指明该数据应该以什么格式呈现
 * 		$value:待检查数据
 * 
 *  TYPE支持格式:
 * 		TEL,EMAIL
 * 
 *  返回数据格式:
 * 	1. 传入只有一条数据,直接返回检查后的值
 *  2. 传入2条以上数据,返回数组
 */
//function check($data){
//	if(!is_array($data)){ return null;}
//	$result = array();
//	foreach($data as $key=>$value){
//		if(strpos($key,"|") !== false){
//			$strArr = explode("|",$key);
//			$key = $strArr[0];
//			$type = $strArr[1];
//			if($type == "TEL"){
//				preg_match("/^1[34578]\d{9}$/",trim($value),);
//				
//			}elseif($type == "EMAIL"){
//				
//			}else{
//				//输入格式为不支持格式,进行一般检查;
//			}
//		}else{
//			//一般检查
//			
//		}
//	}
//	
//}

/*
 * 检查是否非法提交,数据是否有错误
 * $type 提交方式
 * $data 检测数据
 */
function check($type,$data=1){
	if(!$type){
		echo "<br />非法提交,提交方式(post,get,ajax...)不匹配 <br />";
		exit;
	}
	
	if(!is_array($data)){
		if(empty($data)){
			echo "<br />提交数据错误 <br />";
			exit;
		}
	}else{
		foreach($data as $key=>$value){
			if(empty($value)){
				echo "<br />提交数据错误,数组位置:{$key} <br />";
				exit;	
			}
		}
	}
}
