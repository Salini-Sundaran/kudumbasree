<?php /* Smarty version 2.6.26, created on 2022-02-26 11:07:25
         compiled from feedbackview.tpl */ ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback</title>
</head>
<body>

	<form method="POST" action=""><input type="hidden" name="hide" value="h">
		<center>
		<table class="table table-striped">
			<tr><th>Name</th>
				<th>Contact No</th>
				<th>Kudumbasree Name</th>
				<th>Feedback</th>
				<th>Current Date</th>
			</tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['kudumbasree_name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['feedback']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
		</center>
	</form>

</body>
</html>