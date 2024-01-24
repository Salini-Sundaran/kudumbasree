<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if (isset($_POST['shedule'])AND($_POST['shedule'])!=null)
	 {
		if(isset($_POST['date'])AND($_POST['date'])!=null)
		{
			$shedule=trim($_POST['shedule']);
			$date=trim($_POST['date']);
			$obj->empshedule($shedule,$date,$key);
		}
		else
			echo"<script>alert('date is empty')</script>";
	}
	else
		echo"<script>alert('shedule details is empty')</script>";
}
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('empshedule.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>