<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$v=$obj->select_user();
$smartyObj->assign("view",$v);
$s=$obj->useredit($key);
$smartyObj->assign("d",$s);
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['address'])AND($_POST['address'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
				if(isset($_POST['district'])AND($_POST['district'])!=null)
				{
					if (isset($_POST['city'])AND($_POST['city'])!=null) 
					{
				       if(isset($_POST['panchayath'])AND($_POST['panchayath'])!=null)
				       {
                        if(isset($_POST['village'])AND($_POST['village'])!=null)
                        {
                        	if(isset($_POST['members'])AND($_POST['members'])!=null)
                        	{
                        		if(isset($_POST['contact'])AND($_POST['contact'])!=null)
                        		{

                        			if(isset($_POST['email'])AND($_POST['email'])!=null)
                        				{
                        					$name=trim($_POST['name']);
                        					$address=trim($_POST['address']);
                        					$pincode=trim($_POST['pincode']);
                        					$district=trim($_POST['district']);
                        					$city=trim($_POST['city']);
                        					$panchayath=trim($_POST['panchayath']);
                        					$village=trim($_POST['village']);
                        					$members=trim($_POST['members']);
                        					$contacts=trim($_POST['contact']);
                        					$email=trim($_POST['email']);
                                            $obj->user_update($name,$address,$pincode,$district,$city,$panchayath,$village,$members,$contacts,$email,$key);
                        			}
                        			else
                                        	echo "<script>alert('email is empty')</script>";
                        		}
                        		else
                                        	echo "<script>alert('contact is empty')</script>";

                        	}
                        	else
                                        	echo "<script>alert('members is empty')</script>";
                        }
                        else
                                        	echo "<script>alert('village is empty')</script>";

				       }
				              else
                                        	echo "<script>alert('panchayath is empty')</script>";	
					}
					      else
                                        	echo "<script>alert('city is empty')</script>";
				}
				else
                                        	echo "<script>alert('district is empty')</script>";
			}
			else
                                        	echo "<script>alert('pincode is empty')</script>";
		}
		else
                                        	echo "<script>alert('address is empty')</script>";
	}
	else
                                            echo "<script>alert('name is empty')</script>";
}
$smartyObj->display('kudumbasreesubheader.tpl');
$smartyObj->display('useredit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
  header("location:login.php");
} 
?>