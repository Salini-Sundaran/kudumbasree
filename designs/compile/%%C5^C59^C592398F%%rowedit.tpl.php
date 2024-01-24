<?php /* Smarty version 2.6.26, created on 2022-03-05 11:29:08
         compiled from rowedit.tpl */ ?>
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
	<input type="hidden" name="hide" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Meterial</td>
				<td><input type="text" name="meterial" value="<?php echo $this->_tpl_vars['a']['meterial']; ?>
"class="form-control"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" value="<?php echo $this->_tpl_vars['a']['quantity']; ?>
"class="form-control"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="text" name="amount" value="<?php echo $this->_tpl_vars['a']['amount']; ?>
"class="form-control"></td>
			</tr>
			<tr>
				<td>Purchase Date</td>
				<td><input type="date" name="date" value="<?php echo $this->_tpl_vars['a']['date']; ?>
"class="form-control"></td>
			</tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>