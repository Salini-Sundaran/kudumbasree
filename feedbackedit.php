<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->edit_feedback($key);
$smartyObj->assign("data",$v);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['feedback'])AND($_POST['feedback'])!=null)
	{
		$feedback=trim($_POST['feedback']);
		$obj->feedbackupdate($feedback,$key);

	}
	else
		echo"<script>alert('feedback is empty')</script>";
}
$smartyObj->display('memberssubheader.tpl');
$smartyObj->display('feedbackedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>