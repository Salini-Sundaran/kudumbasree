<?php /* Smarty version 2.6.26, created on 2022-03-05 07:34:36
         compiled from messagekview.tpl */ ?>
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
			<th>Member Name</th>
			<th>contact</th>
			<th>time</th>
			<th>Date</th>
			<th>Message</th>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contact']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['ctime']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['message']; ?>
</td>
			<td><a href="kreplay.php?<?php echo $this->_tpl_vars['a']['mskey']; ?>
&&senid=<?php echo $this->_tpl_vars['a']['senderid']; ?>
" class="btn btn-success">replay</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</body>
</html>