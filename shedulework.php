<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$d=$obj->selemp($key);
$smartyObj->assign("view",$d);
// $key=$_COOKIE['lkey'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
  if(isset($_POST['employe'])AND($_POST['employe'])!=null) 
{

	$a=trim($_POST['employe']);
  	
  }
  else
  			echo "<script>alert('employe empty')</script>";
  } 


$smartyObj->display("kudumbasreesubheader.tpl");
$smartyObj->display("shedulework.tpl");
$smartyObj->display("footer.tpl");
}
else
{
  header("location:login.php");
} 
?>
