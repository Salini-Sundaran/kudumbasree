<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];

// $key=$_COOKIE['lkey'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
  if(isset($_POST['monthly'])AND($_POST['monthly'])!=null) 
{

	$a=trim($_POST['monthly']);
  	$e=$obj->reportview1($key,$a);
  	$smartyObj->assign("data",$e);
  }
  else
  			echo "<script>alert('month empty')</script>";
  } 


$smartyObj->display("managersubheader.tpl");
$smartyObj->display("reportview.tpl");
$smartyObj->display("footer.tpl");
}
else
{
  header("location:login.php");
} 
?>
