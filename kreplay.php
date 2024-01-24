<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
 $rid=$_GET['senid'];
// echo $rr;exit();
// $key2=$_GET['id'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if(isset($_POST['replay'])AND($_POST['replay'])!=null)
	{
		$message=trim($_POST['replay']);
		$obj->replay($key,$message,$rid);

	}
	else
		echo"<script>alert('message is empty')</script>";
}
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('kreplay.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>