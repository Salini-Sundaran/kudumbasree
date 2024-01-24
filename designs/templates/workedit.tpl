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
					<td>Work</td>
					<td><input type="text" name="work" class="form-control" value="{$a.work}"></td>
				</tr>
				<tr>
					<td>Work Details</td>
					<td><textarea name="details" class="form-control">{$a.workdetails}</textarea></td>
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