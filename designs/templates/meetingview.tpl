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
			<th>Date</th>
			<th>Time</th>
			<th>Meeting details</th>
		</tr>
		{foreach from=$data item="a"}
		<tr>
			<td>{$a.date}</td>
			<td>{$a.time}</td>
			<td>{$a.meeting}</td>
			<td><a href="meetingedit.php?key={$a.mtkey} " class="btn btn-success">Edit</a></td>
	<td><a href="meetingdelet.php?key={$a.mtkey}" class="btn btn-danger">Delete</a></td>			
		</tr>
		{/foreach}
	</table>
</body>
</html>