<?php /* Smarty version 2.6.26, created on 2022-02-20 16:41:29
         compiled from loan.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loan</title>
</head>
<body>
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table align="center">
				<tr>
					<td>Loan Amount</td>
					<td><input type="text" name="loan" class="form-control"></td>
				</tr>
				<tr>
					<td>Monthly Payment</td>
					<td><input type="text" name="payment" class="form-control"></td>
				</tr>
				<tr>
					<td>Intrest</td>
					<td><input type="text" name="intrest" class="form-control"></td>
				</tr>
				<tr>
					<td>Loan Details</td>
					<td><textarea name="details" class="form-control"></textarea></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Submit" class="btn btn-primary"></td>
				</tr>
			</table>
		</center>
	</form>

</body>
</html>