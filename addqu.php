<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$n=$_GET['pkey'];
$amount=$_GET['amount'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
  {
    
  	if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
  	{
  		$quantity=trim($_POST['quantity']);

$obj->addtocart1($key,$n,$quantity,$amount);
}
  	else
  		echo "<script>alert('quantity empty')</script>";
    }
$smartyObj->display("memberssubheader.tpl");
$smartyObj->display("addtocart.tpl");
$smartyObj->display("footer.tpl");
}
else
{
  header("location:login.php")
}
?>