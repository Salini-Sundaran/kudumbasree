<?php /* Smarty version 2.6.26, created on 2022-02-14 06:21:47
         compiled from clerkedit.tpl */ ?>

<html>
<head>
	<title></title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['d']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
			<table class="table table-striped table-hover">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['a']['name']; ?>
"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea colspan="2" name="address" class="form-control"><?php echo $this->_tpl_vars['a']['address']; ?>
</textarea></td>
				</tr>
				<tr>
					<td>Pincode</td>
					<td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['a']['pincode']; ?>
"></td>
				</tr>
				<tr>
					<td>District</td>
				<td><select name="district" class="form-control">
					<option ><?php echo $this->_tpl_vars['a']['district']; ?>
</option>
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
					<td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['a']['city']; ?>
"></td>
				</tr>
				<tr><td>Gender</td>
					<td><select name="gender">
                <option ><?php echo $this->_tpl_vars['a']['gender']; ?>
</option>
                <option>Male</option>
                <option>Female</option></select></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="date" name="dob" class="form-control" value="<?php echo $this->_tpl_vars['a']['dob']; ?>
"></td>
				</tr>
				<tr>
				<td>Kudumbasree</td>
		
					<td><select name="kudumbasree" class="form-control">
						<option ><?php echo $this->_tpl_vars['a']['kudumbasree']; ?>
</option>
							<option value=>---Select---</option>
					<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
					<!-- <option value="<?php echo $this->_tpl_vars['c']['kudumbasree_name']; ?>
"></option> -->
						<option value="<?php echo $this->_tpl_vars['c']['kudumbasree_name']; ?>
"><?php echo $this->_tpl_vars['c']['kudumbasree_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						
					</select></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contact" class="form-control" value="<?php echo $this->_tpl_vars['a']['contact']; ?>
"></td>
				</tr>
				  <tr>
                	<td>Email</td>
                	<td><input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['a']['email']; ?>
"></td>
                </tr>
                <tr>
                	<td align="center" colspan="2"><input type="submit" name="register" value="update"class="btn btn-warning"></td>
                </tr>
				
			</table>
		</form>
		<?php endforeach; endif; unset($_from); ?>
</body>
</html>