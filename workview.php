<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$e=$obj->workview($key);
$smartyObj->assign("data",$e);
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('workview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>