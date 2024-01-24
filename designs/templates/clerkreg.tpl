
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
			<table class="table table-striped table-hover">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" class="form-control"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea colspan="2" name="address" class="form-control"></textarea></td>
				</tr>
				<tr>
					<td>Pincode</td>
					<td><input type="text" name="pincode" class="form-control"></td>
				</tr>
				<tr>
					<td>District</td>
				<td><select name="district" class="form-control">
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
					<td><input type="text" name="city" class="form-control"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="male" >Male</td>
					<td><input type="radio" name="gender" value="female">Female</td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="date" name="dob" class="form-control"></td>
				</tr>
				<tr>
				<td>Kudumbasree</td>
		
					<td><select name="kudumbasree" class="form-control">
							<option value=>---Select---</option>
					{foreach from=$view item="c"}
						<option value="{$c.loginid}">{$c.kudumbasree_name}</option>
						{/foreach}
						
					</select></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contact" class="form-control"></td>
				</tr>
				  <tr>
                	<td>Email</td>
                	<td><input type="email" name="email" class="form-control"></td>
                </tr>
                <tr>
                	<td>Password</td>
                	<td><input type="password" name="password" class="form-control"></td>
                </tr>
                <tr>
                	<td align="center" colspan="2"><input type="submit" name="register" value="Register" class="btn btn-success"></td>
                </tr>
				
			</table>
		</form>
</body>
</html>