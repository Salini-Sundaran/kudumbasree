<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$k=$_COOKIE['lkey'];
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
	if(isset($_POST['category'])AND($_POST['category'])!=null) 
	{
		if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
			{
				if(isset($_POST['amount'])AND($_POST['amount'])!=null)
				{
					if(isset($_POST['details'])AND($_POST['details'])!=null)
					{
						// if(isset($_POST['image'])AND($_POST['image'])!=null)
						{
							$category=trim($_POST['category']);
							$name=trim($_POST['name']);
							$quantity=trim($_POST['quantity']);
							$amount=trim($_POST['amount']);
							$details=trim($_POST['details']);
							//$image=trim($_POST['image']);
							$obj->product($category,$name,$quantity,$amount,$details,$_FILES['image'],$k);
						}
						// else
						// 	echo"<script>alert('image is empty')</script>";
					}
					else
						echo"<script>alert('product details is empty')</script>";
				}
				else
					echo"<script>alert('product amount is empty')</script>";
			}
			else
				echo"<script>alert('product quantity is empty')</script>";
		}
		else
			echo"<script>alert('product name is empty')</script>";
	}
	else
		echo"<script>alert('product category is empty')</script>";
}
$smartyObj->display('managersubheader.tpl');
$smartyObj->display("product.tpl");
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");
}	
?>