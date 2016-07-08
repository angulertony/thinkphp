<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
    	//分的大类--导航条
    	$navigation=C('NAVIGATION');//NAVIGATION
		$this->assign('navigation',$navigation);
		//开始的背景图
		$startBg= M('start_bg');
		$startBg=$startBg->select();
		$rand=mt_rand(0,count($startBg)-1);
		$this->assign('rand',$rand);
		$this->assign('start_bg',$startBg);

		//私人订制
		$private= M('private');
		$data=$private->select();
		$this->assign('data',$data);
		$this->display();
	}
	//网站导航+固定传值
	private function navigation($id){
		$navigation=C('NAVIGATION');//NAVIGATION
		$this->assign('navigation',$navigation);
		$this->assign("userid",$id);
	}
	public function doindex(){
    	//$id = visitor()->get("id");//id可能为0,代表用户未登录过没有相关cookie,session记录
		$id= 1;
		
		$this->navigation($id);
		$this->recommend($id);
		$this->userNav_history($id);
		$this->rank();
    	$this->display("");
	}
	//小图标
	public function ico(){
		//$link = "http://statics.dnspod.cn/proxy_favicon/_/favicon?domain=";
		$url = "https://www.baidu1111333.com/index.php";
		$www = stripos($url,"WWW.");
		$com = stripos($url,".com");
		echo substr($url,$www,($com-$www+4));
	}
	//私人定制的链接
	public function userNavigationAdd(){
		$id = 1;//用户id
		$name = I("post.name");
		$link = I("post.link");
		check(IS_POST,array($name,$link));
		if(!preg_match("/^(http:\/\/|https:\/\/|ftp:\/\/|www\.)[^\s]*/i", $link)){
			$link = "www.{$link}";
		}	

		//www http:// baozho.com
		$link = "http://www.baidu.com/favicon.ico";
		$ico = file_get_contents($link);
		if($ico){
			echo 1111;
		}
		echo "<img src='{$link}'>";
		exit;
		
	}
	private function userNav_history($id){
		
		
		
		if($id){
			//用户导航=======需要登录
			$userNav = array(
				"php","android","java","html","pc","c",
				"测试数据","测试数据测试数据","测试","测","测试数",
			);
			//私人定制的数据
			$private= M('private');
			$data=$private->select();
			$this->assign('data',$data);
			$userNav=$data;
			
			
			$this->assign("userNav",$userNav);

			//学习历史=======需要登录
			$history = array(
				"学习历史","学习历史学习历史","历史","测","测试数",
			);
			
			$this->assign("history",$history);
		}
	}
	
	private function rank(){
		$rank = array(
			"排行信息",
			"排行信息",
			"排行信息",
			"排行信息",
			"排行信息",
		);
		$this->assign("rank1",$rank);
		$this->assign("rank2",$rank);
		$this->assign("rank3",$rank);
		$this->assign("rank4",$rank);
	}
	private function recommend($id){
		if($id){
			//相关推荐=======
			$recommend = array(
				"用户登录","用户登录推荐","推荐","测","测试数",
			);
		}else{
			$recommend = array(
				"未登录","用户未登录","推荐","测","测试数",
			);
		}
		$this->assign("recommend",$recommend);
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

	public function collect(){
		$private= M('private');
		$name=I("get.wapname");
		$link=I("get.waplink");
		$id=I('get.id');
		//判断是否输入www或http
		if(!preg_match("/^(http:\/\/|https:\/\/|ftp:\/\/|www\.)[^\s]*/i", $link)){
			$link = "http://www.{$link}";//http://www.{$link}
		}
		
		$domainName=C('DOMAIN_NAME');//域名数组
		for($i=0;$i<(count($domainName)-1);$i++){
			$length=strpos($link,$domainName[$i]);
			if($length>0){
				break;
			}
		}
		/*
		$length=strpos($link,'com');
		if(!$length){
			$length=strpos($link,'net');
		}*/
		
		$startLink=substr($link,0,$length+3);
		
		
		$newLink=substr($startLink,0,4);
		if($newLink=='http'){
			$length=strpos($link,'//');
			$startLink=substr($startLink,$length+2);
		}
		//$csdnLink=strpos($link,'csdn');
		
		/*
		if($newLink!='http'){
		  $logoUrl='http://'.$startLink."/favicon.ico";	

		}else{
			 $logoUrl=$startLink."/favicon.ico";	
		}*/
		$logoUrl = "http://statics.dnspod.cn/proxy_favicon/_/favicon?domain=".$startLink;
		
		$data=file_get_contents($logoUrl);
		if(!$data){
			$logoUrl='/thinkphp/public/style/pic/6000.png';
		}
		//如果网站没有 http
		$linkUrl=substr($link,0,4);
		if($linkUrl!='http'){
			$link='http://'.$link;
		}
		
		
		$data=array(
			'user_id'=>5,//$id = visitor()->get("id") 写这个来指定用户
			'collect_no'=>6,//外部的自己加的收藏的话就默认一个数值
			'add_time'=>time(),
			'logo_url'=>$logoUrl,
			'name'=>$name,
			'link'=>$link
		);
		
		if($id!=0){//进行编辑
			$info=$private->where('id='.$id)->save($data);
			if($info){
				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
			exit;
		}else{//进行添加
			
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
}