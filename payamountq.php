<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$e=$obj->payamountview($key);
$smartyObj->assign("data",$e);
$e1=$obj->payamountview1($key);
$smartyObj->assign("data1",$e1);
$smartyObj->display('memberssubheader.tpl');
$smartyObj->display('payamount.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	

?>