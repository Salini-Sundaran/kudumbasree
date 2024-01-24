<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="hidden" name="hide" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<th>Meterial Name</th>
				<th>Quantity</th>
				<th>Amount</th>
				<th>Purchase Date</th>
			</tr>
			{foreach from=$data item="a"}
			<tr>
			<td>{$a.meterial}</td>
			<td>{$a.quantity}</td>
			<td>{$a.amount}</td>
			<td>{$a.date}</td>
		</tr>
		{/foreach}
		</table>
	</form>

</body>
</html>