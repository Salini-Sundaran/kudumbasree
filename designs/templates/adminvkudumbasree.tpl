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
			<th>kudumbasree name</th>
			<th>Address</th>
			<th>Pincode</th>
			<th>district</th>
			<th>city</th>
			<th>panchayath</th>
			<th>village</th>
			<th>Members</th>
			<th>Contact</th>
		</tr>
		{foreach from=$data item="a"}
		<tr>
		    <td>{$a.kudumbasree_name}</td>
			<td>{$a.address}</td>
			<td>{$a.pincode}</td>
			<td>{$a.district}</td>
			<td>{$a.city}</td>
			<td>{$a.panchayath}</td>
			<td>{$a.village}</td>
			<td>{$a.no_of_members}</td>
			<td>{$a.contact_no }</td>
			{if $a.status==0}
			<td><a href="apporve.php?key={$a.loginid} " class="btn btn-success">Approve</a></td>
	<td><a href="reject.php?key={$a.loginid}" class="btn btn-danger">Reject</a></td>	
	{elseif $a.status==1}
<td><a  class="btn btn-success">Approved</a></td>
	<td><a href="reject.php?key={$a.loginid}" class="btn btn-danger">Reject</a></td>
	{elseif $a.status==2}
	<td>Rejected</td>
	<td><a href="apporvem.php?key={$a.loginid} " class="btn btn-success">Approve</a></td>
	{/if}
		</tr>
		{/foreach}
	</table>
</body>
</html>