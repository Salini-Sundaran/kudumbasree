<?php /* Smarty version 2.6.26, created on 2022-03-05 17:47:59
         compiled from dworkreportv.tpl */ ?>
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
				<th>Daily Work Report</th>
				<th>Date</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			<tr>
				<td><img src="Upload/<?php echo $this->_tpl_vars['a']['wrkey']; ?>
/<?php echo $this->_tpl_vars['a']['dailyworkreport']; ?>
" height="100px" width="150px"></td>
				<td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
				
				<td><a href="dworkreportd.php?key=<?php echo $this->_tpl_vars['a']['wrkey']; ?>
" class="btn btn-danger">Delete</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</center>
	</form>

</body>
</html>