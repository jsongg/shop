<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<script	type="text/javascript" src="/Application/Admin/Public/js/jquery-1.8.2.min.js"></script>
<link href="/Application/Admin/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="/Application/Admin/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Application/Admin/Public/js/common.js"> </script>
<link href="/Application/Admin/Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link href="/Application/Admin/Public/css/hdui.css" rel="stylesheet" media="screen">
<script src="/Application/Admin/Public/js/hdui.js"></script>
<script type="text/javascript" src="/Application/Admin/Public/js/category.js"></script>
<div id="map">
	<span class='title'>修改密码</span>
</div>
<div id="content">
	<form id="categoryForm" action="<?php echo U('Admin/Root/editpwd');?>" method="post">
	<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="20%">名称</th>
				<th>值</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>原密码</td>
				<td>
					<input type="text" name="oldpwd" value="" />
				</td>
			</tr>
			<tr>
				<td>新密码</td>
				<td>
					<input type="text" name="pwd" value="" id="pwd"/>
				</td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td>
					<input type="text" name="pwd2" value="" />
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class='btn' id="mybutton" /></td>
			</tr>
		</tbody>
	</table>
	</form>
</div>
<script>
	$(function(){
		$('#mybutton').click(function(){
			$pwd=$('#pwd').val();
			if($pwd.length<6){
				alert('密码必须大于6位');
				return false;
			}
		})
	})
</script>
</body>
</html>