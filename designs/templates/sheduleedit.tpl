<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daily works</title>
</head>
<body>
	{foreach from=$view item="a"}
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table>
				<tr>
					<td>Work Shedule</td>
					<td><textarea name="shedule" class="form-control">{$a.shiftdetails}</textarea></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date" class="form-control" value="{$a.date}"></td></td>
				</tr>
				<tr>
					<td><input type="submit" value="Update" class="btn btn-warning"></td>
				</tr>
			</table>
		</center>
	</form>
{/foreach}
</body>
</html>