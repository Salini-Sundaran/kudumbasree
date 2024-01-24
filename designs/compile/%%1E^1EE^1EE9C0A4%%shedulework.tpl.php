<?php /* Smarty version 2.6.26, created on 2022-03-06 07:25:06
         compiled from shedulework.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>shedule work</title>
</head>
<body>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Employes</th>
					
				</tr>
				<tr>
					<td><select name="employe" class="form-control">
							<option value=>---Select---</option>
						<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
						<option value="<?php echo $this->_tpl_vars['c']['loginid']; ?>
"><?php echo $this->_tpl_vars['c']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						
					</select></td>
					<td><a href="empshedule.php" class="btn btn-success">Search</a></td>
				</tr>
				<!-- <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['cmonth']; ?>
</td>
				</tr>

				<?php endforeach; endif; unset($_from); ?> -->
			</table>
		</center>
	</form>

</body>
</html>