<?php /* Smarty version 2.6.26, created on 2022-02-20 17:34:03
         compiled from loanedit.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loan</title>
</head>
<body>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<form method="POST" action=""><input type="hidden" name="hidden" value="h">
		<center>
			<table align="center">
				<tr>
					<td>Loan Amount</td>
					<td><input type="text" name="loan" class="form-control" value="<?php echo $this->_tpl_vars['a']['loanamount']; ?>
"></td>
				</tr>
				<tr>
					<td>Monthly Payment</td>
					<td><input type="text" name="payment" class="form-control" value="<?php echo $this->_tpl_vars['a']['monthlypayment']; ?>
"></td>
				</tr>
				<tr>
					<td>Intrest</td>
					<td><input type="text" name="intrest" class="form-control" value="<?php echo $this->_tpl_vars['a']['intrest']; ?>
"></td>
				</tr>
				<tr>
					<td>Loan Details</td>
					<td><textarea name="details" class="form-control"><?php echo $this->_tpl_vars['a']['loandetails']; ?>
</textarea></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Update" class="btn btn-warning"></td>
				</tr>
			</table>
		</center>
	</form>
<?php endforeach; endif; unset($_from); ?>
</body>
</html>