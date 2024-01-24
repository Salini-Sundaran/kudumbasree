<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->editevent($key);
$smartyObj->assign("view",$v);
//echo$key;exit;
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['details'])AND($_POST['details'])!=null)
		 {
			if(isset($_POST['date'])AND($_POST['date'])!=null)
			{
				if(isset($_POST['time'])AND($_POST['time'])!=null)
				{
					$name=trim($_POST['name']);
					$details=trim($_POST['details']);
					$date=trim($_POST['date']);
					$time=trim($_POST['time']);
					$obj->eventedit($name,$details,$date,$time,$key);
				}
				else
					echo"<script>alert('time is empty')</script>";
			}
			else
					echo"<script>alert('date is empty')</script>";
		}
		else
					echo"<script>alert('details is empty')</script>";
	}
	else
					echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('clerksubheader.tpl');
$smartyObj->display('eventedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}
?>