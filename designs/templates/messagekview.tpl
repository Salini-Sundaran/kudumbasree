<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table class="table table-striped table-hover" >
		<tr>
			<th>Member Name</th>
			<th>contact</th>
			<th>time</th>
			<th>Date</th>
			<th>Message</th>
		</tr>
		{foreach from=$data item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.contact}</td>
			<td>{$a.ctime}</td>
		    <td>{$a.cdate}</td>
			<td>{$a.message}</td>
			<td><a href="kreplay.php?{$a.mskey}&&senid={$a.senderid}" class="btn btn-success">replay</a></td>
		</tr>
		{/foreach}
	</table>
</body>
</html>