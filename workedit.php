<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->editwork($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if (isset($_POST['work'])AND($_POST['work'])!=null)
	 {
		if(isset($_POST['details'])AND($_POST['details'])!=null)
		{
			$work=trim($_POST['work']);
			$details=trim($_POST['details']);
			$obj->workedit($work,$details,$key);
		}
		else
			echo"<script>alert('work details is empty')</script>";
	}
	else
		echo"<script>alert('daily work is empty')</script>";
}
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('workedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>

