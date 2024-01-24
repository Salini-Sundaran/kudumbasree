<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
	<center>
		<table class="table table-striped table-hover">
			<tr>
				<th>Work</th>
				<th>Work Details</th>
			</tr>
			{foreach from=$data item="a"}
			<tr>
				<td>{$a.work}</td>
				<td>{$a.workdetails}</td>
				<td><a href="workedit.php?key={$a.wkey}" class="btn btn-warning">Edit</td>
				<td><a href="workdelete.php?key={$a.wkey}" class="btn btn-danger">Delete</td>
			</tr>
			{/foreach}
		</table>
	</center>
	</form>

</body>
</html>