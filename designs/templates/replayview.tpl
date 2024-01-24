<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped">
				<tr>
			    <th>Replay</th>
			    <th>Time</th>
			   <th>Date</th>
				</tr>
				{foreach from=$view item="a"}
				<tr>
					<td>{$a.message}</td>
					<td>{$a.ctime}</td>
					<td>{$a.cdate}</td>
				</tr>
				{/foreach}
			</table>
		</center>
	</form>

</body>
</html>