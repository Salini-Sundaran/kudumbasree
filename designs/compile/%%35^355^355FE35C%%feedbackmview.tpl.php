<?php /* Smarty version 2.6.26, created on 2022-02-26 08:19:58
         compiled from feedbackmview.tpl */ ?>
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
			<tr>
				<th>Feedback</th>
			</tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['feedback']; ?>
</td>
			<td><a href="feedbackedit.php?key=<?php echo $this->_tpl_vars['a']['fkey']; ?>
" class="btn btn-warning">Edit</a></td>
			<td><a href="feedbackdelete.php?key=<?php echo $this->_tpl_vars['a']['fkey']; ?>
" class="btn btn-danger">Delete</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
		</center>
	</form>

</body>
</html>