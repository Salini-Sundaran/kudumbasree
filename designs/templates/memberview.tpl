<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table class="table table-striped table-hover">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Pincode</th>
			<th>District</th>
			<th>City</th>
			<th>Panchayath</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Adhar</th>
			<th>Contact</th>
			<th>Email</th>
		</tr>
		{foreach from=$data item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.address}</td>
			<td>{$a.pincode}</td>
			<td>{$a.district}</td>
			<td>{$a.city}</td>
			<td>{$a.panchayath}</td>
			<td>{$a.gender}</td>
			<td>{$a.age}</td>
			<td>{$a.adhar}</td>
			<td>{$a.contact}</td>
			<td>{$a.email}</td>
		{if $a.status==0}
			<td><a href="approvem.php?key={$a.loginid} " class="btn btn-success">Approve</a></td>
	<td><a href="rejectm.php?key={$a.loginid}" class="btn btn-danger">Reject</a></td>	
	{elseif $a.status==1}
<td><a  class="btn btn-success">Approved</a></td>
	<td><a href="rejectm.php?key={$a.loginid}" class="btn btn-danger">Reject</a></td>
	{elseif $a.status==2}
	<td>Rejected</td>
	<td><a href="approvem.php?key={$a.loginid} " class="btn btn-success">Approve</a></td>
	{/if}
		</tr>
		{/foreach}
	</table>
</body>
</html>