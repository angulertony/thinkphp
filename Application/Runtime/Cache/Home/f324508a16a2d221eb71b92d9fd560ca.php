<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：ght
	时间：2016-07-01
	描述：mine / order and interfix
-->
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
		<link rel="stylesheet" href="/Application/Home/View/css/header.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/mine.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/footer.css" />
		<link rel="stylesheet" href="/Application/Home/View/css/category.css" />
		<script type="text/javascript" src="/Application/Home/View/js/jquery-1.9.1.js"></script>
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
		<img src=""/>
	</div>
	 
	<div class="header-search">
		<input type="text" class="search-text" placeholder="搜索精彩内容">
		<div class="search-hot">
			<ul class="search-hot-list">
			</ul>
		</div>
	</div>
</header>
<section class="middle-mine">
		<div class="mine-txt">
			<div>
						<h2 >上XueXYZ</h2>
		<h3 >轻松学习，快乐提高。</h3>
					<button type="button">开始学习</button>
			</div>
		</div>
		<div class="mine-img">
				<div></div>
		</div>
</section>
<div class="mine-order">
			<div class="order-head">订制类型:</div>
			<ul class="order-mine-page">
				<li>php</li>
				<li>android</li>
				<li>web前端</li>
				<label>+</label>
			</ul>
</div>
<div class="order-menu" style="display: none;">
	<div class="order-head">订制类型:<span>x</span></div>
	<ul class="order-mine-page">
		<li>php</li>
		<li>android</li>
		<li>web前端</li>
	</ul>
</div>
<div class="interfix">
	<div class="order-head">相关推荐:</div>
	<ul class="fix-page">
		<li class="fix-page-search1">
			<a></a>
			<a></a>
			<a></a>
			<a></a>
			<a></a>
		</li>
		<li class="fix-page-search2">
			<a></a>
			<a></a>
			<a></a>
			<a></a>
			<a></a>
		</li>
		<li class="fix-page-search3">
			<a></a>
			<a></a>
			<a></a>
			<a></a>
			<a></a>
		</li>
	</ul>
</div>
<script>
	$(".mine-order ul label").click(function(){
		$(".mine-order").fadeOut("slow");
		$(".order-menu").fadeIn("slow");
	});
	$(".order-menu div span").click(function(){
		$(".mine-order").fadeIn("slow");
		$(".order-menu").fadeOut("slow");
	})
</script>
<!--
	作者：ght
	时间：2016-07-01
	描述：annals / sorting
-->
<div class="annals">
	<div class="order-head">浏览记录:</div>
	<ul class="order-mine-page">
		<li>php</li>
		<li>node.js</li>
		<li>svn</li>
	</ul>
</div>
<div class="sorting">
	<ul class="sort_1">
		<li>1</li>
		<li>2</li>
		<li>3</li>
		<li>4</li>
		<li>5</li>
	</ul>
	<ul class="sort_2">
		<li>1</li>
		<li>2</li>
		<li>3</li>
		<li>4</li>
		<li>5</li>
		<li>6</li>
		<li>7</li>
	</ul>
	<ul class="sort_3">
		<li>1</li>
		<li>2</li>
		<li>3</li>
	</ul>
	<ul class="sort_4">
		<li>1</li>
		<li>2</li>
	</ul>
</div>

<section class="copyright">
	<div>Copyright © 2016 XueXYZ. All Rights Reserved.<br> XueXYZ 版权所有</div>
</section>
<section class="footer-nav">
	<div>
		<a>意见反馈</a>
		<a>回到顶部</a>
	</div>
</section>