<?php /* Smarty version 2.6.26, created on 2022-03-05 07:48:28
         compiled from replayview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped">
				<tr>
			    <th>Replay</th>
			    <th>Time</th>
			   <th>Date</th>
				</tr>
				<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['a']['message']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['ctime']; ?>
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