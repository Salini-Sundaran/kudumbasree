<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h') 
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(preg_match('/^[A-Z a-z]*$/',$_POST['name']))
		{
		if(isset($_POST['address'])AND($_POST['address'])!=null)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
			{
				if(preg_match('/^[0-9]*$/',$_POST['pincode']))
		{
			$no=strlen($_POST['pincode']);
			if($no==6)
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
                        			if(preg_match('/^[0-9]*$/',$_POST['contact']))
                        			{
                        				$nml=strlen($_POST['contact']);
                        				if($nml>=10 and $nml<=12)
                        				{

                        			if(isset($_POST['email'])AND($_POST['email'])!=null)
                        			{
                        				if(isset($_POST['Password'])AND($_POST['Password'])!=null)
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
                        					$password=trim($_POST['Password']);
                                            $obj->insert_reg($name,$address,$pincode,$district,$city,$panchayath,$village,$members,$contacts,$email,$password);

                                        }
                                        else
                                        	echo "<script>alert('password is empty')</script>";
                        			}
                        			else
                                        	echo "<script>alert('email is empty')</script>";
                                    }
                                    	else
                                            echo "<script>alert('contact Must be  12 digits numbers')</script>";
                                    }
                                    else
                                            echo "<script>alert('contact Must be   numeric')</script>";
			
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
                                            echo "<script>alert('pincode Must be  6 digits numbers')</script>";
			
			}

	else
                                            echo "<script>alert('pincode Must be  number')</script>";
               }
			else
                                        	echo "<script>alert('pincode is empty')</script>";
		}
		else
                                        	echo "<script>alert('address is 
                                        empty')</script>";

	}
	else
                                            echo "<script>alert('name Must be  alphabet')</script>";
}
	else
                                            echo "<script>alert('name is empty')</script>";
}
$smartyObj->display('subheader.tpl');
$smartyObj->display('userreg.tpl');
$smartyObj->display('footer.tpl');
?>