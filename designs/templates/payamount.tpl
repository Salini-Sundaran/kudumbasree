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
				{foreach from=$data item="a"}
				 <td>{$a.loan}</td>
				{/foreach} 
				<th>Monthly Repay</th>
				{foreach from=$data item="a"}
				 <td>{$a.mpay}</td>
				 {/foreach}
	{foreach from=$data item="a"}
	{foreach from=$data item="c"}
	{if $a.loan!=null}
	{if $c.mpay!=null}
				<td><a href="payamount.php?a={$c.mpay}&&loanid={$data1}&&amount={$a.loan}" class="btn btn-primary">Pay Amount</a></td>
{/if}
{/if}
{/foreach}
    {/foreach}
			
		  
			</tr>





}
			
            
 
</table>

</center>
</body>
</body>
</html>