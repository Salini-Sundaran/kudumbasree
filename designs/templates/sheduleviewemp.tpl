<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daily works</title>
</head>
<body>

	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped">
				<tr>
					<th>Work Shedule</th>
					<th>Date</th>
		</tr>
			{foreach from=$view item="a"}
		<tr>
			<td>{$a.shiftdetails}</td>
			<td>{$a.date}</td>
{/foreach}
			</table>
		</center>
	</form>

</body>
</html>