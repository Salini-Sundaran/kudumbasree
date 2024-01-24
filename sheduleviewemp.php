<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$e=$obj->sheduleviewemp($key);
$smartyObj->assign("view",$e);
$smartyObj->display('employesubheader.tpl');
$smartyObj->display('sheduleviewemp.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	

?>