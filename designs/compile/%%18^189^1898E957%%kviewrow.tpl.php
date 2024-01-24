<?php /* Smarty version 2.6.26, created on 2022-03-06 10:14:09
         compiled from kviewrow.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="hidden" name="hide" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<th>Meterial Name</th>
				<th>Quantity</th>
				<th>Amount</th>
				<th>Purchase Date</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			<tr>
			<td><?php echo $this->_tpl_vars['a']['meterial']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['quantity']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['amount']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['date']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>

</body>
</html>