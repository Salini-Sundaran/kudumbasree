<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->editloan($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if(isset($_POST['loan'])AND($_POST['loan'])!=null)
	{
		if(isset($_POST['payment'])AND($_POST['payment'])!=null)
		{
			if(isset($_POST['details'])AND($_POST['details'])!=null)
			{
				if(isset($_POST['intrest'])AND($_POST['intrest'])!=null)
				{
					$loan=trim($_POST['loan']);
					$payment=trim($_POST['payment']);
					$intrest=trim($_POST['intrest']);
					$details=trim($_POST['details']);
					$obj->loanedit($key,$loan,$payment,$intrest,$details);
				}
				else
					echo"<script>alert('loan details is empty')</script>";
			}
			else
				echo"<script>alert('intrest is empty')</script>";
		}
		else
			echo"</script>alert('monthly payment is empty')</script>";
	}
	else
		echo"<script>alert('loan amount is empty')</script>";
}
$smartyObj->display('adminsubheader.tpl');
$smartyObj->display('loanedit.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	header("location:login.php");
}	
?>