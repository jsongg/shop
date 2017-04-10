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

<style>
	#content{
		margin-top: 10px;
	}
</style>
</head>
<body>

<div id="map">
	<span class='title'>文章列表</span>
</div>
<div>
	<form class="well form-search" method="post" action="<?php echo U('Admin/Article/index');?>">
		分类： 
		<select class="select_2" name="cid">
			<option value='0'>全部</option>
			<?php if(is_array($level)): foreach($level as $key=>$v): ?><option value='<?php echo ($v["cid"]); ?>'><?php echo ($v["html"]); ?>|-<?php echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
		</select> &nbsp;&nbsp;
		时间：
		<input type="text" name="start_time" class="js-date" value="" style="width: 80px;" autocomplete="off">-
		<input type="text" class="js-date" name="end_time" value="" style="width: 80px;" autocomplete="off"> &nbsp; &nbsp;
		关键字： 
		<input type="text" name="keyword" style="width: 200px;" value="" placeholder="请输入关键字...">
		<input type="submit" class="btn btn-primary" value="搜索" />
	</form>
</div>
<div id="content">
	<table id="table" class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="5%"></th>
				<th width="25%">标题</th>
				<th width="8%">分类id</th>
				<th width="8%">点击量</th>
				<th width="10%">来源</th>
				<th width="20%">发布时间</th>
				<th width="15%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><input type="checkbox"></td>
				<td><?php echo ($v["title"]); ?></td>
				<td><?php echo ($v["cid"]); ?></td>
				<td><?php echo ($v["hits"]); ?></td>
				<td><?php echo ($v["copyfrom"]); ?></td>
				<td><?php echo ($v["update_time"]); ?></td>
				<td>
					<a class='btn btn-small' href="<?php echo U('Admin/Article/edit');?>/id/<?php echo ($v["id"]); ?>/cid/<?php echo ($v["cid"]); ?>">编辑</a>
					<a class='btn btn-small delAffirm' href="<?php echo U('Admin/Article/del');?>/id/<?php echo ($v["id"]); ?>">删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>
</body>
</html>