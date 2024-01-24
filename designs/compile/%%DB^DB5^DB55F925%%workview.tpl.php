<?php /* Smarty version 2.6.26, created on 2022-02-20 07:33:41
         compiled from workview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
	<center>
		<table class="table table-striped table-hover">
			<tr>
				<th>Work</th>
				<th>Work Details</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['a']['work']; ?>
</td>
				<td><?php echo $this->_tpl_vars['a']['workdetails']; ?>
</td>
				<td><a href="workedit.php?key=<?php echo $this->_tpl_vars['a']['wkey']; ?>
" class="btn btn-warning">Edit</td>
				<td><a href="workdelete.php?key=<?php echo $this->_tpl_vars['a']['wkey']; ?>
" class="btn btn-danger">Delete</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</center>
	</form>

</body>
</html>