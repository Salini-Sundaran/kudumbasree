<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	{foreach from=$view item="a"}
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table>
				<tr>
					<td>Event Name</td>
					<td><input type="text" name="name" class="form-control" value="{$a.name}"></td>
				</tr>
				<tr>
					<td>Event Details</td>
					<td><textarea name="details" class="form-control">{$a.details}</textarea></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date" class="form-control" value="{$a.date}"></td>
				</tr>
				<tr>
					<td>Time</td>
					<td><input type="time" name="time" class="form-control" value="{$a.time}"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Edit" class="btn btn-primary"></td>
				</tr>
			</table>
		</center>
	</form>
    {/foreach}
</body>
</html>