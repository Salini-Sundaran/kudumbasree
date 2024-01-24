<?php /* Smarty version 2.6.26, created on 2022-02-27 09:00:01
         compiled from productviewall.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<table>
			<tr>
				<!-- <th>Product Category</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Amount</th>
				<th>Product Details</th>
				<th>Image</th>
				</tr> -->
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			<!-- <tr> -->
			<tr><td><img src="Upload/<?php echo $this->_tpl_vars['a']['pkey']; ?>
/<?php echo $this->_tpl_vars['a']['image']; ?>
" height="100px" width="150px" class="img-fluid" alt=""></td></tr>
			<tr><td>Category:<?php echo $this->_tpl_vars['a']['category']; ?>
</td></tr>
			<tr><td>Name:<?php echo $this->_tpl_vars['a']['name']; ?>
</td></tr>
			<tr><td>Quantity:<?php echo $this->_tpl_vars['a']['quantity']; ?>
</td></tr>
			<tr><td>Amount:<?php echo $this->_tpl_vars['a']['amount']; ?>
</td></tr>
			<tr><td><?php echo $this->_tpl_vars['a']['details']; ?>
</td></tr>
			<td><a href="addtocart.php?pkey=<?php echo $this->_tpl_vars['a']['pkey']; ?>
&&amount=<?php echo $this->_tpl_vars['a']['amount']; ?>
" class="btn btn-success">Add To Cart</a></td><br><br><br><br>
			<td><a href="addqu.php?pkey=<?php echo $this->_tpl_vars['a']['pkey']; ?>
&&amount=<?php echo $this->_tpl_vars['a']['amount']; ?>
" class="btn btn-success">Buy Now</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</center>
</body>
</html>