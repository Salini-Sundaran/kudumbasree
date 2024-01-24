<?php /* Smarty version 2.6.26, created on 2022-03-19 09:42:25
         compiled from memberview.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['pincode']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['district']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['city']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['panchayath']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['gender']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['age']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['adhar']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['email']; ?>
</td>
		<?php if ($this->_tpl_vars['a']['status'] == 0): ?>
			<td><a href="approvem.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
 " class="btn btn-success">Approve</a></td>
	<td><a href="rejectm.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
" class="btn btn-danger">Reject</a></td>	
	<?php elseif ($this->_tpl_vars['a']['status'] == 1): ?>
<td><a  class="btn btn-success">Approved</a></td>
	<td><a href="rejectm.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
" class="btn btn-danger">Reject</a></td>
	<?php elseif ($this->_tpl_vars['a']['status'] == 2): ?>
	<td>Rejected</td>
	<td><a href="approvem.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
 " class="btn btn-success">Approve</a></td>
	<?php endif; ?>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</body>
</html>