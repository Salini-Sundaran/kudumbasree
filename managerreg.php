<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$s=$obj->select_data3();
$smartyObj->assign("view",$s);
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
					if(isset($_POST['city'])AND($_POST['city'])!=null)
					{
						if(isset($_POST['gender'])AND($_POST['gender'])!=null)
						{
							if(isset($_POST['dob'])AND($_POST['dob'])!=null)
							{
								if(isset($_POST['kudumbasree'])AND($_POST['kudumbasree'])!=null)
								{
									
                                       if(isset($_POST['adhar'])AND($_POST['adhar'])!=null)
                                       {


									if(isset($_POST['contact'])AND($_POST['contact'])!=null)
									{
								
										if(isset($_POST['email'])AND($_POST['email'])!=null)
										{
											if(isset($_POST['password'])AND($_POST['password'])!=null)
											{

												$name=trim($_POST['name']);
												$address=trim($_POST['address']);
												$pincode=trim($_POST['pincode']);
												$district=trim($_POST['district']);
												$city=trim($_POST['city']);
												$gender=trim($_POST['gender']);
												$dob=trim($_POST['dob']);
												$kudumbasree=trim($_POST['kudumbasree']);
												$adhar=trim($_POST['adhar']);
												$contact=trim($_POST['contact']);
												$email=trim($_POST['email']);
												$password=trim($_POST['password']);
                                                $obj->manager_reg($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$adhar,$contact,$email,$password);
 
											}
											else
											echo "<script>alert('password is empty')</script>";
										}
											else
											echo "<script>alert('email is empty')</script>";

									}
									else
											echo "<script>alert('contact is empty')</script>";
									}
									else
										echo "<script>alert('adhaar is empty')</script>";
								}
								else
											echo "<script>alert('kudumbasree is empty')</script>";
							}
							else
											echo "<script>alert('dob is empty')</script>";
						}
						else
											echo "<script>alert('gender is empty')</script>";
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
											echo "<script>alert('address is empty')</script>";
	}
	else
                                            echo "<script>alert('name Must be  alphabet')</script>";

	}

       else
											echo "<script>alert('name is empty')</script>";

}
$smartyObj->display('subheader.tpl');
$smartyObj->display("managerreg.tpl");
$smartyObj->display('footer.tpl');
?>