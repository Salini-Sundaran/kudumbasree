<?php /* Smarty version 2.6.26, created on 2022-02-25 09:38:54
         compiled from payamount.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loan repay</title>
</head>
<body>
<body>
	
	<center>

		<table class="table table-striped table-hover">
			<tr>
				
				<th>Loan Amount</th>:
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				 <td><?php echo $this->_tpl_vars['a']['loan']; ?>
</td>
				<?php endforeach; endif; unset($_from); ?> 
				<th>Monthly Repay</th>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				 <td><?php echo $this->_tpl_vars['a']['mpay']; ?>
</td>
				 <?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
	<?php if ($this->_tpl_vars['a']['loan'] != null): ?>
	<?php if ($this->_tpl_vars['c']['mpay'] != null): ?>
				<td><a href="payamount.php?a=<?php echo $this->_tpl_vars['c']['mpay']; ?>
&&loanid=<?php echo $this->_tpl_vars['data1']; ?>
&&amount=<?php echo $this->_tpl_vars['a']['loan']; ?>
" class="btn btn-primary">Pay Amount</a></td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
			
		  
			</tr>





}
			
            
 
</table>

</center>
</body>
</body>
</html>