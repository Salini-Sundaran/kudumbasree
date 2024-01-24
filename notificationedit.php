<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->edit_notification($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{
		$notification=trim($_POST['notification']);
		$obj->notification_edit($notification,$key);
	}
}
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('notificationedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>