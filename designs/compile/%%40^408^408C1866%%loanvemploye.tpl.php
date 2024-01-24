<?php /* Smarty version 2.6.26, created on 2022-02-22 06:22:24
         compiled from loanvemploye.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loan view</title>
</head>
<body>
	<form method="POST" action="">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Loan Amount</th>
					<th>Monthly Payment</th>
					<th>Intrest</th>
					<th>Loan Details</th>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['a']['loanamount']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['monthlypayment']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['intrest']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['loandetails']; ?>
</td>
					<td><a href="loaneapply.php?key=<?php echo $this->_tpl_vars['a']['loankey']; ?>
" class="btn btn-primary">Apply<a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>

</body>
</html>