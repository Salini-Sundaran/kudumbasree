<html>
<head>
	<title>meeting</title>
</head>
<body>
	{foreach from=$view item="a"}
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Meterial</td>
				<td><input type="text" name="meterial" value="{$a.meterial}"class="form-control"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" value="{$a.quantity}"class="form-control"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="text" name="amount" value="{$a.amount}"class="form-control"></td>
			</tr>
			<tr>
				<td>Purchase Date</td>
				<td><input type="date" name="date" value="{$a.date}"class="form-control"></td>
			</tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
{/foreach}
</center>
</body>
</html>