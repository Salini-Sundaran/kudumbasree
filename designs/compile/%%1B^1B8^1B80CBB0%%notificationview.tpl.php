<?php /* Smarty version 2.6.26, created on 2022-02-04 11:23:25
         compiled from notificationview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table class="table table-striped table-hover" >
		<tr>
			<th>Notification</th>
			<th>Date</th>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['notification']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['date']; ?>
</td>
			<td><a href="notificationedit.php?key=<?php echo $this->_tpl_vars['a']['nkey']; ?>
 " class="btn btn-success">Edit</a></td>
	<td><a href="notificationdeletet.php?key=<?php echo $this->_tpl_vars['a']['nkey']; ?>
" class="btn btn-danger">Delete</a></td>			
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</body>
</html>