<?php /* Smarty version 2.6.26, created on 2022-02-03 09:59:52
         compiled from useredit.tpl */ ?>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['d']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
		<table>
			<tr>
				<td>kudumbasree Name</td>
				<td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['a']['kudumbasree_name']; ?>
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
					<option>Kasargod</option>			
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['a']['city']; ?>
"></td>
			</tr>
			<tr>
				<td>Panchyath/Muncipality</td>
				<td><input type="text" name="panchayath" class="form-control" value="<?php echo $this->_tpl_vars['a']['panchayath']; ?>
"></td>
			</tr>
			<tr>
				<td>Village</td>
				<td><input type="text" name="village" class="form-control" value="<?php echo $this->_tpl_vars['a']['village']; ?>
"></td>
			</tr>
			<tr>
				<td>No of Members</td>
				<td><input type="text" name="members" class="form-control" value="<?php echo $this->_tpl_vars['a']['no_of_members']; ?>
"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contact" class="form-control" value="<?php echo $this->_tpl_vars['a']['contact_no']; ?>
"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['a']['email']; ?>
"></td>
			</tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>