<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<script	type="text/javascript" src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js/jquery-1.8.2.min.js"></script>
<link href="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js/common.js"> </script>
<link href="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="map">
	<span class='title'>文章列表</span>
</div>
<div id="content">
	<table id="table" class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="5%"></th>
				<th width="25%">文章名称</th>
				<th width="30%">文章标题</th>
				<th width="10%">文章排序</th>
				<th width="10%">是否显示</th>
				<th >操作</th>
			</tr>
		</thead>
		<tbody>
		
			<tr class="" cid="" level="">
				<td><a class='btn btn-mini btn-info unfold' style="font-size:16px;" href="">+</a></td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>
					4
				</td>
				<td>
					<a class='btn btn-small' href="<?php echo U('Admin/Category/add');?>/cid/">添加子类</a>
					<a class='btn btn-small' href="<?php echo U('Admin/Category/edit');?>/cid/">编辑</a>
					<a class='btn btn-small delAffirm' href="<?php echo U('Admin/Category/del');?>/cid/">删除</a>
				</td>
			</tr>
		</foreach>	
		</tbody>
	</table>
</div>
</body>
</html>