<?php /* Smarty version 2.6.26, created on 2022-02-19 16:52:57
         compiled from eventview.tpl */ ?>
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
					<th>Event Name</th>
					<th>Event Details</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			    <tr>
			    	<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			    	<td><?php echo $this->_tpl_vars['a']['details']; ?>
</td>
			    	<td><?php echo $this->_tpl_vars['a']['date']; ?>
</td>
			    	<td><?php echo $this->_tpl_vars['a']['time']; ?>
</td>
			    	<td><a href="eventedit.php?key=<?php echo $this->_tpl_vars['a']['evkey']; ?>
" class="btn btn-success">Edit</a></td>
	                <td><a href="eventdelete.php?key=<?php echo $this->_tpl_vars['a']['evkey']; ?>
" class="btn btn-danger">Remove</a></td>		
			    </tr>
			    <?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>

</body>
</html>