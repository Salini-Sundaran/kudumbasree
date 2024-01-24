
<html>
<head>
	<title></title>
</head>
<body>
	{foreach from=$d item="a"}
<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
			<table class="table table-striped table-hover">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" class="form-control" value="{$a.name}"></td>
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
					<option>Kasargod</option></select>	
					</td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" class="form-control" value="{$a.city}"></td>
				</tr>
				<tr><td>Gender</td>
					<td><select name="gender">
                <option >{$a.gender}</option>
                <option>Male</option>
                <option>Female</option></select></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="date" name="dob" class="form-control" value="{$a.dob}"></td>
				</tr>
				<tr>
				<td>Kudumbasree</td>
		
					<td><select name="kudumbasree" class="form-control">
						<option >{$a.kudumbasree}</option>
							<option value=>---Select---</option>
					{foreach from=$view item="c"}
					<!-- <option value="{$c.kudumbasree_name}"></option> -->
						<option value="{$c.kudumbasree_name}">{$c.kudumbasree_name}</option>
						{/foreach}
						
					</select></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contact" class="form-control" value="{$a.contact}"></td>
				</tr>
				  <tr>
                	<td>Email</td>
                	<td><input type="email" name="email" class="form-control" value="{$a.email}"></td>
                </tr>
                <tr>
                	<td align="center" colspan="2"><input type="submit" name="register" value="update"class="btn btn-warning"></td>
                </tr>
				
			</table>
		</form>
		{/foreach}
</body>
</html>