<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/Application/Admin/Public/css/base.css" type="text/css" rel="stylesheet">
<link href="/Application/Admin/Public/css/index.css" type="text/css" rel="stylesheet">
<link href="/Application/Admin/Public/css/reset.css" type="text/css" rel="stylesheet">
<script	type="text/javascript" src="/Application/Admin/Public/js/jquery-1.8.2.min.js"></script>
<script	type="text/javascript" src="/Application/Admin/Public/js/index.js"></script>
<base target="showContent" />
<title>青花瓷后台</title>

</head>
<body style="overflow:hidden;" scroll="no">

<div id="header">
	<div class='hd-box'>
		<div class='hd-top'>
			<div class="logo">
				<a href=""><img src=""/></a>
			</div>
			<div class='logout'>
				<a style='color:#FFF;' target="_self" href="<?php echo U('Home/Index/index');?>">站点主页</a>
				<a target="_self" href="<?php echo U('Admin/Login/logout');?>">退出登录</a>
			</div>
		</div>
		<div class='bar'>
			<div class='home'>
				<a href="javascript:0"></a>
			</div>
			<div class="nav">
				<a href="<?php echo U('Admin/Root/index');?>">管理员</a>
				<a href="<?php echo U('Admin/Category/index');?>">分类管理</a>
				<a href="<?php echo U('Admin/Article/index');?>">文章管理</a>
				<a href="<?php echo U('Admin/Giftsend/index');?>">礼品寄送</a>
			</div>
		</div>
	</div>
</div>
<div id="box">
	<div id="sidebar">
		<!-- 会员管理 -->
		<div class='menuItem' style="display: block;">
			<div class='menu'>
				<a class='title' href="javascript:void(0);">管理员</a>
				<ul class='menuList' >
					<li><a href="<?php echo U('Admin/Root/index');?>">管理员列表</a></li>
				</ul>
			</div>
		</div>
		<!-- 分类管理 -->
		<div class='menuItem'>
			<div class='menu'>
				<a class='title' href="javascript:void(0);">分类管理</a>
				<ul class='menuList' >
					<li><a href="<?php echo U('Admin/Category/add');?>">添加分类</a></li>
					<li><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></li>
				</ul>
			</div>
		</div>
		<!-- 文章管理 -->
		<div class='menuItem'>
			<div class='menu'>
				<a class='title' href="javascript:void(0);">文章管理</a>
				<ul class='menuList' >
					<li><a href="<?php echo U('Admin/Article/add');?>">添加文章</a></li>
					<li><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li>
				</ul>
			</div>
		</div>
		<!-- 礼品寄送 -->
		<div class='menuItem'>
			<div class='menu'>
				<a class='title' href="javascript:void(0);">礼品寄送</a>
				<ul class='menuList' >
					<li><a href="<?php echo U('Admin/Giftsend/index');?>">寄送列表</a></li>
					<!-- <li><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
		 <iframe id="iContent" name='showContent' scrolling="auto" height="100%" width="100%" frameborder="0" src="<?php echo U('Admin/Root/index');?>" >
     		  
	 	</iframe>
	</div>
</div>
</body>
</html>