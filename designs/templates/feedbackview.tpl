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
			<tr><th>Name</th>
				<th>Contact No</th>
				<th>Kudumbasree Name</th>
				<th>Feedback</th>
				<th>Current Date</th>
			</tr>
			{foreach from=$view item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.contact}</td>
			<td>{$a.kudumbasree_name}</td>
			<td>{$a.feedback}</td>
			<td>{$a.cdate}</td>
		</tr>
		{/foreach}
		</table>
		</center>
	</form>

</body>
</html>