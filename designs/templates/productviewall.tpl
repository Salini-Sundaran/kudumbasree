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
			{foreach from=$data item="a"}
			<!-- <tr> -->
			<tr><td><img src="Upload/{$a.pkey}/{$a.image}" height="100px" width="150px" class="img-fluid" alt=""></td></tr>
			<tr><td>Category:{$a.category}</td></tr>
			<tr><td>Name:{$a.name}</td></tr>
			<tr><td>Quantity:{$a.quantity}</td></tr>
			<tr><td>Amount:{$a.amount}</td></tr>
			<tr><td>{$a.details}</td></tr>
			<td><a href="addtocart.php?pkey={$a.pkey}&&amount={$a.amount}" class="btn btn-success">Add To Cart</a></td><br><br><br><br>
			<td><a href="addqu.php?pkey={$a.pkey}&&amount={$a.amount}" class="btn btn-success">Buy Now</a></td>
		</tr>
		{/foreach}
		</table>
	</form>
</center>
</body>
</html>