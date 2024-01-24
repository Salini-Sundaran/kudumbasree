<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<table>
			{foreach from=$data item="a"}
			<tr>
		    <tr><td><img src="Upload/{$a.pkey}/{$a.image}" height="100px" width="200px" class="img-fluid" alt=""></td></tr>
			<tr><td>{$a.name}</td></tr>
			<tr><td>{$a.amount}</td></tr>
			<td><a href="productviewall.php?pkey={$a.pkey}" class="btn btn-tool">View More</a></td>
		</tr>
		{/foreach}
		</table>
	</form>
</center>
</body>
</html>