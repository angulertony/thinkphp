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

function upLoad($pram){
	if(!is_array($pram)){
		echo "error:upLoad(),need array";
		return;
	}
	$upLoadConfig = C("UP_LOAD");
	$config = array(
	    'maxSize'    =>    empty($pram['maxSize'] ) ? $upLoadConfig['maxSize'] : $pram['maxSize'],
	    'rootPath'   =>    empty($pram['rootPath']) ? $upLoadConfig['rootPath']: $pram['rootPath'],
	    'savePath'   =>    empty($pram['savePath']) ? $upLoadConfig['savePath'] : $pram['savePath'],
	    'saveName'   =>    empty($pram['saveName']) ? $upLoadConfig['saveName'] : $pram['saveName'],
	    'exts'       =>    $upLoadConfig['exts'],
	    'autoSub'    =>    empty($pram['autoSub']) ? $upLoadConfig['autoSub'] : $pram['autoSub'],
//	    'subName'    =>    array('date','Ymd'),
	);
	$upload = new \Think\Upload($config);// 实例化上传类
	$info = $upload->upload();
    if(!$info){
    	return 0;
    	// 上传错误,提示错误信息
    	//dump($upload->getError());
    }else{
    	// 上传成功,$info始终是二维数组,这里做区分,如果只有一个文件上传,则返回一维数组
    	if(count($info) == 1){  
			return current($info);	
    	}else{
    		return $info;
    	}
    }
	
/*
 * 返回属性
 * 
key	附件上传的表单名称
savepath	上传文件的保存路径
name	上传文件的原始名称
savename	上传文件的保存名称
size	上传文件的大小
type	上传文件的MIME类型
ext	上传文件的后缀类型
md5	上传文件的md5哈希验证字符串 仅当hash设置开启后有效
sha1	上传文件的sha1哈希验证字符串 仅当hash设置开启后有效
 * 
 * 
 * 上传属性
 * 
maxSize	文件上传的最大文件大小（以字节为单位），0为不限大小
rootPath	文件上传保存的根路径
savePath	文件上传的保存路径（相对于根路径）
saveName	上传文件的保存规则，支持数组和字符串方式定义
saveExt	上传文件的保存后缀，不设置的话使用原文件后缀
replace	存在同名文件是否是覆盖，默认为false
exts	允许上传的文件后缀（留空为不限制），使用数组或者逗号分隔的字符串设置，默认为空
mimes	允许上传的文件类型（留空为不限制），使用数组或者逗号分隔的字符串设置，默认为空
autoSub	自动使用子目录保存上传文件 默认为true
subName	子目录创建方式，采用数组或者字符串方式定义
hash	是否生成文件的hash编码 默认为true
callback	检测文件是否存在回调，如果存在返回文件信息数组
 * 
 */
	
function e($pram,$default){
	if(is_array($pram)){
			if(is_array($default)){
				foreach($pram as $key=>$value){
					if(empty($value)){
						//未写完...
	//					if($default[$key]){
	//						
	//					}else{
	//						
	//					}
	//					$value=					
					}else{
						
					}
				}
			}else{
				echo "error:e(),pram is array,default must be array";
				return 0;
			}
	}else{
			if(is_array($default)){
				echo "error:e(),pram is not  array ,default must not be array";
				return 0;
			}else{
				return	empty($pram) ? $default : $pram;
			}
			
		}
	}
}

function xml(){
	$xml = new \Common\Lib\XmlLib();
	return 	$xml;
}