<?php /* Smarty version 2.6.26, created on 2022-02-26 07:56:36
         compiled from feedbackedit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback</title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<form method="POST" action=""><input type="hidden" name="hide" value="h">
		<center>
		<table>
			<tr>
				<td>Feedback</td>
				<td><textarea name="feedback" class="form-control"><?php echo $this->_tpl_vars['a']['feedback']; ?>
</textarea></td>
				
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="btn btn-warning"></td>
			</tr>
		</table>
		</center>
	</form>
<?php endforeach; endif; unset($_from); ?>
</body>
</html>