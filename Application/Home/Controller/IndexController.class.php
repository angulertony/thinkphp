<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	
	public function _before_index(){
		
	}
	
	
    public function index(){
    	//$id = visitor()->get("id");//id可能为0,代表用户未登录过没有相关cookie,session记录
		$id= 1;
		
		$this->navigation($id);
		$this->recommend($id);
		$this->userNav_history($id);
		$this->rank();
    	$this->display("/index");
	}
	
	private function navigation($id){
		$navigation=C('NAVIGATION');//NAVIGATION
		$this->assign('navigation',$navigation);
		$this->assign("userid",$id);
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
	
	
	private function userNav_history($id){
		if($id){
			//用户导航=======需要登录
			$userNav = array(
				"php","android","java","html","pc","c",
				"测试数据","测试数据测试数据","测试","测","测试数",
			);
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
}