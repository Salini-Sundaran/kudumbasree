<?php /* Smarty version 2.6.26, created on 2022-02-08 09:44:02
         compiled from productedit.tpl */ ?>
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
	<center>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Product Category</td>
				<td><input type="text" name="category" class="form-control" 
					value="<?php echo $this->_tpl_vars['a']['category']; ?>
"></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['a']['name']; ?>
"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" class="form-control" value="<?php echo $this->_tpl_vars['a']['quantity']; ?>
"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['a']['amount']; ?>
"></td>
			</tr>
			<tr>
				<td>Product Details</td>
				<td><textarea class="form-control" name="details"><?php echo $this->_tpl_vars['a']['details']; ?>
</textarea></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image" class="form-control" value="<?php echo $this->_tpl_vars['a']['image']; ?>
"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submit" value="Update" class="btn btn-warning}"></td>
			</tr>
		</table>
	</form>
</center>
   <?php endforeach; endif; unset($_from); ?>
</body>
</html>