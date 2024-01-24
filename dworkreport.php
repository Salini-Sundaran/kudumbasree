<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$k=$_COOKIE['lkey'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
  $obj->dworkreport($k,$_FILES['report']);
 }  
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('dworkreport.tpl');
$smartyObj->display('footer.tpl');
}
else
{
  header("location:login.php");
} 
?>