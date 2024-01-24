<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback</title>
</head>
<body>
	<form method="POST" action=""><input type="hidden" name="hide" value="h">
		<center>
		<table class="table table-striped">
			<tr>
				<th>Feedback</th>
			</tr>
			{foreach from=$view item="a"}
		<tr>
			<td>{$a.feedback}</td>
			<td><a href="feedbackedit.php?key={$a.fkey}" class="btn btn-warning">Edit</a></td>
			<td><a href="feedbackdelete.php?key={$a.fkey}" class="btn btn-danger">Delete</a></td>
		</tr>
		{/foreach}
		</table>
		</center>
	</form>

</body>
</html>