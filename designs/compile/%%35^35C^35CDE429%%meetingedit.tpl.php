<?php /* Smarty version 2.6.26, created on 2022-02-07 08:23:22
         compiled from meetingedit.tpl */ ?>
<html>
<head>
	<title>meeting</title>
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
				<td>Date</td>
				<td><input type="date" name="date" value="<?php echo $this->_tpl_vars['a']['date']; ?>
"class="form-control"></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="time" name="time" value="<?php echo $this->_tpl_vars['a']['time']; ?>
"class="form-control"></td>
			</tr>
			<tr>
				<td>Meeting</td>
				<td><textarea name="meeting" class="form-control"><?php echo $this->_tpl_vars['a']['meeting']; ?>
</textarea></td></tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>