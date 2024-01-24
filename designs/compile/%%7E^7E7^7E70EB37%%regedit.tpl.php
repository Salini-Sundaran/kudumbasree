<?php /* Smarty version 2.6.26, created on 2022-01-22 08:05:39
         compiled from regedit.tpl */ ?>

<html>
<head>
    <title>regstration</title>
</head>
<body>
<center><h2><u>Registration</u></h2></center>
<?php $_from = $this->_tpl_vars['d']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
<form method="POST"action=""><input type="hidden" name="hidden"value="h">
    <table align="center">
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['a']['name']; ?>
"></td>
        </tr>
        <tr>
            <td>address</td>
            <td><textarea name="address"><?php echo $this->_tpl_vars['a']['address']; ?>
</textarea></td>
        </tr>
        <tr>
            <td>gender</td>
            <td><select name="gender">
                <option ><?php echo $this->_tpl_vars['a']['gender']; ?>
</option>
                <option>male</option>
                <option>female</option></select></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" value="<?php echo $this->_tpl_vars['a']['email']; ?>
"></td>
        </tr>
        <tr>
            <td align="center"colspan="2"><input type="submit" value="edit"></td>
        </tr>

    </table>
</form>
<?php endforeach; endif; unset($_from); ?>
</body>
</html>