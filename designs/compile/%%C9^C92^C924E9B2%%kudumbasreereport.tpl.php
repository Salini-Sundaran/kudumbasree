<?php /* Smarty version 2.6.26, created on 2022-02-27 08:09:47
         compiled from kudumbasreereport.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>report view</title>
</head>
<body>
	<form method="POST">
		<input type="hidden" name="hidden" value="h">
		<center>
			<table class="table table-striped table-hover">
				<tr>
					<th>Monthly Report</th>
					
				</tr>
				<tr>
					<select name="monthly">
						<option value="">---Select---</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
					    <option value="05">May</option>
					    <option value="06">June</option>
					    <option value="07">July</option>\
					    <option value="08">August</option>
					    <option value="09">September</option>
					    <option value="10">October</option>
					    <option value="11">November</option>
					    <option value="12">December</option>
					</select>
					<td><input type="submit" name="submit" value="Search" class="btn btn-success"></td>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
				<tr>
					<td> <img src="Upload/<?php echo $this->_tpl_vars['a']['rkey']; ?>
/<?php echo $this->_tpl_vars['a']['monthlyreport']; ?>
" height="200px" width="500px"><?php echo $this->_tpl_vars['a']['monthlyreport']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
					<td><?php echo $this->_tpl_vars['a']['cmonth']; ?>
</td>
				</tr>

				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>

</body>
</html>