<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<jquery/>
<bootstrap/>
<script type="text/javascript" src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js//common.js"> </script>
<link href="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link href="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/css/hdui.css" rel="stylesheet" media="screen">
<script src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js/hdui.js"></script>
<script type="text/javascript" src="/HUITENG/w79_qinghuaci/thinkphp_3.2.3_full/Application/Admin/Public/js//category.js"></script>
<div id="map">
	<span class='title'>添加文章</span>
</div>
<div id="content">
	<form id="categoryForm" action="<?php echo U('Admin/Category/add');?>" method="post">
	<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="20%">名称</th>
				<th>值</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>所属文章</td>
				<td>
					<select name="pid">
						<option value="">1</option>
						<option value="0">顶级文章</option>
						
					</select>
					
					
				</td>
			</tr>
			<tr>
				<td>文章名称</td>
				<td>
					<input type="text" name="cname" />
				</td>
			</tr>
			<tr>
				<td>文章标题</td>
				<td>
					<textarea name="title"></textarea>
				</td>
			</tr>
			<tr>
				<td>文章关键字</td>
				<td>
					<textarea name="keywords"></textarea>
				</td>
			</tr>
			<tr>
				<td>文章描述</td>
				<td>
					<textarea name="description"></textarea>
				</td>
			</tr>
			<tr>
				<td>文章排序</td>
				<td>
					<input name="sort" type="text" />
				</td>
			</tr>
			<tr>
				<td>是否显示</td>
				<td>
					<lable>
						<input type="radio" name="display" checked=true value="1"/>	
						<span>显示</span>
					</lable>
					<lable>
						<input type="radio" name="display" value="0"/>	
						<span>隐藏</span>
					</lable>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class='btn' /></td>
			</tr>
		</tbody>
	</table>
	</form>
	
	
	
</div>
</body>
</html>