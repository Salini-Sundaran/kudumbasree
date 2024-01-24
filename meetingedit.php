<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->editmeeting($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['date'])AND($_POST['date'])!=null)
	{
		if (isset($_POST['time'])AND($_POST['time'])!=null) 
		{
		if (isset($_POST['meeting'])AND($_POST['meeting'])!=null)
		{
			$date=trim($_POST['date']);
			$time=trim($_POST['time']);
			$meeting=trim($_POST['meeting']);
            $obj->meetingedit($date,$time,$meeting,$key);
		} 
           else
           	echo"<script>alert('metting details is empty')</script>";
		}
		else
		echo"<script>alert('time is empty')</script>";
	}
	 else
		echo"<script>alert('date is empty')</script>";
}
$smartyObj->display("subheader.tpl");
$smartyObj->display("meetingedit.tpl");
$smartyObj->display("footer.tpl");
}
else
{
	header("location:login.php");
}	
?>
