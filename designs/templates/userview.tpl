<html>
<head>
	<title>user view</title>
</head>
<body>
<table align="center" border="2">
	<tr>
		<th>kudumbasree Name</th>
		<th>Address</th>
		<th>Pincode</th>
		<th>District</th>
		<th>City</th>
		<th>Panchyath/Muncipality</th>
		<th>Village</th>
		<th>No of Members</th>
		<th>Contact No</th>
		<th>Email</th>
	</tr>
{foreach from=$data item="d"}
<tr>
	<td>{$d.name}</td>
	<td>{$d.address}</td>
	<td>{$d.pincode}</td>
	<td>{$d.district}</td>
	<td>{$d.city}</td>
	<td>{$d.panchayath}</td>
	<td>{$d.village}</td>
	<td>{$d.members}</td>
	<td>{$d.contact}</td>
	<td>{$d.email}</td>
	<td><a href="">edit</a></td>
</tr>	
{/foreach}
</table>

</body>
</html>