<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loan view</title>
</head>
<body>
	<form method="POST" action="">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Loan Amount</th>
					<th>Monthly Payment</th>
					<th>Intrest</th>
					<th>Loan Details</th>
				</tr>
				{foreach from=$data item="a"}
				<tr>
					<td>{$a.loanamount}</td>
					<td>{$a.monthlypayment}</td>
					<td>{$a.intrest}</td>
					<td>{$a.loandetails}</td>
					<td><a href="loaneapply.php?key={$a.loankey}" class="btn btn-primary">Apply<a></td>
				</tr>
				{/foreach}
			</table>
		</center>
	</form>

</body>
</html>