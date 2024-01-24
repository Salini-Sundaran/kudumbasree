<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback</title>
</head>
<body>
	{foreach from=$data item="a"}
	<form method="POST" action=""><input type="hidden" name="hide" value="h">
		<center>
		<table>
			<tr>
				<td>Feedback</td>
				<td><textarea name="feedback" class="form-control">{$a.feedback}</textarea></td>
				
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="btn btn-warning"></td>
			</tr>
		</table>
		</center>
	</form>
{/foreach}
</body>
</html>