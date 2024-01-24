<?php /* Smarty version 2.6.26, created on 2022-02-27 06:00:09
         compiled from productview1.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="">
		<input type="hidden" name="hidden" value="h">
		<table>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
			<tr>
		    <tr><td><img src="Upload/<?php echo $this->_tpl_vars['a']['pkey']; ?>
/<?php echo $this->_tpl_vars['a']['image']; ?>
" height="100px" width="200px" class="img-fluid" alt=""></td></tr>
			<tr><td><?php echo $this->_tpl_vars['a']['name']; ?>
</td></tr>
			<tr><td><?php echo $this->_tpl_vars['a']['amount']; ?>
</td></tr>
			<td><a href="productviewall.php?pkey=<?php echo $this->_tpl_vars['a']['pkey']; ?>
" class="btn btn-tool">View More</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</center>
</body>
</html>