<?php /* Smarty version 2.6.26, created on 2022-02-10 07:51:57
         compiled from notificationedit.tpl */ ?>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Notification</td>
				<td><textarea name="notification" class="form-control"><?php echo $this->_tpl_vars['a']['notification']; ?>
</textarea></td>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>