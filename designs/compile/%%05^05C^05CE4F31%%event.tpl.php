<?php /* Smarty version 2.6.26, created on 2022-02-20 06:03:18
         compiled from event.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table>
				<tr>
					<td>Event Name</td>
					<td><input type="text" name="name" class="form-control"></td>
				</tr>
				<tr>
					<td>Event Details</td>
					<td><textarea name="details" class="form-control"></textarea></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date" class="form-control"></td>
				</tr>
				<tr>
					<td>Time</td>
					<td><input type="time" name="time" class="form-control"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Upload" class="btn btn-primary"></td>
				</tr>
			</table>
		</center>
	</form>

</body>
</html>