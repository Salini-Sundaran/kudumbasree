<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$e=$obj->adminvkudumbasree($key);
$smartyObj->assign("data",$e);
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("adminvkudumbasree.tpl");
$smartyObj->display("adminfooter.tpl");
?>