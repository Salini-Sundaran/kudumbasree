<html>
<head>
	<title>Registration</title>
</head>
<body>
	{foreach from=$d item="a"}
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
		<table>
			<tr>
				<td>kudumbasree Name</td>
				<td><input type="text" name="name" class="form-control" value="{$a.kudumbasree_name}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea colspan="2" name="address" class="form-control">{$a.address}</textarea></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><input type="text" name="pincode" class="form-control" value="{$a.pincode}"></td>
			</tr>
			<tr>
				<td>District</td>
				<td><select name="district" class="form-control">
					<option >{$a.district}</option>
					<option value="">---Select---</option>
					<option>Thiruvanathapuram</option>
					<option >Kollam</option>
					<option>Pathanamthitta</option>
					<option>Alappuzha</option>
					<option>kottatyam</option>
					<option>Idukki</option>
					<option>Eranakulam</option>
					<option>Thrissur</option>
					<option>Palakkad</option>
					<option>Malappuram</option>
					<option>Kozhikkode</option>
					<option>Wayanade</option>
					<option>kannur</option>
					<option>Kasargod</option>			
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" class="form-control" value="{$a.city}"></td>
			</tr>
			<tr>
				<td>Panchyath/Muncipality</td>
				<td><input type="text" name="panchayath" class="form-control" value="{$a.panchayath}"></td>
			</tr>
			<tr>
				<td>Village</td>
				<td><input type="text" name="village" class="form-control" value="{$a.village}"></td>
			</tr>
			<tr>
				<td>No of Members</td>
				<td><input type="text" name="members" class="form-control" value="{$a.no_of_members}"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contact" class="form-control" value="{$a.contact_no}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="form-control" value="{$a.email}"></td>
			</tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
{/foreach}
</center>
</body>
</html>