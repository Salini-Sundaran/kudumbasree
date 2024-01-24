<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$lokey=$_GET['key'];
$obj->loanpass($key,$lokey);
}
else
{
	header("location:login.php");
}	
?>