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
	<span class='title'>寄送列表</span>
</div>
<div>
	<form class="well form-search" method="post" action="<?php echo U('index');?>">
		分类： 
		<select class="select_2" name="flag">
			<option value='0'>全部</option>
			<option value='1'>已寄送</option>
			<option value='2'>未寄送</option>
		</select> &nbsp;&nbsp;
		时间：
		<!-- <input type="text" name="start_time" class="js-date" value="" style="width: 80px;" autocomplete="off">-
		<input type="text" class="js-date" name="end_time" value="" style="width: 80px;" autocomplete="off"> &nbsp; &nbsp;
		关键字： 
		<input type="text" name="keyword" style="width: 200px;" value="" placeholder="请输入关键字..."> -->
		<input type="submit" class="btn btn-primary" value="搜索" />
	</form>
</div>
<div id="content">
	<form action="<?php echo U('sendgift');?>" method="post">
		<table id="table" class='table table-striped table-bordered'>
			<thead>
				<tr>
					<th width="4%"></th>
					<th width="12%">姓名</th>
					<th width="12%">电话</th>
					<th>地址</th>
					<th width="8%">状态</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
					<td><input type="checkbox" name=gid[] value="<?php echo ($v["id"]); ?>"></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><?php echo ($v["phone"]); ?></td>
					<td><?php echo ($v["addr"]); ?></td>
					<td>
						<?php if($v['status'] == 1): ?><span style="color:red">√ 已发货</span>
						<?php elseif($v['status'] == 0): ?>
						<span style="color:blue">× 未发货</span><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		<div style="text-align: center;"><?php echo ($page); ?></div>
		<div><input type="submit" value="发货"></div>
	</form>
</div>
</body>
</html>