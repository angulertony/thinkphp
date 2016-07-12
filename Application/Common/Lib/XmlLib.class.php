<?php
namespace Common\Lib;
/*
 * xml操作类
 */
class XmlLib {

	private $_xml;
	private $_xmlPath;

	public function __construct() {
		$this -> xmlPath = PUBLIC_ROOT . "category.inc";
		if (!file_exists($this -> xmlPath)) {
			return null;
		}
		$this -> _xml = simplexml_load_file($this -> xmlPath);
	}

	/*
	 * 新增分类
	 * 需传入数组
	 *
	 */
	public function addC($var) {
		if (is_array($var)) {
			$id = "id{$var['id']}";
			$this -> _xml -> addChild($id, "");
			$this -> _xml -> $id -> addAttribute("pid", $var['pid']);
			$this -> _xml -> $id -> addAttribute("name", $var['name']);
			$this -> _xml -> $id -> addAttribute("class", $var['class']);
			$this -> _xml -> $id -> addAttribute("ico", $var['ico']);
			$this -> _xml -> asXML($this -> xmlPath);
			return true;
		} else {
			return false;
		}
	}
}
