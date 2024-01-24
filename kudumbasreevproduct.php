<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
// employ
$e=$obj->kudumbvproduct($key);
$smartyObj->assign("data",$e);
// man
$s=$obj->kudumbvproduct1($key);
$smartyObj->assign("data1",$s);
$smartyObj->display("kudumbasreesubheader.tpl");
$smartyObj->display("kudumbasreevproduct.tpl");
$smartyObj->display("footer.tpl");
}
else
	header("location:login.php");

?>