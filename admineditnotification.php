<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->admineditnotification($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{
		$notification=trim($_POST['notification']);
		$obj->notificationupdate($notification,$key);
	
}
}
$smartyObj->display('adminsubheader.tpl');
$smartyObj->display('admineditnotification.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	header("location:login.php");
}	
?>