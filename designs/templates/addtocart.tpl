<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add to cart</title>
</head>
<body>
	<form method="POST" action=""><input type="hidden" name="hide" value="h">
		<table class="table table-striped">
			<!-- <tr>
				<td>Amount</td>
				<td><input type="text" name="amount" class="form-control"></td>
			</tr> -->
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" class="form-control"></td>
				<td><input type="submit" value="submit" class="btn btn-success" ></td>
				<td><a href="payment.php?key={$a.akey}"></a></td>
			</tr>

		</table>
	</form>

</body>
</html>