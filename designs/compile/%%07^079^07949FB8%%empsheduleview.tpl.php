<?php /* Smarty version 2.6.26, created on 2022-03-06 08:03:59
         compiled from empsheduleview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daily works</title>
</head>
<body>

	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped">
				<tr>
					<th>Work Shedule</th>
					<th>Date</th>
		</tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['shiftdetails']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['date']; ?>
</td>
			<td><a href="sheduleedit.php?key=<?php echo $this->_tpl_vars['a']['shedulekey']; ?>
" class="btn btn-warning">Edit</a></td>
			<td><a href="sheduledelete.php?key=<?php echo $this->_tpl_vars['a']['shedulekey']; ?>
" class="btn btn-danger">Delete</a></td>
		</tr>
<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>

</body>
</html>