<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>report view</title>
</head>
<body>
	<form method="POST">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Monthly Report</th>
					
				</tr>
				<tr>
					<select name="monthly">
						<option value="">---Select---</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
					    <option value="05">May</option>
					    <option value="06">June</option>
					    <option value="07">July</option>\
					    <option value="08">August</option>
					    <option value="09">September</option>
					    <option value="10">October</option>
					    <option value="11">November</option>
					    <option value="12">December</option>
					</select>
					<td><input type="submit" name="submit" value="Search" class="btn btn-success"></td>
				</tr>
				{foreach from=$data item="a"}
				<tr>
					<td> <img src="Upload/{$a.rkey}/{$a.monthlyreport}" height="200px" width="500px">{$a.monthlyreport}</td>
					<td>{$a.cdate}</td>
					<td>{$a.cmonth}</td>
				</tr>

				{/foreach}
			</table>
		</center>
	</form>

</body>
</html>