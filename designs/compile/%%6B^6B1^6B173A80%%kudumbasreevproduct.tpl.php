<?php /* Smarty version 2.6.26, created on 2022-02-27 08:04:42
         compiled from kudumbasreevproduct.tpl */ ?>
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
			<td> <img src="Upload/<?php echo $this->_tpl_vars['a']['pkey']; ?>
/<?php echo $this->_tpl_vars['a']['image']; ?>
" height="25px" width="50px"><?php echo $this->_tpl_vars['a']['image']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>

		<?php $_from = $this->_tpl_vars['data1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
			<tr>
			<td><?php echo $this->_tpl_vars['k']['category']; ?>
</td>
			<td><?php echo $this->_tpl_vars['k']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['k']['quantity']; ?>
</td>
			<td><?php echo $this->_tpl_vars['k']['amount']; ?>
</td>
			<td><?php echo $this->_tpl_vars['k']['details']; ?>
</td>
			<td> <img src="Upload/<?php echo $this->_tpl_vars['a']['pkey']; ?>
/<?php echo $this->_tpl_vars['k']['image']; ?>
" height="25px" width="50px"><?php echo $this->_tpl_vars['a']['image']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>

</body>
</html>