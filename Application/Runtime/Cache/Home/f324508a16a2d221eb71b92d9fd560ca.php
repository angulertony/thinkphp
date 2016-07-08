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
<section class="middle-mine">
		<div class="mine-txt">
			<div>
		<h2 >上XueXYZ</h2>
		<h3 >轻松学习，快乐提高。<?php echo ($userid); ?></h3>
					<a href="<?php echo U('Category/index');?>"><button type="button">开始学习</button></a>
			</div>
		</div>
		<div class="mine-img">
				<div></div>
		</div>
</section>

<?php if(!empty($userid)): ?><div class="mine-order">
				<div class="order-head">订制类型:</div>
				<ul class="order-mine-page">
					<?php if(is_array($userNav)): foreach($userNav as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
					<label>+</label>
				</ul>
	</div>
	<div class="order-menu" style="display: none;">
		<div class="order-head">订制类型:</div>
		<ul class="order-mine-page">
			<span class="button-box">返回</span>
		</ul>
	</div><?php endif; ?>

<div class="interfix">
	<div class="order-head out">相关推荐:</div>
	<ul class="fix-page">
		<?php if(is_array($recommend)): foreach($recommend as $key=>$value): ?><li class="fix-page-search1">	
				<?php echo ($value); ?>
			</li><?php endforeach; endif; ?>
	</ul>
</div>

<?php if(!empty($userid)): ?><div class="annals">
		<div class="order-head out">浏览记录:</div>
		<ul class="order-mine-page">
			<?php if(is_array($history)): foreach($history as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
		</ul>
	</div><?php endif; ?>

<div class="sorting">
	<ul class="sort_1">
		<span class="sort-head">排行榜1</span>
		<?php if(is_array($rank1)): foreach($rank1 as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
	</ul>
	<ul class="sort_2">
		<span class="sort-head">排行榜1</span>
		<?php if(is_array($rank2)): foreach($rank2 as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
	</ul>
	<ul class="sort_3">
		<span class="sort-head">排行榜1</span>
		<?php if(is_array($rank3)): foreach($rank3 as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
	</ul>
	<ul class="sort_4">
		<span class="sort-head">排行榜1</span>
		<?php if(is_array($rank4)): foreach($rank4 as $key=>$value): ?><li><?php echo ($value); ?></li><?php endforeach; endif; ?>
	</ul>
</div>

<script>
	$(".mine-order ul label").click(function(){
		$(".mine-order").fadeOut("slow");
		$(".order-menu").fadeIn("slow");
	});
	$(".order-menu ul span").click(function(){
		$(".mine-order").fadeIn("slow");
		$(".order-menu").fadeOut("slow");
	})
</script>


<section class="copyright">
	<div>Copyright © 2016 XueXYZ. All Rights Reserved.<br> XueXYZ 版权所有</div>
</section>
</body>
</html>

<hr />
<section class="copyright">
	<div>11111111111.<br> XueXYZ 版权所有</div>
</section>
</body>
</html>