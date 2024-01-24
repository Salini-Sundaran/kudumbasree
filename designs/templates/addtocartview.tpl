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
			{foreach from=$data item="a"}
			<tr>
			<td>{$a.category}</td>
			<td>{$a.name}</td>
			<td>{$a.quantity}</td>
			<td>{$a.amount}</td>
			<td>{$a.details}</td>
			<td><img src="Upload/{$a.pkey}/{$a.image}" height="100px" width="200px" class="img-fluid" alt=""></td>
			<td><a href="deletecart.php?key={$a.akey}" class="btn btn-danger">Delete</a></td>
			<td><a href="paymentq.php?akey={$a.akey}&&amount={$a.amount}&&q={$a.quantity}&&pkey={$a.pkey}" class="btn btn-success">Buy Now</a></td>
		{/foreach}
	</tr><tr>
		<td><a href="purchaseall.php?amount={$amount}" class="btn btn-success">Purchase All</a></td>

	</tr>
		</table>
	</form>

</body>
</html>