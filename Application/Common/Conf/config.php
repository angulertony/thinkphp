<?php
return array(
	//'配置项'=>'配置值'
	'mode'=>array(),
    'config'=>array(),
    'alias'=>array(),
    'tags'=>array(),
    'UP_LOAD'=>array(
	    'maxSize'=>3145728,							//文件最大3.14Mb
    	'rootPath'=>'./Public/Uploads/',				//上传文件根目录
    	'exts'=>array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
    	'saveName'=>array('uniqid',''),				//上传后文件名,uniqid唯一id
		'autoSub'=>false,							//是否自动创建子目录
	),
	
	'default_ico_info'=>array(
		'sevepath'=>'',
		'savename'=>'',
		'ext'=>'',
	),
//key	附件上传的表单名称
//savepath	上传文件的保存路径
//name	上传文件的原始名称
//savename	上传文件的保存名称
//size	上传文件的大小
//type	上传文件的MIME类型
//ext	上传文件的后缀类型
//md5	上传文件的md5哈希验证字符串 仅当hash设置开启后有效
//sha1	上传文件的sha1哈希验证字符串 仅当hash设置开启后有效
		

);