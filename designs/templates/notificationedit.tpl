<html>
<head>
	<title>Registration</title>
</head>
<body>
	{foreach from=$view item="a"}
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Notification</td>
				<td><textarea name="notification" class="form-control">{$a.notification}</textarea></td>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
{/foreach}
</center>
</body>
</html>