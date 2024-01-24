<?php /* Smarty version 2.6.26, created on 2022-02-27 08:05:31
         compiled from apmembersview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center><h2><b><i>Members</i></b></h2></center>
	<table class="table table-striped table-hover">

		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
		</tr>
			<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact']; ?>
</td>
			<!-- <td><a href="" class="btn btn-primary">Transfer</a></td> -->
		</tr>
		     <?php endforeach; endif; unset($_from); ?>
	</table>
	<center><h2><b><i>Employers</i></b></h2></center>
	<table class="table table-striped table-hover">

		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
		</tr>
			<?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact']; ?>
</td>
	<!-- 		<td><a  class="btn btn-primary">Transfer</a></td> -->
		</tr>
		     <?php endforeach; endif; unset($_from); ?>
		     <tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="loandebit.php?id=<?php echo $this->_tpl_vars['e']; ?>
&&amount=<?php echo $this->_tpl_vars['h']; ?>
" class="btn btn-primary">All Transfer</a></td>
		</tr>

	</table>
</body>
</html>