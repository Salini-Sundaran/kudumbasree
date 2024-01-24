<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$v=$obj->select_member();
$smartyObj->assign("view",$v);
$s=$obj->memberedit($key);
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

                        if(isset($_POST['gender'])AND($_POST['gender'])!=null)
                        {
                            
                        	if(isset($_POST['age'])AND($_POST['age'])!=null)
                        	{


                        	if(isset($_POST['adhar'])AND($_POST['adhar'])!=null)
                        	{

                        	   if(isset($_POST['kudumbasree'])AND($_POST['kudumbasree'])!=null)
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
                        					$gender=trim($_POST['gender']);
                        					$age=trim($_POST['age']);
                        					$adhar=trim($_POST['adhar']);
                        					$kudumbasree=trim($_POST['kudumbasree']);
                        					$contacts=trim($_POST['contact']);
                        					$email=trim($_POST['email']);
                                            $obj->member_update($name,$address,$pincode,$district,$city,$panchayath,$gender,$age,$adhar,$kudumbasree,$contacts,$email,$key);
                        			}
                        			else
                                        	echo "<script>alert('email is empty')</script>";
                        		}
                        		else
                                        	echo "<script>alert('contact is empty')</script>";

                        	}
                        	else
                                        	echo "<script>alert('kudumbasree is empty')</script>";
                        }
                        else
                                        	echo "<script>alert('adhar is empty')</script>";

				       }
				       else
                                        	echo "<script>alert('age is empty')</script>";	
					}
					else
                                        	echo "<script>alert('gender is empty')</script>";	
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
$smartyObj->display('memberssubheader.tpl');
$smartyObj->display('memberedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	header("location:login.php");	
}
?>