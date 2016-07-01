<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	//输出导航条
    	$header=C('navigation');
		$new=explode(',',$header);
		for($i=0;$i<count($new);$i++){
			echo $new[$i].'<br/>';
		}
		
		$start_bg= M('start_bg');
		$start_bg=$start_bg->select();
		foreach($start_bg as $stbg){
			//echo "<img style="width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$sbg['image_path'].'/>';
			//echo "<img src="/thinkphp/Public/upload/start_bg/$sbg['image_path']" />"
			echo "<img style='width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$stbg['image_path']."' /><br/>";
			//echo "<br/>";
			//echo $stbg['image_path'];
		}
		$start_bg= M('private');
		$shuju=$start_bg->join('xyz_cates ON xyz_private.collect_no = xyz_cates.id')->select();
		var_dump($shuju);
		echo '--------------------------------------------------------------------<br/><br/>';
		echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[0]['logo']."' /> <span style='font-size:12px;'>".$shuju[0]['name']."</span><br/>";
		echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[1]['logo']."' /> <span style='font-size:12px;'>".$shuju[1]['name']."</span><br/>";
		//var_dump($shuju[0]['logo']);
		//$this->display();
	}
	public function left(){
		$this->display();
	}
	public function right(){
		echo '<h2>welcome<h2>';
	}
	public function top(){
		$this->display();
		
	}
}
