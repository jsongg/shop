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
<div id="map">
	<span class='title'>管理员列表</span>
</div>
<div id="content">
	<table id="table" class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="60%">用户名</th>
				<th >操作</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>admin</td>
				<td>
					<a class='btn btn-small' href="<?php echo U('Admin/Root/editpwd');?>">修改密码</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>