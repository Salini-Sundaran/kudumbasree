<?php /* Smarty version 2.6.26, created on 2022-02-18 07:38:41
         compiled from orders.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orders</title>
</head>
<body>
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Product Category</th>
					<th>Product Name</th>
					<th>Quantity</th>
				    <th>Amount</th>
				    <th>Product Details</th>
				    <th>Image</th>
				</tr>
			    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			    <tr>
			    <td><?php echo $this->_tpl_vars['a']['category']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['a']['quantity']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['a']['amount']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['a']['details']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['a']['image']; ?>
</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>

</body>
</html>