<?php if (!defined('THINK_PATH')) exit();?>
<hr />
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="/admin/resource/add" method="post">
			所属类别:
			<select name="id">
				<option value="1">id1</option>
				<option value="2">id2</option>
			</select>
			<br />
			
			类型区分:
			<input type="radio" name="type" id="type" value="1" checked="checked"/>
				<label for="type">图文</label>
			<input type="radio" name="type" id="type" value="2"/>
				<label for="type">视频</label>
			<input type="radio" name="type" id="type" value="3"/>
				<label for="type">下载</label>
			<br />
			URL&nbsp;&nbsp; :
			<input type="text" name="url" id="url" value="www.baidu.com" />
			<br />
			资源标题:
			<input type="text" name="title" id="title" value="资源标题"  />
			<br />
			缩略图&nbsp;:
			<input type="file" name="img" id="img" value=""/>
			<br />
			简&nbsp;&nbsp;介:
			<br />
			<textarea name="present" rows="10" cols="60">资源简介</textarea>
			<br />
			是否显示:
			<input type="radio" name="ifshow" id="ifshow" value="1" checked="checked"/><label for="ifshow">显示</label>
			<input type="radio" name="ifshow" id="ifshow" value="0"/><label for="ifshow">不显示</label>
			<br /><br />
			<input type="submit" value="提交"/>
		</form>	
	</body>
</html>

<hr />