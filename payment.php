<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
//$key=$_GET['key'];
$pkey=$_GET['pkey'];
$a=$_GET['amount'];
$q=$_GET['quantity'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
  {
		if(isset($_POST['nameoncard'])AND($_POST['nameoncard'])!=null)

		{
			if(isset($_POST['cardno'])AND($_POST['cardno'])!=null)
			{
				if(isset($_POST['month'])AND($_POST['month'])!=null)
				{
					if(isset($_POST['year'])AND($_POST['year'])!=null) 
					{
						if(isset($_POST['cvv'])AND($_POST['cvv'])!=null)
						 {
							// $email=trim($_POST['email']);
							$name=trim($_POST['nameoncard']);
							$cardno=trim($_POST['cardno']);
							$month=trim($_POST['month']);
							$year=trim($_POST['year']);
							$cvv=trim($_POST['cvv']);
							$obj->payment($name,$cardno,$month,$year,$cvv,$lkey,$pkey,$a,$q);
						  }
						else
							echo"<script>alert('cvv is empty')</script>";
					}
					else
							echo"<script>alert('year is empty')</script>";
				}
				else
							echo"<script>alert('month is empty')</script>";
			}
			else
							echo"<script>alert('card number is empty')</script>";
		}
		else
							echo"<script>alert('name on card is empty')</script>";
}
$smartyObj->display("payment.tpl");
}
else
{
	header("location:login.php");
}	
?>