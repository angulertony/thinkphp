<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>xuexyz</title>
		<meta name="description" content="xuexyz">
		<meta name="keywords" content="学习">
		<meta http-equiv="content-type" content="">
		<meta name="author" content="www.baozho.cn">
		<meta name="copyright" content="Baozho Inc. All Rights Reserved">
		<meta name="date" content="2016-07-01">
		<link rel="stylesheet" href="/Application/Home/View/css/commen.css"/>
		<link rel="stylesheet" href="/Application/Home/View/css/buttons_demo.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/header.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/mine.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/footer.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/category.css" />
		<script type="text/javascript" src="/Application/Home/View/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="/Application/Home/View/js/category.js"></script>
	</head>
	<body>
		<!--
        	作者：ght
        	时间：2016-07-01
        	描述：top and header
        -->
<div class="header-top">
	<p class="header-left">欢迎登陆xuexyz!</p>
	<div class="header-right">
		<ul class="top-item">
			<li><a>客服</a></li>
			<li><a>注册</a></li>
			<li><a>登陆</a></li>
		</ul>
		<div class="top-check">
			<a>简体中文</a>
			<i>|</i>
			<a>English</a>
		</div>
	</div>
</div>
<header class="header-bottom">
	<div class="header-logo">
		<!---<img src="/Application/Home/View/image/logo.png"/>--->
	</div>
	 
	<div class="header-search">
		<input type="text" class="search-text" placeholder="搜索精彩内容">
		<div class="search-hot">
			<ul class="search-hot-list">
				<?php if(is_array($navigation)): $i = 0; $__LIST__ = $navigation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li class="button-action"><?php echo ($nav); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>

		</div>
	</div>
	<section class="footer-nav">
	<div>
		<a>意见反馈</a>
		<a>回到顶部</a>
	</div>
</section>
</header>
    <!--
	作者：ght
	时间：2016-07-04
	描述：stair navigation
-->
<section class="middle-mine search-mine">
	<div>
		<ul class="search-page1" id="category-stair">
			<?php if(is_array($level1)): foreach($level1 as $key=>$value): ?><!--id:<?php echo ($value["id"]); ?>    <br />
				name:<?php echo ($value["name"]); ?>   <br />
				================  <br />-->
				<a><li>
					<?php echo ($value["name"]); ?>
					<p>
						<span class="list-top">直接进入</span>
						<span class="list-bottom">看看其他</span>
					</p>
				</li></a><?php endforeach; endif; ?>
		</ul>
	</div>
</section>
	<ul class="search-page2" id="secondary">
						<?php if(is_array($level1)): foreach($level1 as $key=>$value): ?><!--id:<?php echo ($value["id"]); ?>    <br />
		name:<?php echo ($value["name"]); ?>   <br />
		================  <br />-->
							<a><li><?php echo ($value["name"]); ?></li></a><?php endforeach; endif; ?>
		</ul>
<div class="stair-nav" id="stair-nav">
		<div>
			<div style="float: left;">
				<div class="calssify">
					<ul>
						<li>分类一</li>
						<li>分类一</li>
						<li>分类一</li>
					</ul>
				</div>
				<div class="nav-vedio">
					<div class="vedio-list">
						<ul class="vedio-list1">
							<a>
								<li>
									<img src="/Application/Home/View/image/1.jpg"/>
									<span class="explain">解说文字</span>
									<p><i class="hover-logo"></i></p>
								</li>
							</a>
							<a>
								<li><img src="/Application/Home/View/image/5.jpg"/><span class="explain">解说文字</span><p><i class="hover-logo"></i></p></li>
							</a>
							<a>
								<li><img src="/Application/Home/View/image/6.jpg"/><span class="explain">解说文字</span><p><i class="hover-logo"></i></p></li>
							</a>
						</ul>
						<ul class="vedio-list2">
							<a>
								<li><img src="/Application/Home/View/image/2.jpg"/><span class="explain">1111</span><p><i class="hover-logo"></i></p></li>
							</a>
							<a>
								<li><img src="/Application/Home/View/image/3.jpg"/><span class="explain">解说文字</span><p><i class="hover-logo"></i></p></li>
							</a>
							<a><li style="position: absolute;right: 0;top: 0;"><b style="margin-top: 50%;display: inline-block;border: 1px solid #999999;cursor: default;">进入视频专区</b></li></a>
						</ul>
					</div>
				</div>
			</div>
			<div style="float: right;">
				<div class="calssify">
					<ul>
						<li>分类一</li>
						<li>分类一</li>
						<li>分类一</li>
					</ul>
				</div>
				<div class="nav-text">
					<ul class="text-list">
						<li>
							<p>
								<h3>标题1</h3>
								<span>正文引言:152485451515sdfadfsafafsagfdsagdsagdsagadsgfsagdsagds阿斯顿发发的撒范德萨范德萨范德萨范德萨范德萨范德萨范德萨范德萨第三方的萨芬大范德萨范德萨发 </span>
							</p>
						</li>
						<li>
							<p>
								<h3>标题1</h3>
								<span>正文引言:152485451515sdfadfsafafsagfdsagdsagdsagadsgfsagdsagds阿斯顿发发的撒范德萨范德萨范德萨范德萨范德萨范德萨范德萨范德萨第三方的萨芬大范德萨范德萨发 </span>
							</p>
						</li>
						<li>
							<p>
								<h3>标题1</h3>
								<span>正文引言:152485451515sdfadfsafafsagfdsagdsagdsagadsgfsagdsagds阿斯顿发发的撒范德萨范德萨范德萨范德萨范德萨范德萨范德萨范德萨第三方的萨芬大范德萨范德萨发 </span>
							</p>
						</li>
						<li>
							<p>
								<h3>标题1</h3>
								<span>正文引言:152485451515sdfadfsafafsagfdsagdsagdsagadsgfsagdsagds阿斯顿发发的撒范德萨范德萨范德萨范德萨范德萨范德萨范德萨范德萨第三方的萨芬大范德萨范德萨发 </span>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
</div>
<section class="copyright">
	<div>11111111111.<br> XueXYZ 版权所有</div>
</section>
</body>
</html>