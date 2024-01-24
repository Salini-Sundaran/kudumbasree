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
				<th>Daily Work Report</th>
				<th>Date</th>
			</tr>
			{foreach from=$data item="a"}
			<tr>
				<td><img src="Upload/{$a.wrkey}/{$a.dailyworkreport}" height="100px" width="150px"></td>
				<td>{$a.cdate}</td>
				
				<td><a href="dworkreportd.php?key={$a.wrkey}" class="btn btn-danger">Delete</td>
			</tr>
			{/foreach}
		</table>
	</center>
	</form>

</body>
</html>