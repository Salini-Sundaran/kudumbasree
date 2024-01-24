<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$k=$_COOKIE['lkey'];
if (isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{		$notification=trim($_POST['notification']);
		$obj->notification($k,$notification);
	}
	else
	{
		echo"<script>alert('notification is empty')</script>";
	}
}
$smartyObj->display("kudumbasreesubheader.tpl");
$smartyObj->display("notification.tpl");
$smartyObj->display("footer.tpl");
}
else
{
	header("location:login.php");
}	

?>

