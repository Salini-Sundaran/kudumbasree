<?php /* Smarty version 2.6.26, created on 2022-02-19 16:25:49
         compiled from eventedit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table>
				<tr>
					<td>Event Name</td>
					<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['a']['name']; ?>
"></td>
				</tr>
				<tr>
					<td>Event Details</td>
					<td><textarea name="details" class="form-control"><?php echo $this->_tpl_vars['a']['details']; ?>
</textarea></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date" class="form-control" value="<?php echo $this->_tpl_vars['a']['date']; ?>
"></td>
				</tr>
				<tr>
					<td>Time</td>
					<td><input type="time" name="time" class="form-control" value="<?php echo $this->_tpl_vars['a']['time']; ?>
"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Edit" class="btn btn-primary"></td>
				</tr>
			</table>
		</center>
	</form>
    <?php endforeach; endif; unset($_from); ?>
</body>
</html>