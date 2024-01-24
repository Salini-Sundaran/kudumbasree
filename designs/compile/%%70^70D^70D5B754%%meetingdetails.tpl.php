<?php /* Smarty version 2.6.26, created on 2022-02-10 11:13:31
         compiled from meetingdetails.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meeting</title>
</head>
<body>
<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
	<table class="table table-striped table-hover">
		<tr>
			<td>Date</td>
			<td><input type="date" name="date"class="form-control"></td>
		</tr>
		<tr>
			<td>Time</td>
			<td><input type="time" name="time"class="form-control"></td>
		</tr>
		<tr>
			<td>Meeting details</td>
			<td><textarea name="meeting" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="submit" value="submit"class="btn btn-success"></td>
		</tr>
	</table>
</form>

</body>
</html>