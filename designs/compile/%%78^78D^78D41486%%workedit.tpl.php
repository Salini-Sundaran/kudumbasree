<?php /* Smarty version 2.6.26, created on 2022-02-20 07:37:32
         compiled from workedit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daily works</title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table>
				<tr>
					<td>Work</td>
					<td><input type="text" name="work" class="form-control" value="<?php echo $this->_tpl_vars['a']['work']; ?>
"></td>
				</tr>
				<tr>
					<td>Work Details</td>
					<td><textarea name="details" class="form-control"><?php echo $this->_tpl_vars['a']['workdetails']; ?>
</textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="Update" class="btn btn-warning"></td>
				</tr>
			</table>
		</center>
	</form>
<?php endforeach; endif; unset($_from); ?>
</body>
</html>