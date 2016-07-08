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
<hr />
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
				<h2>一级视频资料</h2>
				<div class="nav-vedio">
					<ul class="vedio-list">
						<li><img src="/Application/Home/View/image/1.jpg" alt="图片"/></li>
						<li><img src="/Public/1.jpg"/></li>
						<li><img src="/Home/View/image/1.jpg"/></li>
						<li><img src="/Application/Home/View/image/1.jpg"/></li>
						<li><img src="/Home/image/1.jpg"/></li>
					</ul>
				</div>
			</div>
			
			<BR />
			
			<BR />
			
			<BR />
			/Home
			<BR />
			/Home/Category
			<BR />
			/Home/Category/index
			<BR />
			/Home/Category/index.html
			<BR />
			/Public
			<BR />
			/Application/Home/View/js
			<BR />
			/Application/Home/View/css
			<BR />
			<div style="float: right;">
				<h2>一级图文资料</h2>
				<div class="nav-text">
					<ul class="text-list">
						<li>3</li>
						<li>3</li>
						<li>3</li>
						<li>3</li>
					</ul>
				</div>
			</div>
		</div>
</div>
/Application/Home/View/footer.html

<hr />
<section class="copyright">
	<div>11111111111.<br> XueXYZ 版权所有</div>
</section>
</body>
</html>