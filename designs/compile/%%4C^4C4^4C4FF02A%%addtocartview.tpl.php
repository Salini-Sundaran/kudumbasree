<?php /* Smarty version 2.6.26, created on 2022-02-27 06:10:46
         compiled from addtocartview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
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
			<td><img src="Upload/<?php echo $this->_tpl_vars['a']['pkey']; ?>
/<?php echo $this->_tpl_vars['a']['image']; ?>
" height="100px" width="200px" class="img-fluid" alt=""></td>
			<td><a href="deletecart.php?key=<?php echo $this->_tpl_vars['a']['akey']; ?>
" class="btn btn-danger">Delete</a></td>
			<td><a href="paymentq.php?akey=<?php echo $this->_tpl_vars['a']['akey']; ?>
&&amount=<?php echo $this->_tpl_vars['a']['amount']; ?>
&&q=<?php echo $this->_tpl_vars['a']['quantity']; ?>
&&pkey=<?php echo $this->_tpl_vars['a']['pkey']; ?>
" class="btn btn-success">Buy Now</a></td>
		<?php endforeach; endif; unset($_from); ?>
	</tr><tr>
		<td><a href="purchaseall.php?amount=<?php echo $this->_tpl_vars['amount']; ?>
" class="btn btn-success">Purchase All</a></td>

	</tr>
		</table>
	</form>

</body>
</html>