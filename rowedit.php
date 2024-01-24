<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->editrow($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['meterial'])AND($_POST['meterial'])!=null) 
	{
		if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
			{
				if(isset($_POST['amount'])AND($_POST['amount'])!=null)
				{
					if(isset($_POST['date'])AND($_POST['date'])!=null)
					{
							$meterial=trim($_POST['meterial']);
							$quantity=trim($_POST['quantity']);
							$amount=trim($_POST['amount']);
							$date=trim($_POST['date']);
							$obj->rowedit($meterial,$quantity,$amount,$date,$key);
						}
					else
						echo"<script>alert('date is empty')</script>";
				}
				else
					echo"<script>alert('amount is empty')</script>";
			}
			else
				echo"<script>alert('quantity is empty')</script>";
		}
		else
			echo"<script>alert('meterial is empty')</script>";
	}
$smartyObj->display('clerksubheader.tpl');
$smartyObj->display("rowedit.tpl");
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>