<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$e=$obj->loanview($key);
$smartyObj->assign("data",$e);
$smartyObj->display('adminsubheader.tpl');
$smartyObj->display('loanview.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	header("location:login.php");
}	
?>

