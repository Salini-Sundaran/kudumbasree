<?php /* Smarty version 2.6.26, created on 2022-03-19 09:52:12
         compiled from adminvkudumbasree.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
		    <td><?php echo $this->_tpl_vars['a']['kudumbasree_name']; ?>
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
			<td><?php echo $this->_tpl_vars['a']['village']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['no_of_members']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact_no']; ?>
</td>
			<?php if ($this->_tpl_vars['a']['status'] == 0): ?>
			<td><a href="apporve.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
 " class="btn btn-success">Approve</a></td>
	<td><a href="reject.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
" class="btn btn-danger">Reject</a></td>	
	<?php elseif ($this->_tpl_vars['a']['status'] == 1): ?>
<td><a  class="btn btn-success">Approved</a></td>
	<td><a href="reject.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
" class="btn btn-danger">Reject</a></td>
	<?php elseif ($this->_tpl_vars['a']['status'] == 2): ?>
	<td>Rejected</td>
	<td><a href="apporvem.php?key=<?php echo $this->_tpl_vars['a']['loginid']; ?>
 " class="btn btn-success">Approve</a></td>
	<?php endif; ?>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</body>
</html>