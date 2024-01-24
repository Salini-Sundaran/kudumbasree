<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$e=$obj->loanviewkudumb($key);
$smartyObj->assign("data",$e);
// $s=$obj->loanpass($key);
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('loanviewkudumb.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>

