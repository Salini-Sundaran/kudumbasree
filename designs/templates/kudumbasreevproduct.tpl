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
			<td> <img src="Upload/{$a.pkey}/{$a.image}" height="25px" width="50px">{$a.image}</td>
		</tr>
		{/foreach}

		{foreach from=$data1 item="k"}
			<tr>
			<td>{$k.category}</td>
			<td>{$k.name}</td>
			<td>{$k.quantity}</td>
			<td>{$k.amount}</td>
			<td>{$k.details}</td>
			<td> <img src="Upload/{$a.pkey}/{$k.image}" height="25px" width="50px">{$a.image}</td>
		</tr>
		{/foreach}
		</table>
	</form>

</body>
</html>