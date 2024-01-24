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
			    {foreach from=$data item="a"}
			    <tr>
			    <td>{$a.category}</td>
			    <td>{$a.name}</td>
			    <td>{$a.quantity}</td>
			    <td>{$a.amount}</td>
			    <td>{$a.details}</td>
			    <td>{$a.image}</td>
				</tr>
				{/foreach}
			</table>
		</center>
	</form>

</body>
</html>