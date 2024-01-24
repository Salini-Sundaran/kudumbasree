<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center><h2><b><i>Members</i></b></h2></center>
	<table class="table table-striped table-hover">

		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
		</tr>
			{foreach from=$view1 item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.address}</td>
			<td>{$a.contact}</td>
			<!-- <td><a href="" class="btn btn-primary">Transfer</a></td> -->
		</tr>
		     {/foreach}
	</table>
	<center><h2><b><i>Employers</i></b></h2></center>
	<table class="table table-striped table-hover">

		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
		</tr>
			{foreach from=$view2 item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.address}</td>
			<td>{$a.contact}</td>
	<!-- 		<td><a  class="btn btn-primary">Transfer</a></td> -->
		</tr>
		     {/foreach}
		     <tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="loandebit.php?id={$e}&&amount={$h}" class="btn btn-primary">All Transfer</a></td>
		</tr>

	</table>
</body>
</html>