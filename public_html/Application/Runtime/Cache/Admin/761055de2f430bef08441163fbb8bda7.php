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
<script type="text/javascript" src="/Application/Admin/Public/js/article.js"></script>

<link rel="stylesheet" href="/Application/Public/kindeditor/themes/default/default.css" />
<script src="/Application/Public/kindeditor/kindeditor-all.js"></script>
<script src="/Application/Public/kindeditor/lang/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor = K.editor({
			allowFileManager : true
		});

		K('#image1').click(function() {
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
					clickFn : function(urlList) {
						
						var urlnum = urlList.length;
						var parent = $(".img_h");
						for(var i=0;i<urlnum;i++){
							parent.append("<img id='"+i+"' style='width: 80px;height:80px;' src="+urlList[i].url+" alt=''>");
						}
						editor.hideDialog();

						var imgsrc="";
						for(var i=0;i<=$('.img_h img').length-1;i++){
							imgsrc+=$('.img_h img').eq(i).attr('src')+'*';
						}

						for(var i=0;i<=urlnum-1;i++){
							delete urlList[i]['error'];
						}
						// console.log(urlList);
						var str=JSON.stringify(urlList)
						$('#img_path').val(str);

					}
				});
			});
		});

		editor = K.create('textarea[name="content"]', {
			resizeType : 1,
			// allowPreviewEmoticons : true,
			allowImageUpload : true,
			allowFileManager : true,
			resizeType : 1,
			width:"99%",
			// height:"200px"
		});

		K('#insertfile').click(function() {
			editor.loadPlugin('insertfile', function() {
				editor.plugin.fileDialog({
					fileUrl : K('#url').val(),
					clickFn : function(url, title) {
						K('#url').val(url);
						editor.hideDialog();
					}
				});
			});
		});

	});
</script>
<style>
	table{
		table-layout: fixed;
	}
	.ke-dialog{
		top:-10px;
	}
</style>

<div id="map">
	<span class='title'>编辑文章</span>
</div>
<div id="content">
	<form id="categoryForm" action="<?php echo U('Admin/Article/edit');?>" method="post">
	<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th style="width:20%">名称</th>
				<th>值</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>所属文章</td>
				<td>
					<select name="cid">
						<option value="<?php echo ($data["cid"]); ?>"><?php echo ($data["cname"]); ?></option>
						<option value="0">顶级分类</option>
						<?php if(is_array($level)): foreach($level as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>"><?php echo ($v["html"]); ?>|-<?php echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>文章标题</td>
				<td>
					<input type="text" name="title" value="<?php echo ($data["title"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>文章副标题</td>
				<td>
					<input type="text" name="subtitle" value="<?php echo ($data["subtitle"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>简介</td>
				<td>
					<textarea name="intro" id="" cols="30" rows="10"><?php echo ($data["intro"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>作者</td>
				<td>
					<input type="text" name="author" value="<?php echo ($data["author"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>来源</td>
				<td>
					<input type="text" name="copyfrom" value="<?php echo ($data["copyfrom"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>录入者</td>
				<td>
					<input type="text" name="inputer" value="<?php echo ($data["inputer"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>转向链接</td>
				<td>
					<input type="text" name="http_url" value="<?php echo ($data["http_url"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>关键字</td>
				<td>
					<input type="text" name="keyword" value="<?php echo ($data["keyword"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>点击数</td>
				<td>
					<input type="text" name="hits" value="<?php echo ($data["hits"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>自定义属性</td>
				<td>
					<input type="text" name="owner_tag" value="<?php echo ($data["owner_tag"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>备注</td>
				<td>
					<textarea name="owner_remark" id="" cols="30" rows="10"><?php echo ($data["owner_remark"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>html地址</td>
				<td>
					<input type="text" name="html_path" value="<?php echo ($data["html_path"]); ?>"/>
				</td>
			</tr>
			
			<tr>
				<td>模板地址</td>
				<td>
					<input type="text" name="temp_path" value="<?php echo ($data["temp_path"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>文件上传</td>
				<td>
					<input type="text" id="url" value="" name="file_path" /> <input type="button" id="insertfile" value="选择文件"  />
				</td>
			</tr>
			
			<tr>
				<td>图片上传</td>
				<td>
					<input type="hidden" name="img_path" id="img_path" value="">
					<input type="button" id="image1" value="多图上传" multiple="multiple" />（网络图片 + 本地上传）
				</td>
			</tr>
			<tr>
				<td></td>
				
					<td class="img_h left"><img src="" alt=""></td>
				
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea name="content" id="" cols="30" rows="10" style="width:800px;height:400px;"><?php echo ($data["content"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
				<td><input type="submit" class='btn' /></td>
			</tr>
		</tbody>
	</table>
	</form>
	
	
	
</div>
</body>
</html>