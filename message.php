<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
//$rr=$_GET['recieverid'];
// $key2=$_GET['id'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if(isset($_POST['message'])AND($_POST['message'])!=null)
	{
		$message=trim($_POST['message']);
		$obj->message($key,$message);

	}
	else
		echo"<script>alert('message is empty')</script>";
}
$smartyObj->display('memberssubheader.tpl');
$smartyObj->display('message.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}
?>