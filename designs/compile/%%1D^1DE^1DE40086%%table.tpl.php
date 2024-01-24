<?php /* Smarty version 2.6.26, created on 2022-01-22 10:58:45
         compiled from table.tpl */ ?>

<html>
<head>
	<title>table</title>
</head>
<body>
<table align="center" border="2">
	<tr>
		<th>name</th>
		<th>address</th>
		<th>gender</th>
		<th>email</th>
	</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
	<td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
	<td><a href="regedit.php?key=<?php echo $this->_tpl_vars['d']['rkey']; ?>
">edit</a></td>
	<td><a href="deletreg.php?key=<?php echo $this->_tpl_vars['d']['rkey']; ?>
">delete</a></td>
</tr>	
<?php endforeach; endif; unset($_from); ?>
</table>
<a href="logout.php">Logout</a>
</body>
</html>