<?php /* Smarty version 2.6.26, created on 2022-02-07 08:49:13
         compiled from memberreg.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>members</title>
</head>
<body>
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
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
					<td>Panachayath</td>
					<td><input type="text" name="panchayath" class="form-control"></td>
				</tr>
				<tr><td>Gender</td>
					<td><input type="radio" name="gender" value="male">Male</td>
					<td><input type="radio" name="gender" value="female">Female</td>
				</tr>
				<tr>
				<td>Age</td>
			<td><input type="text" name="age" class="form-control"></td>
				</tr>
				<tr>
					<td>Adhaar</td>
			        <td><input type="text" name="adhar" class="form-control"></td>
				</tr>
				<tr>
					<td>Kudumbasree</td>
		
					<td><select name="kudumbasree" class="form-control">
							<option value=>---Select---</option>
						<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
						<option value="<?php echo $this->_tpl_vars['c']['loginid']; ?>
"><?php echo $this->_tpl_vars['c']['kudumbasree_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						
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