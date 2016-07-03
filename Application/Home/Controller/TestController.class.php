<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {

	function index() {

	}

	function xml() {
		$xmlpath = PUBLIC_ROOT."category.inc";
		$category = simplexml_load_file(PUBLIC_ROOT."category.inc");
		$category->item;//查询
		$category->item = "test_edit";//修改
		$category->addChild('name', 'Mr. Parser');//新增值
		
		$category->name;
//		$category->addAttribute('type', 'mpaa');//新增属性
//		$category->asXML($xmlpath);//保存
	}

}
