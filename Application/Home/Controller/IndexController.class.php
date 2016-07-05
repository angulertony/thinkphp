<<<<<<< HEAD
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//$ss='http://www.php100.com/html/php/hanshu/2013/0905/4650.html';

		//echo substr($ss,0,$length+3);
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	//分的大类--导航条
    	$navigation=C('NAVIGATION');//NAVIGATION
		//$navigation=explode(',',$navigation);
		//$new['count']=count($new);
		$this->assign('navigation',$navigation);
		//开始的背景图
		$startBg= M('start_bg');
		$startBg=$startBg->select();
		$rand=mt_rand(0,count($startBg)-1);
		$this->assign('rand',$rand);
		$this->assign('start_bg',$startBg);
		//foreach($start_bg as $stbg){
			//$no=mt_rand(0,count($stbg));
			//echo "<img style="width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$sbg['image_path'].'/>';
			//echo "<img src="/thinkphp/Public/upload/start_bg/$sbg['image_path']" />"
			//echo "<img style='width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$stbg['image_path']."' /><br/>";
			//echo "<br/>";
			//echo $stbg['image_path'];
		//}
		//私人订制
		$private= M('private');
		//$shuju=$start_bg->join('xyz_cates ON xyz_private.collect_no = xyz_cates.id')->select();
		//$data=$private->alias('a')->join('xyz_cates as b ON a.collect_no = b.id')->where('a.user_id=3')->select();
		$data=$private->select();
		//dump($data[8]);
		//var_dump($data);
		$this->assign('data',$data);
		//echo '--------------------------------------------------------------------<br/><br/>';
		//echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[0]['logo']."' /> <span style='font-size:12px;'>".$shuju[0]['name']."</span><br/>";
		//echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[1]['logo']."' /> <span style='font-size:12px;'>".$shuju[1]['name']."</span><br/>";
		//var_dump($shuju[0]['logo']);
		$this->display();
	}
	public function left(){
		//var_dump($rr);
		$this->display();
	}
	public function right(){
		echo '<h2>welcome<h2>';
	}
	public function top(){
		$this->display();
		
	}

	public function yun(){
		$private= M('private');
		//$name=I(get.wapname,null);
		//$link=I(get.waplink,null);
		$id=$_GET['id'];
		$name=$_GET['wapname'];
		$link=$_GET['waplink'];
		$length=strpos($link,'com');
		if(!$length){
			$length=strpos($link,'net');
		}
		$startLink=substr($link,0,$length+3);
		$newLink=substr($startLink,0,4);
		$csdnLink=strpos($link,'csdn');
		if($newLink!='http'){
		  $logoUrl='http://'.$startLink."/favicon.ico";	

		}else{
			 $logoUrl=$startLink."/favicon.ico";	
		}
		if($csdnLink){
			$logoUrl='http://c.csdnimg.cn/public/favicon.ico';
		}
		
		$data=file_get_contents($logoUrl);
		if(!$data){
			$logoUrl='/thinkphp/public/style/pic/6000.png';
		}
		$linkUrl=substr($link,0,4);
		if($linkUrl!='http'){
			$link='http://'.$link;
		}
		
		$data=array(
			'user_id'=>5,
			'collect_no'=>6,
			'add_time'=>time(),
			'logo_url'=>$logoUrl,
			'name'=>$name,
			'link'=>$link
		);
		if($id!=0){
			
			$info=$private->where('id='.$id)->save($data);
			if($info){
				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
			exit;
		}else{
			
			if($id=$private->add($data)){
				$xyzPrivate=M('private');
				$xyzData=$xyzPrivate->find($id);
				$this->ajaxReturn($xyzData);
			} else{
				$this->ajaxReturn('ddd');
			}
			
		}
		
		
		
		//$this->display();
	}
	public function del(){
		$id=$_GET['id'];
		$private= M('private');
		if($private->delete($id)){
			$this->ajaxReturn(true);
		}else{
			$this->ajaxReturn(false);
		}
		
	}
	public function edit(){
		$id=$_GET['id'];
		$private= M('private');
		$data=$private->find($id);
		if($data){
			$this->ajaxReturn($data);
		}else{
			$this->ajaxReturn(false);
		}
	}
=======
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//$ss='http://www.php100.com/html/php/hanshu/2013/0905/4650.html';
		$ss="http://lib.csdn.net/base/softwaretest";
		//echo strpos($ss,'net');
		$length=strpos($ss,'com');
		if(!$length){
			$length=strpos($ss,'net');
		}
		//echo substr($ss,0,$length+3);
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	//分的大类--导航条
    	$navigation=C('navigation');
		$navigation=explode(',',$navigation);
		//$new['count']=count($new);
		$this->assign('navigation',$navigation);
		//开始的背景图
		$startBg= M('start_bg');
		$startBg=$startBg->select();
		$rand=mt_rand(0,count($startBg)-1);
		$this->assign('rand',$rand);
		$this->assign('start_bg',$startBg);
		//foreach($start_bg as $stbg){
			//$no=mt_rand(0,count($stbg));
			//echo "<img style="width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$sbg['image_path'].'/>';
			//echo "<img src="/thinkphp/Public/upload/start_bg/$sbg['image_path']" />"
			//echo "<img style='width:100px;height:100px;' src='/thinkphp/Public/upload/start_bg/".$stbg['image_path']."' /><br/>";
			//echo "<br/>";
			//echo $stbg['image_path'];
		//}
		//私人订制
		$private= M('private');
		//$shuju=$start_bg->join('xyz_cates ON xyz_private.collect_no = xyz_cates.id')->select();
		//$data=$private->alias('a')->join('xyz_cates as b ON a.collect_no = b.id')->where('a.user_id=3')->select();
		$data=$private->select();
		//dump($data[8]);
		//var_dump($data);
		$this->assign('data',$data);
		//echo '--------------------------------------------------------------------<br/><br/>';
		//echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[0]['logo']."' /> <span style='font-size:12px;'>".$shuju[0]['name']."</span><br/>";
		//echo "<img style='width:20px;height:20px;' src='/thinkphp/Public/upload/start_bg/".$shuju[1]['logo']."' /> <span style='font-size:12px;'>".$shuju[1]['name']."</span><br/>";
		//var_dump($shuju[0]['logo']);
		$this->display();
	}
	public function left(){
		//var_dump($rr);
		$this->display();
	}
	public function right(){
		echo '<h2>welcome<h2>';
	}
	public function top(){
		$this->display();
		
	}

	public function yun(){
		$private= M('private');
		//$name=I(get.wapname,null);
		//$link=I(get.waplink,null);
		$name=$_GET['wapname'];
		$link=$_GET['waplink'];
		$length=strpos($link,'com');
		if(!$length){
			$length=strpos($link,'net');
		}
		$startLink=substr($link,0,$length+3);
		$newLink=substr($startLink,0,4);
		if($newLink!='http'){
		  $logoUrl='http://'.$startLink."/favicon.ico";	
		}else{
			 $logoUrl=$startLink."/favicon.ico";	
		}
		$csdnLink=strpos($link,'csdn');
		if($csdnLink){
			$logoUrl='http://c.csdnimg.cn/public/favicon.ico';
		}
		//http://c.csdnimg.cn/public/favicon.ico
		$data=array(
			'user_id'=>5,
			'collect_no'=>6,
			'add_time'=>time(),
			'logo_url'=>$logoUrl,
			'name'=>$name,
			'link'=>$link
		);
		if($private->add($data)){
				$this->ajaxReturn('qqq');
		} else{
				$this->ajaxReturn('ddd');
		}
		//$this->display();
	}
	
>>>>>>> dd6655446e5ea48ed0e965096d888ee10f512a70
}