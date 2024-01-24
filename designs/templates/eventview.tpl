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
					<th>Event Name</th>
					<th>Event Details</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
				{foreach from=$data item="a"}
			    <tr>
			    	<td>{$a.name}</td>
			    	<td>{$a.details}</td>
			    	<td>{$a.date}</td>
			    	<td>{$a.time}</td>
			    	<td><a href="eventedit.php?key={$a.evkey}" class="btn btn-success">Edit</a></td>
	                <td><a href="eventdelete.php?key={$a.evkey}" class="btn btn-danger">Remove</a></td>		
			    </tr>
			    {/foreach}
			</table>
		</center>
	</form>

</body>
</html>