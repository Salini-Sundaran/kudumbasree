<?php /* Smarty version 2.6.26, created on 2022-01-22 08:43:16
         compiled from register.tpl */ ?>
<html>
<head><title>registration</title></head>
<body><center><h2><u>Registration</u></h2>
<form method="POST" action="">
<input type="hidden" name="hidden" value="h">
<table>
	<tr>
		<td>name</td>
		<td><input type="text" name="name"></td>
	</tr>
    <tr>
    	<td>address</td>
    	<td><textarea name="address"></textarea></td>
    </tr>
    <tr>
    	<td>gender</td>
    	<td><input type="radio" name="gender"value="male">male
    		<input type="radio" name="gender"value="female">female</td>
    </tr>
    <tr>
    	<td>email</td>
    	<td><input type="email" name="email"></td>
    </tr>
    <tr>
    	<td>password</td>
    	<td><input type="password" name="password"></td>
    </tr>
    <tr>
    	<td align="center" colspan="2"> <input type="submit" value="register"></td>
    </tr>
 </table>
</form>
</center>
</body>
</html>