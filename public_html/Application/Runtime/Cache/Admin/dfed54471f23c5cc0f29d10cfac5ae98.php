<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<jquery/>
<bootstrap/>
<script type="text/javascript" src="/Application/Admin/Public/js/common.js"> </script>
<link href="/Application/Admin/Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link href="/Application/Admin/Public/css/hdui.css" rel="stylesheet" media="screen">
<script src="/Application/Admin/Public/js/hdui.js"></script>
<script type="text/javascript" src="/Application/Admin/Public/js/category.js"></script>
<div id="map">
	<span class='title'>添加分类</span>
</div>
<div id="content">
	<form id="categoryForm" action="<?php echo U('Admin/Category/edit');?>/cid/<?php echo ($category["cid"]); ?>" method="post">
	<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="20%">名称</th>
				<th>值</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>所属分类</td>
				<td>
					<select name="pid">
						<option value="<?php echo ($parent['cid']); ?>"><?php echo ($parent['cname']); ?></option>
						<option value="0">顶级分类</option>
						<?php if(is_array($level)): foreach($level as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>">|<?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
					</select>
					
					
				</td>
			</tr>
			<tr>
				<td>分类名称</td>
				<td>
					<input type="text" name="cname" value="<?php echo ($category["cname"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>分类标题</td>
				<td>
					<textarea name="title"><?php echo ($category["title"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>分类关键字</td>
				<td>
					<textarea name="keywords"><?php echo ($category["keywords"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>分类描述</td>
				<td>
					<textarea name="description"><?php echo ($category["description"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>分类排序</td>
				<td>
					<input name="sort" type="text" value="<?php echo ($category["sort"]); ?>" />
				</td>
			</tr>
			<tr>
				<td>是否显示</td>
				<td>
					<?php if($category['display'] == 1): ?><lable>
						<input type="radio" name="display" checked=true value="1"/>	
						<span>显示</span>
						</lable>
						<lable>
						<input type="radio" name="display" value="0"/>	
						<span>隐藏</span>
						</lable>
					<?php else: ?>
						<lable>
						<input type="radio" name="display"  value="1"/>	
						<span>显示</span>
						</lable>
						<lable>
						<input type="radio" name="display" checked=true value="0"/>	
						<span>隐藏</span>
						</lable><?php endif; ?>
					
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