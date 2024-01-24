<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table class="table table-striped table-hover" >
		<tr>
			<th>Notification</th>
			<th>Date</th>
		</tr>
		{foreach from=$data item="a"}
		<tr>
			<td>{$a.notification}</td>
			<td>{$a.date}</td>
			<td><a href="admineditnotification.php?key={$a.adnkey} " class="btn btn-success">Edit</a></td>
	<td><a href="adminnotificationdel.php?key={$a.adnkey}" class="btn btn-danger">Delete</a></td>			
		</tr>
		{/foreach}
	</table>
</body>
</html>