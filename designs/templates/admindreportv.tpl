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
			    <th>Kudumbasree name</th>
				<th>Contact no</th>
				<th>Email</th>
				<th>Daily Work Report</th>
				<th>Date</th>
			</tr>
			{foreach from=$view item="a"}
			<tr>
				<td>{$a.kudumbasree_name}</td>
				<td>{$a.contact_no}</td>
				<td>{$a.email}</td>
				<td><img src="upload/{$a.wrkey}/{$a.dailyworkreport}" height="100px" width="150px"></td>
				<td>{$a.cdate}</td>
				<!-- <td><a href="" class="btn btn-success">Download</a></td> -->
			</tr>
			{/foreach}
		</table>
	</center>
	</form>

</body>
</html>