<?php /* Smarty version 2.6.26, created on 2022-02-26 11:33:51
         compiled from product.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST" enctype="multipart/form-data" action="">
		<input type="hidden" name="hidden" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Product Category</td>
				<td><input type="text" name="category" class="form-control"></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="name" class="form-control"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" class="form-control"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="text" name="amount" class="form-control"></td>
			</tr>
			<tr>
				<td>Product Details</td>
				<td><textarea class="form-control" name="details"></textarea></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image" class="form-control"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submit" value="submit" class="btn btn-warning"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>