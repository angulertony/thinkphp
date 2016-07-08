<?php if (!defined('THINK_PATH')) exit();?>
<hr />
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="category/add" method="post">
			<select name="parent">
				<option value="level1">level1</option>
				<option value="level2">level2</option>
			</select>
			<br />
			<input type="file" name="filt" id="filt" value="选择" />
			
			<input type="text" name="name" id="name" value="name" /><br />
			<input type="text" name="url" id="url" value="url" /><br />
			<input type="submit" value="新增"/>
		</form>
		
	</body>
</html>
<hr />