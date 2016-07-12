<?php if (!defined('THINK_PATH')) exit();?>
<hr />
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="/admin/category/add" method="post" enctype="multipart/form-data">
			上级分类:
			<select name="pid">
				<?php if(is_array($all)): foreach($all as $key=>$item): ?><option  value="<?php echo ($item['id']); ?>" ><?php echo ($item['name']); ?></option><?php endforeach; endif; ?>
			</select>
			<br />
			分类图标:			
			<input type="file" name="ico1" id="ico1" value="选择" /><br />
			分类名字:
			<input type="text" name="name" id="name" value="name" /><br />
			排&nbsp;&nbsp;序:
			<input type="text" name="sortOrder" id="sortOrder" value="" /><br />
			是否显示:
			<input type="radio" name="ifShow" id="ifShow" value="1" checked="checked"/>
			<label for="ifShow" >是</label>
			<input type="radio" name="ifShow" id="ifShow" value="0"/>
			<label for="ifShow" >否</label>
			<br />
			<input type="submit" value="提交"/>
		</form>
	</body>
</html>
<hr />