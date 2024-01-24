<html>
<head>
	<title>meeting</title>
</head>
<body>
	{foreach from=$view item="a"}
	<center>
	<form method="POST" action="">
	<input type="hidden" name="hidden" value="h">
		<table class="table table-striped table-hover">
			<tr>
				<td>Date</td>
				<td><input type="date" name="date" value="{$a.date}"class="form-control"></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="time" name="time" value="{$a.time}"class="form-control"></td>
			</tr>
			<tr>
				<td>Meeting</td>
				<td><textarea name="meeting" class="form-control">{$a.meeting}</textarea></td></tr>
            <tr>
               <td align="center" colspan="5"><input type="submit" value="Update"class="btn btn-warning"></td>	
            </tr>
 
</table>
</form>
{/foreach}
</center>
</body>
</html>