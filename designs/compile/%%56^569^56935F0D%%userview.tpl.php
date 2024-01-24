<?php /* Smarty version 2.6.26, created on 2022-02-01 05:54:54
         compiled from userview.tpl */ ?>
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
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['panchayath']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['village']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['members']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
	<td><a href="">edit</a></td>
</tr>	
<?php endforeach; endif; unset($_from); ?>
</table>

</body>
</html>