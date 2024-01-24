<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>shedule work</title>
</head>
<body>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Employes</th>
					
				</tr>
				<tr>
					<td><select name="employe" class="form-control">
							<option value=>---Select---</option>
						{foreach from=$view item="c"}
						<option value="{$c.loginid}">{$c.name}</option>
						{/foreach}
						
					</select></td>
					<td><a href="empshedule.php" class="btn btn-success">Search</a></td>
				</tr>
				<!-- {foreach from=$data item="a"}
				<tr>
					<td>{$a.cdate}</td>
					<td>{$a.cmonth}</td>
				</tr>

				{/foreach} -->
			</table>
		</center>
	</form>

</body>
</html>