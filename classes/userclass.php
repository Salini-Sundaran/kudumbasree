<?php
class userclass
{
	function insert_reg($name,$address,$pincode,$district,$city,$panchayath,$village,$members,$contacts,$email,$password)
	{
	$enc=md5($password);
    $skey=uniquekey("login","lkey");
    $lry="insert into login(lkey,email,password,usertype) values('".$skey."','".$email."','".$enc."','1')";
    $ex=mysql_query($lry);
		$key=uniquekey("userreg","kkey");
    $id=keytoid("login","lkey",$skey);
		$qry="insert into userreg(kkey,kudumbasree_name,address,pincode,district,city,panchayath,village,no_of_members,contact_no,loginid) values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$panchayath."','".$village."','".$members."','".$contacts."','".$id."')";
		$exe=mysql_query($qry);
		if($exe&&$ex)
		{
			echo"<script>alert('registration successfull')</script>";
		}
		else
			echo"<script>alert('registration is unsuccessfull')</script>";
    }
    function memberreg($name,$address,$pincode,$district,$city,$panchayath,$gender,$age,$adhar,$kudumbasree,$contacts,$email,$password)
    {
    	$enc=md5($password);
    $skey=uniquekey("login","lkey");
    $lry="insert into login(lkey,email,password,usertype) values('".$skey."','".$email."','".$enc."','2')";
    $ex=mysql_query($lry);
//echo$lry ;exit;
		$key=uniquekey("memberreg","mkey");
    $id=keytoid("login","lkey",$skey);
		$qry="insert into memberreg(mkey,name,address,pincode,district,city,panchayath,gender,age,adhar,kudumbasree,contact,loginid) values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$panchayath."','".$gender."','".$age."','".$adhar."','".$kudumbasree."','".$contacts."','".$id."')";
		$exe=mysql_query($qry);
    //echo$qry ;exit;
		if($exe&&$ex)
		{
			echo"<script>alert('registration successfull')</script>";
		}
		else
			echo"<script>alert('registration is unsuccessfull')</script>";
    }
    function select_data()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function clerkregistration($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$contact,$email,$password)
  {
  $enc=md5($password);
    $skey=uniquekey("login","lkey");
    $lry="insert into login(lkey,email,password,usertype) values('".$skey."','".$email."','".$enc."','3')";
    $ex=mysql_query($lry);
    $key=uniquekey("clerkreg","ckey");
    $id=keytoid("login","lkey",$skey);
    $qry="insert into clerkreg(ckey,name,address,pincode,district,city,gender,dob,kudumbasree,contact,loginid) values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$gender."','".$dob."','".$kudumbasree."','".$contact."','".$id."')";
    $exe=mysql_query($qry);
    if($exe&&$ex)
    {
      echo"<script>alert('registration successfull')</script>";
    }
    else
      echo"<script>alert('registration is unsuccessfull')</script>";
    }
    function login($email,$password)
    {
      $enc=md5($password);
      $qry="select lkey,usertype from login where email='".$email."' and password='".$enc."'";

      $exe=mysql_query($qry);
      $key=null;
      $u=null;
      $c=0;
      while($rr=mysql_fetch_array($exe)) 
      {
        $key=$rr['lkey'];
        $u=$rr['usertype'];
        $c=$c+1;
      }
      if($c>0)
      {
        setcookie("lkey",$key);
        setcookie("logined",1);
        if($u==0)
        	header("location:admin.php");
        	else if($u==1)
        	header("location:kudumbasreehome.php");
        	else if($u==2)
        		header("location:memberhome.php");
        	else if($u==3)
        		header("location:clerkhomepage.php");
        	else if($u==4)
        		header("location:employehome.php");
        	else 
        header("location:managerhome.php");
      }
      else
        echo "<script>alert('incorrect email and password')</script>";
    }
     function select_data1()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function employereg($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$adhar,$contact,$email,$password)
  {
  $enc=md5($password);
    $skey=uniquekey("login","lkey");
    $lry="insert into login(lkey,email,password,usertype) values('".$skey."','".$email."','".$enc."','4')";
    $ex=mysql_query($lry);
    $key=uniquekey("employerreg","ekey");
    $id=keytoid("login","lkey",$skey);
    $qry="insert into employerreg(ekey,name,address,pincode,district,city,gender,dob,kudumbasree,adhar,contact,loginid) values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$gender."','".$dob."','".$kudumbasree."','".$adhar."','".$contact."','".$id."')";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    if($exe&&$ex)
    {
      echo"<script>alert('registration successfull')</script>";
    }
    else
      echo"<script>alert('registration is unsuccessfull')</script>";
    }
     function select_data2()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function manager_reg($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$adhar,$contact,$email,$password)
  {
  $enc=md5($password);
    $skey=uniquekey("login","lkey");
    $lry="insert into login(lkey,email,password,usertype) values('".$skey."','".$email."','".$enc."','5')";
    $ex=mysql_query($lry);
    $key=uniquekey("managerreg","jkey");
    $id=keytoid("login","lkey",$skey);
    $qry="insert into managerreg(jkey,name,address,pincode,district,city,gender,dob,kudumbasree,adhar,contact,loginid) values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$gender."','".$dob."','".$kudumbasree."','".$adhar."','".$contact."','".$id."')";
    //echo $qry;exit;
    $exe=mysql_query($qry);
    if($exe && $ex)
    {
      echo"<script>alert('registration successfull')</script>";
    }
    else
      echo"<script>alert('registration is unsuccessfull')</script>";
    }
     function select_data3()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function fetch_data($key)
    {
      $id=keytoid("login","lkey",$key);
      $qry="select * from managerreg inner join login on login.id=managerreg.loginid where managerreg.loginid='".$id."'";
// echo $qry;exit();
      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function manager_update($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$adhar,$contact,$email,$key)
    {
       $id=keytoid("login","lkey",$key);
       $qry1="update managerreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',gender='".$gender."',dob='".$dob."',kudumbasree='".$kudumbasree."',adhar='".$adhar."',contact='".$contact."' where loginid='".$id."'";
       //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       $qry2="update login set email='".$email."' where id='".$id."'";
       //echo $qry2;exit();
       $exe2=mysql_query($qry2);
       if($exe1 && $exe2)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
    function select_data4()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function memberedit($key)
    {
      $id=keytoid("login","lkey",$key);
      $qry="select * from memberreg inner join login on login.id=memberreg.loginid where memberreg.loginid='".$id."'";

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function member_update($name,$address,$pincode,$district,$city,$panchayath,$gender,$age,$adhar,$kudumbasree,$contact,$email,$key)
    {
       $id=keytoid("login","lkey",$key);
       $qry1="update memberreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',panchayath='".$panchayath."',gender='".$gender."',age='".$age."',adhar='".$adhar."',kudumbasree='".$kudumbasree."',contact='".$contact."' where loginid='".$id."'";
       //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       $qry2="update login set email='".$email."' where id='".$id."'";
       //echo $qry2;exit();
       $exe2=mysql_query($qry2);
       if($exe1&&$exe2)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
  function select_member()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function select_clerk()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function clerkedit($key)
    {
      $id=keytoid("login","lkey",$key);
      $qry="select * from clerkreg inner join login on login.id=clerkreg.loginid where clerkreg.loginid='".$id."'";

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function clerk_update($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$contact,$email,$key)
    {
       $id=keytoid("login","lkey",$key);
       $qry1="update clerkreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',gender='".$gender."',dob='".$dob."',kudumbasree='".$kudumbasree."',contact='".$contact."' where loginid='".$id."'";
       //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       $qry2="update login set email='".$email."' where id='".$id."'";
       //echo $qry2;exit();
       $exe2=mysql_query($qry2);
       if($exe1&&$exe2)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
    function select_employe()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function employeedit($key)
    {
      $id=keytoid("login","lkey",$key);
      $qry="select * from employerreg inner join login on login.id=employerreg.loginid where employerreg.loginid='".$id."'";

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function employe_update($name,$address,$pincode,$district,$city,$gender,$dob,$kudumbasree,$adhar,$contact,$email,$key)
    {
       // $id=keytoid("employerreg","ekey",$key);
      $id=keytoid("login","lkey",$key);
       $qry1="update employerreg set name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',gender='".$gender."',dob='".$dob."',kudumbasree='".$kudumbasree."',adhar='".$adhar."',contact='".$contact."' where loginid='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       $qry2="update login set email='".$email."' where id='".$id."'";
       //echo $qry2;exit();
       $exe2=mysql_query($qry2);
       if($exe1&&$exe2)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
  function select_user()
    {
      //$id=keytoid("userreg","kkey",$key);
      $qry="select * from userreg";
     // echo $qry;
      //exit();
      $exe=mysql_query($qry);
      $arr=array();
      while ($rr=mysql_fetch_array($exe)) 
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function useredit($key)
    {
      $id=keytoid("login","lkey",$key);
      $qry="select * from userreg inner join login on login.id=userreg.loginid where userreg.loginid='".$id."'";
      // echo $qry;exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function user_update($name,$address,$pincode,$district,$city,$panchayath,$village,$members,$contacts,$email,$key)
    {
       $id=keytoid("login","lkey",$key);
       $qry1="update userreg set kudumbasree_name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',panchayath='".$panchayath."',village='".$village."',no_of_members='".$members."',contact_no='".$contacts."' where loginid='".$id."'";
       //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       $qry2="update login set email='".$email."' where id='".$id."'";
       //echo $qry2;exit();
       $exe2=mysql_query($qry2);
       if($exe1&&$exe2)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
  function member_view($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select * from memberreg inner join login on login.id=memberreg.loginid  where kudumbasree='".$id."'";
    //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
  function notification($k,$notification)
  {
    $k1=uniquekey("notification","nkey");
    $id=keytoid("login","lkey",$k);
    $date=date('Y-m-d');
     $qry="insert into notification(nkey,notification,date,loginid) values('".$k1."','".$notification."','".$date."','".$id."')";
     $exe=mysql_query($qry);
     if ($exe) 
     {
      echo"<script>alert('notification successfull')</script>";
     }
     else
     {
       echo"<script>alert('notification unsuccessfull')</script>";
     }
  }
   function notification_view($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from notification inner join login on login.id=notification.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function edit_notification($key)
    {
            $id=keytoid("notification","nkey",$key);
      $qry="select * from notification where id='".$id."'";
      // echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function notification_edit($notification,$key)
    {
       $id=keytoid("notification","nkey",$key);
       $qry1="update notification set notification='".$notification."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       
       //echo $qry2;exit();
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
   function delete_notification($key)
   {
    $id=keytoid("notification","nkey",$key);
    $qry="delete from notification where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='notificationview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful');window.location.href='notificationedit.php';</script>";
   }
   function membervnotification($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select * from notification inner join memberreg on memberreg.kudumbasree=notification.loginid  where memberreg.loginid='".$id."'";
    //echo $qry;exit;

  //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function meeting($date,$time,$meeting,$key)
{
  $key1=uniquekey("meeting","mtkey");
  $id=keytoid("login","lkey",$key);
 // echo $id;exit;
    $cdate=date('Y-m-d');
  $qry="insert into meeting(mtkey,date,time,meeting,loginid,currentdate) values('".$key1."','".$date."','".$time."','".$meeting."','".$id."','".$cdate."')";
  //echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    echo"<script>alert('meeting details submitted')</script>";
  }
  else
    echo"<script>alert('meeting detail not submitted')</script>";
}
 function meetingview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from meeting inner join login on login.id=meeting.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function editmeeting($key)
    {
            $id=keytoid("meeting","mtkey",$key);
      $qry="select * from meeting where id='".$id."'";
      // echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function meetingedit($date,$time,$meeting,$key)
    {
       $id=keytoid("meeting","mtkey",$key);
       $qry1="update meeting set date='".$date."',time='".$time."',meeting='".$meeting."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       
       //echo $qry2;exit();
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
}
function meetingdelet($key)
   {
    $id=keytoid("meeting","mtkey",$key);
    $qry="delete from meeting where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='meetingview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful');window.location.href='meetingedit.php';</script>";
   }
   function membervmeeting($key)
  {
    $id=keytoid("login","lkey",$key);
 // $qry="select * from meeting inner join login on login.id=meeting.loginid";
    $qry="select * from meeting inner join memberreg on memberreg.kudumbasree=meeting.loginid  where memberreg.loginid='".$id."'";
    // echo $qry;exit;

  //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function product($category,$name,$quantity,$amount,$details,$file=null,$key)
{
  $key1=uniquekey("product","pkey");
  $pa="upload/".$key1;
  $id=keytoid("login","lkey",$key);
 // echo $id;exit;
    $date=date('Y-m-d');
  $qry="insert into product(pkey,category,name,quantity,amount,details,image,date,loginid) values('".$key1."','".$category."','".$name."','".$quantity."','".$amount."','".$details."','".$file['name']."','".$date."','".$id."')";
  //echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    mkdir($pa);
    move_uploaded_file($file['tmp_name'],$pa."/".$file['name']);
    echo"<script>alert('product details submitted')</script>";
  }
  else
    echo"<script>alert('product details not submitted')</script>";
}
function product_view($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from product";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function kudumbvproduct($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select product.category,product.name,product.quantity,product.amount,product.details,product.image from product inner join employerreg
 on employerreg.loginid=product.loginid where employerreg
.kudumbasree='".$id."'";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function kudumbvproduct1($key)
  {
    $id=keytoid("login","lkey",$key);
   $qry1="select kudumbasree_name from userreg where loginid='".$id."'"; 
   $exe=mysql_query($qry1);
  $kudumbasree_name=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasree_name=$rr['kudumbasree_name'];
      }

  $qry="select product.category,product.name,product.quantity,product.amount,product.details,product.image from product inner join managerreg on managerreg.loginid=product.loginid where managerreg.kudumbasree='".$id."'";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function editproduct($key)
    {
            $id=keytoid("product","pkey",$key);
      $qry="select * from product where id='".$id."'";
      //echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function productedit($category,$name,$quantity,$amount,$details,$image,$key)
    {
       $id=keytoid("product","pkey",$key);
       $qry1="update product set category='".$category."',name='".$name."',quantity='".$quantity."',amount='".$amount."',details='".$details."',image='".$image."' where id='".$id."'";
        //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
}
function productdelet($key)
   {
    $id=keytoid("product","pkey",$key);
    $qry="delete from product where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='productview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful');window.location.href='productedit.php';</script>";
   }
  
function membervproduct($key)
  {
    $id=keytoid("login","lkey",$key);

   $qry1="select kudumbasree from memberreg where loginid='".$id."'"; 
   $exe=mysql_query($qry1);
  $kudumbasreeid=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasreeid=$rr['kudumbasree'];
      }
 $qry2="select kudumbasree_name from userreg where loginid='".$kudumbasreeid."'";
 $exe=mysql_query($qry2);
  $kudumbasree=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasree=$rr['kudumbasree_name'];
      }
  $qry="select product.category,product.name,product.quantity,product.amount,product.details,product.image from product inner join employerreg on employerreg.loginid=product.loginid where employerreg.kudumbasree='".$kudumbasreeid."'";
  //echo $qry;exit;
    
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function membervproduct12($key)
  {
    $id=keytoid("login","lkey",$key);

   $qry1="select kudumbasree from memberreg where loginid='".$id."'"; 
   // echo $qry1;exit;
   $exe=mysql_query($qry1);
  $kudumbasreeid=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasreeid=$rr['kudumbasree'];
      }
 $qry2="select kudumbasree_name from userreg where loginid='".$kudumbasreeid."'";
 // echo $qry2;exit;
 $exe=mysql_query($qry2);
  $kudumbasree=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasree=$rr['kudumbasree_name'];
      }
  $qry="select product.category,product.name,product.quantity,product.amount,product.details,product.image from product inner join managerreg on managerreg.loginid=product.loginid where managerreg.kudumbasree='".$kudumbasreeid."'";
   // echo $qry; exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function membervproduct1($key)
  {
    $id=keytoid("login","lkey",$key);
   $qry1="select kudumbasree from memberreg where loginid='".$id."'"; 
   $exe=mysql_query($qry1);
  $kudumbasree=null;
  while($rr=mysql_fetch_array($exe))
      {
        $kudumbasree=$rr['kudumbasree'];
      }

  $qry="select * from product inner join managerreg on managerreg.loginid=product.loginid where managerreg.kudumbasree='".$kudumbasree."'";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function product_view1($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from product";
  $exe=mysql_query($qry); 
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function product_viewall($key,$pkey)
  {
        $productid=keytoid("product","pkey",$pkey);
    $id=keytoid("login","lkey",$key);
  $qry="select * from product where id='".$productid."' ";
  $exe=mysql_query($qry); 
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function addtocart($key,$n,$quantity,$amount)
{
  $total=$amount*$quantity;
  $id=keytoid("login","lkey",$key);
  $id1=keytoid("product","pkey",$n);
  $key1=uniquekey("cart","akey");
  $date=date('Y-m-d');
  $qry="insert into cart (akey,productid,loginid,amount,quantity,cdate) values('".$key1."','".$id1."','".$id."','".$total."','".$quantity."','".$date."')";
  $exe=mysql_query($qry);
  if($exe)
  {
      echo"<script>alert('successfull');
      window.location.href='productviewall.php?pkey={$n}';</script>";
  }
  else
  {
    echo"<script>alert('unsuccessfull')</script>";
  }
}
function addtocart1($key,$n,$quantity,$amount)
{
  
      echo"<script>
      window.location.href='payment.php?pkey={$n}&&amount={$amount}&&lkey={$key}&&quantity={$quantity}';</script>";
 
}
function addtocartview($key)
  {
        $id=keytoid("login","lkey",$key);
     $qry="select * from product inner join cart on cart.productid=product.id where cart.loginid='".$id."' and cart.paymentstatus='0'";
 //echo $qry;exit();
  $exe=mysql_query($qry); 
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function addtocartview1($key)
  {
        $id=keytoid("login","lkey",$key);
     $qry="select sum(amount) from cart where loginid='".$id."' and paymentstatus='0'";
 // echo $qry;exit();
  $exe=mysql_query($qry); 
  $arr=array();
  $amount=null;
  while($rr=mysql_fetch_array($exe))
      {
        $amount=$rr['sum(amount)'];
      }
      return $amount;
    }
    function cartdelet($key)
   {
    $id=keytoid("cart","akey",$key);
    $qry="delete from cart where id='".$id."'";
    //echo $qry;exit;
    $exe=mysql_query($qry);
    if ($exe)
    {

      echo"<script>alert('deletion succssesful');window.location.href='addtocartview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function payment($name,$cardno,$month,$year,$cvv,$lkey,$pkey,$a,$q)
   {

    //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }
      // echo $bamount; exit();
    $pid=keytoid("product","pkey",$pkey);
    //total quantity
    $qry4="select quantity from product where id='".$pid."'";
    // echo $qry4;exit();
    $exe4=mysql_query($qry4);
    $tquantity=null;
    while($rr=mysql_fetch_array($exe4))
    {
    $tquantity=$rr['quantity'];
    }
    
    if($tquantity>=$q)
    {
      $total=$a*$q;
      if($bamount>=$total)
      {
        //addcart
       $akey=uniquekey("cart","akey");
       $date=date('Y-m-d');
       $id=keytoid("login","lkey",$lkey);
      // echo $id;exit;
       $qry1="insert into cart (akey,productid,loginid,amount,quantity,cdate) values('".$akey."','".$pid."','".$id."','".$total."','".$q."','".$date."')";
       $exe=mysql_query($qry1);
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$total."','".$id."','".$date."')";
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$total;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          $qt=$tquantity-$q;
          $exrr="update product set quantity='".$qt."'where id='".$pid."'";
          $ex2=mysql_query($exrr);
           $exrr="update cart set paymentstatus ='1'where akey='".$akey."'";
           $ex2=mysql_query($exrr);
         echo "<script>alert('successfull');window.location.href=('productviewall.php');</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull')</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      }  
    }
    else
    {
      echo"<script>alert('insufficient quantity')</script>";
    }
    
    }
    function cpayment($name,$cardno,$cvv,$month,$year,$lkey,$akey,$a,$q,$pkey)
   {

    //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }
      // echo $bamount; exit();
    $cid=keytoid("cart","akey",$akey);
    $id=keytoid("login","lkey",$lkey);
    // echo $id;exit(); 
    //total quantity
    $pid=keytoid("product","pkey",$akey);
    $qry4="select quantity from product where pkey='".$pkey."'";
     // echo $qry4;exit();
    $exe4=mysql_query($qry4);
    $tquantity=null;
    while($rr=mysql_fetch_array($exe4))
    {
    $tquantity=$rr['quantity'];
    }
    
    if($tquantity>=$q)
    {
      
      if($bamount>=$a)
      {
        //addcart
       $date=date('Y-m-d');
      // $exe=mysql_query($qry1);
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$a."','".$id."','".$date."')";
       // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$a;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          $qt=$tquantity-$q;
          $exrr="update product set quantity='".$qt."'where pkey='".$pkey."'";
          $ex2=mysql_query($exrr);
           $exrr="update cart set paymentstatus ='1'where akey='".$akey."'";
           $ex2=mysql_query($exrr);
         echo "<script>alert('successfull')</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull')</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      }  
    }
    else
    {
      echo"<script>alert('insufficient quantity')</script>";
    }
   
    }
     function loanpayment($name,$cardno,$cvv,$month,$year,$key,$lkey,$o)
   {
 $id=keytoid("login","lkey",$key);
    //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }
          $qry3="select count(loanapply.id) from loanapply inner join memberreg on memberreg.loginid=loanapply.mloiginid where memberreg.kudumbasree='".$id."'";
            // echo $qry3;exit;
    $exe3=mysql_query($qry3);
    $mc=null;
    $mid=array();
    while($rr=mysql_fetch_array($exe3))
    {
    $mc=$rr['count(loanapply.id)'];
     // $mid=$rr['loanapply.mloiginid'];
    }
    $qwww="select memberreg.contact from loanapply inner join memberreg on memberreg.loginid=loanapply.mloiginid where memberreg.kudumbasree='".$id."'";
          
    $ex2=mysql_query($qwww);
    
    $mpho=array();
    while($rr=mysql_fetch_array($ex2))
    {
    $mpho=$rr;
     // $mid=$rr['loanapply.mloiginid'];
    }
  $qwww1="select memberreg.contact from loanapply inner join memberreg on memberreg.loginid=loanapply.mloiginid where memberreg.kudumbasree='".$id."'";
          
    $ex21=mysql_query($qwww1);
    
    $epho=array();
    while($rr=mysql_fetch_array($ex21))
    {
    $epho=$rr;
     // $mid=$rr['loanapply.mloiginid'];
    }
  
 
 
   
     $qry4w="select count(loanapply.id),loanapply.mloiginid from loanapply inner join employerreg on employerreg.loginid=loanapply.mloiginid where employerreg.kudumbasree='".$id."'";
    $exe4w=mysql_query($qry4w);
      // echo $exe4w;exit;
    $ec=null;
    $eid=null;
    while($rr=mysql_fetch_array($exe4w))
    {
    $ec=$rr['count(loanapply.id)'];

    }
    $tc=$mc+$ec;
    
      if($bamount>=$o)
      {
        //addcart
       $date=date('Y-m-d');
      //pai
       $thg=$o/$tc;
      // echo $thg;exit();
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$o."','".$id."','".$date."')";
       // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$o;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          $ex3ww="update loanapply set amount='".$thg."'where kid='".$id."'";
          $ex13ww=mysql_query($ex3ww);


          $ex="update bank set tamount='".$b."'where contact='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);

         for ($i=0; $i < $mc; $i++) 
{ 
  
          $ex3ww="update bank set tamount=tamount+'".$thg."' where contact='".$mpho[$i]."'";
          $ex13ww=mysql_query($ex3ww); 
}
        for ($i=0; $i < $ec; $i++) 
{ 
  
          $ex3ww="update bank set tamount=tamount+'".$thg."' where contact='".$epho[$i]."'";
          $ex13ww=mysql_query($ex3ww); 
}
          

           



          //  $ex3ww2="update loanapply set amount='".$thg."'where mloiginid='".$mid."'";
          // $ex13ww2=mysql_query($ex3ww2);
         echo "<script>alert('successfull');window.location.href='apmembersview.php?key={$lkey}&&amo={$o}';</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull');</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      }  
    
    
    }

     function allpayment($name,$cardno,$cvv,$month,$year,$lkey,$amount)
   {

    //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }
      // echo $bamount; exit();
    $cid=keytoid("cart","akey",$akey);
    $id=keytoid("login","lkey",$lkey);
    // echo $id;exit(); 
    //total quantity
    $pid=keytoid("product","pkey",$akey);
    
      
      if($bamount>=$amount)
      {
        //addcart
       $date=date('Y-m-d');
      // $exe=mysql_query($qry1);
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$amount."','".$id."','".$date."')";
       // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$amount;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          // $qt=$tquantity-$q;
          // $exrr="update product set quantity='".$qt."'where pkey='".$pkey."'";
          // $ex2=mysql_query($exrr);
           $exrr="update cart set paymentstatus ='1' where loginid='".$id."'";
           $ex2=mysql_query($exrr);
         echo "<script>alert('successfull')</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull')</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      }  
    }
    function orders($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select cart.quantity,cart.amount,product.category,product.name,product.details,product.image from cart inner join product on cart.productid=product.id  where product.loginid='".$id."'  and paymentstatus='1'";// and product.loginid='".$id."'";//inner join userreg on userreg.loginid=product.loginid where product.loginid='".$id."'";
    //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function report($k,$file=null)
{
  $key=uniquekey("report","rkey");
  $pa="upload/".$key;
    $id=keytoid("login","lkey",$k);
  //$id=keytoid("report","rkey",$key);
  $date=date('Y-m-d');
  $month=date('m');
  $qry="insert into report(rkey,monthlyreport,cdate,cmonth,loginid) values('".$key."','".$file['name']."','".$date."','".$month."','".$id."')";
  $exe=mysql_query($qry);
  if($exe)
  {
    mkdir($pa);
    move_uploaded_file($file['tmp_name'],$pa."/".$file['name']);
    echo"<script>alert('upload successfull')</script>";
  }
  else
    echo"<script>alert('upload unsuccessfull')</script>";
}
 function reportview($key)
 {
    $id=keytoid("login","lkey",$key);
    // $month=date('m');
    $qry="select report.monthlyreport,report.cdate,report.cmonth from report inner join login on login.id=report.loginid";
     // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function reportview1($key,$a)
  {
    $id=keytoid("login","lkey",$key);
    // $month=date('m');
    $qry="select * from report where cmonth='".$a."'";
     // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function reportmview($key,$a)
  {
    $id=keytoid("login","lkey",$key);
    // $month=date('m');
    $qry="select * from report inner join managerreg on report.loginid=managerreg.loginid where managerreg.kudumbasree='".$id."' and cmonth='".$a."'";
     // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function reportdelet($key)
   {
    $id=keytoid("report","rkey",$key);
    $qry="delete from report where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='reportview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function event($key,$name,$details,$date,$time)
   {
   // echo$key;exit;
    $key1=uniquekey("event","evkey");
    $id=keytoid("login","lkey",$key);
    // $id1=keytoid("event","evkey",$key);
   // echo$id;exit;
    $cdate=date('Y-m-d');
    $qry="insert into event(evkey,name,details,date,time,cdate,loginid) values('".$key1."','".$name."','".$details."','".$date."','".$time."','".$cdate."','".$id."')";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    if($exe)
    {
      echo"<script>alert('successfull')</script>";
    }
    else
      echo"<script>alert('unsuccessfull')</script>";
   }
   function eventview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from event inner join login on login.id=event.loginid";
  // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function editevent($key)
    {
            $id=keytoid("event","evkey",$key);
      $qry="select * from event where id='".$id."'";
     //echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function eventedit($name,$details,$date,$time,$key)
    {
       $id=keytoid("event","evkey",$key);
       $qry1="update event set name='".$name."',details='".$details."',date='".$date."',time='".$time."' where id='".$id."'";
       //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       
       //echo $qry2;exit();
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
       }
    }
    function eventdelet($key)
   {
    $id=keytoid("event","evkey",$key);
    $qry="delete from event where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='eventview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function membervevent($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select event.name,event.details,event.date,event.time from event inner join clerkreg on clerkreg.loginid=event.loginid inner join memberreg on memberreg.kudumbasree=clerkreg.kudumbasree where memberreg.loginid='".$id."'";
     //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
 function kudumbvevent($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select event.name,event.details,event.date,event.time from event inner join clerkreg on clerkreg.loginid=event.loginid where clerkreg.kudumbasree='".$id."'";
    // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function managervevent($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select event.name,event.details,event.date,event.time from event inner join clerkreg on clerkreg.loginid=event.loginid inner join managerreg on managerreg.kudumbasree=clerkreg.kudumbasree where managerreg.loginid='".$id."'";
     //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function employevevent($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select event.name,event.details,event.date,event.time from event inner join clerkreg on clerkreg.loginid=event.loginid inner join employerreg on employerreg.kudumbasree=clerkreg.kudumbasree where employerreg.loginid='".$id."'";
     //echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function work($work,$details,$key)
{
  $key1=uniquekey("work","wkey");
  $id=keytoid("login","lkey",$key);
  $cdate=date('Y-m-d');
  $qry="insert into work(wkey,work,workdetails,cdate,loginid) values('".$key1."','".$work."','".$details."','".$cdate."','".$id."')";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  if($exe)
  {
    echo"<script>alert('successfull')</script>";
  }
  else
    echo"<script>alert('unsuccessfull')</script>";
}
function workview($key)
{
  $id=keytoid("login","lkey",$key);
  $qry="select * from work where loginid='".$id."'";
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function editwork($key)
    {
            $id=keytoid("work","wkey",$key);
      $qry="select * from work where id='".$id."'";
     // echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function workedit($work,$details,$key)
    {
       $id=keytoid("work","wkey",$key);
       $qry1="update work set work='".$work."',workdetails='".$details."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
       }
    }
    function workdelet($key)
   {
    $id=keytoid("work","wkey",$key);
    $qry="delete from work where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='workview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function workvmanager($key)
{
  $id=keytoid("login","lkey",$key);
  $qry="select work.work,work.workdetails,work.cdate from work inner join managerreg on managerreg.kudumbasree=work.loginid";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function loan($loan,$payment,$intrest,$details)
{
  $key1=uniquekey("loan","loankey");
  // $id=keytoid("login","lkey",$key);
  $cdate=date('Y-m-d');
  $qry="insert into loan(loankey,loanamount,monthlypayment,intrest,loandetails,cdate) values('".$key1."','".$loan."','".$payment."','".$intrest."','".$details."','".$cdate."')";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  // echo $exe;exit();
  if($exe)
  {
    echo"<script>alert('successfull')</script>";
  }
  else
    echo"<script>alert('unsuccessfull')</script>";
}
function loanview($key)
  {
    // $id=keytoid("login","lkey",$key);
  $qry="select * from loan";
   // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function editloan($key)
    {
            $id=keytoid("loan","loankey",$key);
      $qry="select * from loan where id='".$id."'";
     // echo $qry; exit();
      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function loanedit($key,$loan,$payment,$intrest,$details)
    {
       $id=keytoid("loan","loankey",$key);
       $qry1="update loan set loanamount='".$loan."',monthlypayment='".$payment."',intrest='".$intrest."',loandetails='".$details."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {
        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
       }
    }
    function loandelet($key)
   {
    // $id=keytoid("loan","loankey",$key);
    $qry="delete from loan";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='loanview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function loanviewkudumb($key)
  {
    // $id=keytoid("login","lkey",$key);
  $qry="select * from loan";
  // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function loanviewemploye($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from loan";
  // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
    function loanpass($key,$lokey)
    {
      $key1=uniquekey("loanpass","lokey");
      $id1=keytoid("login","lkey",$key);
      $id=keytoid("loan","loankey",$lokey);
      // echo $id;exit;
      // $key3="select loginid from userreg where loginid='".$id1."'";
      // echo $key3;exit;
      $cdate=date('Y-m-d');
      $qry="insert into loanpass(lokey,loanid,kloginid,cdate) values('".$key1."','".$id."','".$id1."','".$cdate."')";
      // echo $qry;exit;
      $exe=mysql_query($qry);
      if($exe)
      {
        echo"<script>alert('successfull');window.location.href='loanviewkudumb.php';</script>";
      }
      else
        echo"<script>alert('unsuccessfull')</script>";
    }
    function loanviewmember($key)
  {
    // $id=keytoid("login","lkey",$key);
  $qry="select * from loan";
  // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function loanapply($alkey,$key)
    {
      $key1=uniquekey("loanapply","alkey");
      $id1=keytoid("login","lkey",$key);
      // echo $id1;exit;
       $qrywww="select kudumbasree from memberreg where loginid='".$id1."'";
    // echo $qry;exit;
  $exew=mysql_query($qrywww);
   
  $arr=null;
  while($rr=mysql_fetch_array($exew))
      {
        $arr=$rr['kudumbasree'];
      }
     
      $id=keytoid("loan","loankey",$alkey);
      $cdate=date('Y-m-d');
      $qry="insert into loanapply(alkey,loanid,mloiginid,cdate,kid) values('".$key1."','".$id."','".$id1."','".$cdate."','".$arr."')";
      // echo $qry;exit;
      $exe=mysql_query($qry);
      if($exe)
      {
        echo"<script>alert('successfull');window.location.href='loanviewmember.php';</script>";
      }
      else
        echo"<script>alert('unsuccessfull')</script>";
    }    
    function loanapply1($alkey,$key)
    {
      $key1=uniquekey("loanapply","alkey");
      $id1=keytoid("login","lkey",$key);
         $qrywww="select kudumbasree from employerreg where loginid='".$id1."'";
    // echo $qry;exit;
  $exew=mysql_query($qrywww);
   
  $arr=null;
  while($rr=mysql_fetch_array($exew))
      {
        $arr=$rr['kudumbasree'];
      }
     
      // echo $id1;exit();
      $id=keytoid("loan","loankey",$alkey);
      // echo $id;exit;
      $cdate=date('Y-m-d');
      $qry="insert into loanapply(alkey,loanid,mloiginid,cdate,kid) values('".$key1."','".$id."','".$id1."','".$cdate."','".$arr."')";
      // echo $qry;exit;
      $exe=mysql_query($qry);
      if($exe)
      {
        echo"<script>alert('successfull');window.location.href='loanvemploye.php';</script>";
      }
      else
        echo"<script>alert('unsuccessfull')</script>";
    }    
function apmemberview($key,$lkey)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select * from loanapply inner join memberreg on memberreg.loginid=loanapply.mloiginid where memberreg.kudumbasree='".$id."' and loanapply.loanid='".$lkey."'";
    // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}

function apmemberview1($key,$lkey)
  {
    $id=keytoid("login","lkey",$key);
    $qry="select * from loanapply inner join employerreg on employerreg.loginid=loanapply.mloiginid where employerreg.kudumbasree='".$id."' and loanapply.loanid='".$lkey."'";
    // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function payamountview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select amount,loanid from loanapply where mloiginid='".$id."'";
  // echo  $qry;exit();
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $amount=$rr['amount'];
         $loanid=$rr['loanid'];
        $mamount=$amount/12;
        $amount1['loan']=$amount;
        $monthlyamount['mpay']=$mamount;
        $mloanid['loa']=$loanid;
        $arr[]=$mloanid;
        $arr[]=$amount1;
        $arr[]=$monthlyamount;

      }
        // print_r($arr);exit;
      return $arr;
  
}
function payamountview1($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select loanid from loanapply where mloiginid='".$id."'";
  // echo  $qry;exit();
  $exe=mysql_query($qry);
   
  $arr=null;
  while($rr=mysql_fetch_array($exe))
      {
        
         $arr=$rr['loanid'];
      
      }
       // print_r($arr);exit;
      return $arr;
  
}
      function loanpayamount($name,$cardno,$cvv,$month,$year,$key,$o,$loanid,$am)
      {
         $id=keytoid("login","lkey",$key);

        $qry8="select id from payamount where loginid='".$id."'";
        $exe8=mysql_query($qry8);
        $id11=null;
        while($rr1=mysql_fetch_array($exe8))
        {
          $id11=$rr1['id'];
        }



        if($id11==null)
        {
      

    //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }


    //   }
  $blamount=$am-$o;

    if($bamount>=$o)
    {
        //addcart
       $akey=uniquekey("payamount","amkey");
       $date=date('Y-m-d');
       $month=date('m');
       $id=keytoid("login","lkey",$key);
      // echo $id;exit;
       $qry1="insert into payamount(amkey,loid,loginid,amount,mpay,bamount,cmonth,cdate) values('".$akey."','".$loanid."','".$id."','".$am."','".$o."','".$blamount."','".$month."','".$date."')";
      
       $exe=mysql_query($qry1);
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$o."','".$id."','".$date."')";
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$o;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          $exwwww="update bank set tamount=tamount+'".$o."'where cno='563214789632' and cvv='663'";
          $ex1ww=mysql_query($exwwww);
          // $exe8="update payamount set bamount=bamount-'".$o."'where loginid='".$id."'";
          // $exee=mysql_query($exe8);
          
           // $exrr="update cart set paymentstatus ='1'where akey='".$akey."'";
           // $ex2=mysql_query($exrr);
         echo "<script>alert('successfull');window.location.href=('payamountq.php');</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull')</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      } 

      }
      else{

           //bamount
    $qry3="select tamount from bank where cno='".$cardno."' and cvv='".$cvv."'";
    $exe3=mysql_query($qry3);
    $bamount=null;
    while($rr=mysql_fetch_array($exe3))
      {
        $bamount=$rr['tamount'];
      }


$qry31="select bamount from payamount where loginid='".$id."' and loid='".$loanid."'";

    $exe31=mysql_query($qry31);
    $bamount1=null;
    while($rr11=mysql_fetch_array($exe31))
      {
        $bamount1=$rr11['bamount'];
      }




    //   }
  $blamount=$bamount1-$o;

    if($bamount>=$o)
    {
        //addcart
       $akey=uniquekey("payamount","amkey");
       $date=date('Y-m-d');
       $month=date('m');
       $id=keytoid("login","lkey",$key);
      // echo $id;exit;
       $qry1="insert into payamount(amkey,loid,loginid,amount,mpay,bamount,cmonth,cdate) values('".$akey."','".$loanid."','".$id."','".$am."','".$o."','".$blamount."','".$month."','".$date."')";
      
       $exe=mysql_query($qry1);
       //pay
       $key=uniquekey("payment","pakey");
       $qry="insert into payment(pakey,name,cardno,cvv,month,year,tamount,loginid,cdate) values('".$key."','".$name."','".$cardno."','".$cvv."','".$month."','".$year."','".$o."','".$id."','".$date."')";
        $exe=mysql_query($qry);
        if($exe)
        {
          $b=$bamount-$o;
          $ex="update bank set tamount='".$b."'where cno='".$cardno."' and cvv='".$cvv."'";
          $ex1=mysql_query($ex);
          $exwwww="update bank set tamount=tamount+'".$o."'where cno='563214789632' and cvv='663'";
          $ex1ww=mysql_query($exwwww);
          // $exe8="update payamount set bamount=bamount-'".$o."'where loginid='".$id."'";
          // $exee=mysql_query($exe8);
          
           // $exrr="update cart set paymentstatus ='1'where akey='".$akey."'";
           // $ex2=mysql_query($exrr);
         echo "<script>alert('successfull');window.location.href=('payamountq.php');</script>";
        }
        else
        {
        echo"<script>alert('unsuccessfull')</script>";
        }
      }
      else
      {
        echo"<script>alert('invalid bank data ')</script>";
      } 

      } 


      
}
   function feedback($key,$feedback)
   {
    $key1=uniquekey("feedback","fkey");
    $id=keytoid("login","lkey",$key);
   //id1=keytoid("userreg","kkey",$key2);
    $qry2="select kudumbasree from memberreg where loginid='".$id."'";
        $ex2=mysql_query($qry2);
    while($rr=mysql_fetch_array($ex2))
    {
      $arr=$rr['kudumbasree'];
    }
//ho $arr;exit();
    $date=date('Y-m-d');
    $qry="insert into feedback (fkey,feedback,loginid,cdate,uid) values('".$key1."','".$feedback."','".$id."','".$date."','".$arr."')";
    // echo $qry;exit();
    $exe=mysql_query($qry);
    if ($exe) 
    {
      echo "<script>alert('feedback successfull')</script>";
    }

      else
           echo"<script>alert('feedback unsuccessfull')</script>";
    
    }
    function adminfbview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from feedback inner join memberreg on memberreg.loginid=feedback.loginid inner join userreg on  userreg.loginid=memberreg.kudumbasree order by feedback.id desc";
  // echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function edit_feedback($key)
    {
       $id=keytoid("feedback","fkey",$key);
      $qry1="select * from feedback where id='".$id."'";

      $exe1=mysql_query($qry1);
      $arr=array();
      while($rr=mysql_fetch_array($exe1))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function feedbackupdate($feedback,$key)
    {
       $id=keytoid("feedback","fkey",$key);
       $qry1="update feedback set feedback='".$feedback."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       
       //echo $qry2;exit();
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
  function memberfbview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from feedback inner join login on login.id=feedback.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function feedbackdelet($key)
   {
    $id=keytoid("feedback","fkey",$key);
    $qry="delete from feedback where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='feedbackmview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function meetingviewkudumb($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from meeting inner join login on login.id=meeting.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function dworkreport($k,$file=null)
{
  $key=uniquekey("dailydailyworkreport","wrkey");
  $pa="upload/".$key;
    $id=keytoid("login","lkey",$k);
  //$id=keytoid("dailyworkreport","wrkey",$key);
  $date=date('Y-m-d');
  $month=date('m');
  $qry="insert into dailyworkreport(wrkey,dailyworkreport,kloginid,cdate,cmonth) values('".$key."','".$file['name']."','".$id."','".$date."','".$month."')";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  if($exe)
  {
    mkdir($pa);
    move_uploaded_file($file['tmp_name'],$pa."/".$file['name']);
    echo"<script>alert('upload successfull')</script>";
  }
  else
    echo"<script>alert('upload unsuccessfull')</script>";
}
 function dworkreportv($key)
 {
    $id=keytoid("login","lkey",$key);
    // $month=date('m');
    $qry="select dailyworkreport,cdate,wrkey from dailyworkreport where kloginid='".$id."' ";
     // echo $qry;exit;
  $exe=mysql_query($qry);
   //echo$qry;exit();                                                                           
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
      //echo$arr;exit();
  
}
    function dworkdelet($key)
   {
    $id=keytoid("dailyworkreport","wrkey",$key);
    $qry="delete from dailyworkreport where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='dworkreportv.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
}
 function admindrview($key)
  {
    // $id=keytoid("login","lkey",$key);
    // $id=keytoid("userreg","kkey",$key);
  $qry="select dailyworkreport.wrkey,dailyworkreport.dailyworkreport,dailyworkreport.cdate,userreg.kudumbasree_name,userreg.contact_no,login.email from dailyworkreport  inner join userreg on userreg.loginid=dailyworkreport.kloginid inner join login on login.id=userreg.loginid";
// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
  function message($key,$message)
   {
    $key1=uniquekey("message","mskey");
    $id=keytoid("login","lkey",$key);
   //id1=keytoid("userreg","kkey",$key2);
    $qry2="select kudumbasree from memberreg where loginid='".$id."'";
        $ex2=mysql_query($qry2);
$arr=null;
    while($rr=mysql_fetch_array($ex2))
    {
      $arr=$rr['kudumbasree'];
    }
 //echo $arr;exit();
    $date=date('Y-m-d');
    $time=date('h:i:sa');
    $qry="insert into message(mskey,message,senderid,recieverid,cdate,ctime)values('".$key1."','".$message."','".$id."','".$arr."','".$date."','".$time."')";
       //echo $qry;exit();
    $exe=mysql_query($qry);
    if($exe) 
    {
      echo "<script>alert('message sent successfully')</script>";
    }

      else
           echo"<script>alert('sending unsuccessfull')</script>";
    
    }
     function kmessageview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select  message.mskey,message.senderid,message.message,message.ctime,message.cdate,memberreg.name,memberreg.contact from message inner join memberreg on memberreg.loginid=message.senderid where message.recieverid='".$id."'";
  // echo $qry;exit;
//$qre="select * from message"; 
  $exe=mysql_query($qry);
    $q="update message set status='1' where recieverid='".$id."'";
    // echo $q;exit();

   $e=mysql_query($q);

  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;

}
 function replay($key,$replay,$rid)
   {
    $key1=uniquekey("replay","mskey");
    $id=keytoid("login","lkey",$key);
   
    $date=date('Y-m-d');
    $time=date('h:i:sa');
    $qry="insert into message(mskey,message,senderid,recieverid,cdate,ctime)values('".$key1."','".$replay."','".$id."','".$rid."','".$date."','".$time."')";
       // echo $qry;exit();
    $exe=mysql_query($qry);
    if($exe) 
    {
      echo "<script>alert('replay sent successfully')</script>";
    }

      else
           echo"<script>alert('sending unsuccessfull')</script>";
    
    }
         function replayview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select  message.message,message.ctime,message.cdate from message where message.recieverid='".$id."'";
  // echo $qry;exit;

  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
     function messagemview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from message where senderid='".$id."'";
  // echo $qry;exit;

  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function messagedelete($key)
   {

    $id=keytoid("message","mskey",$key);
    $qry="delete from message where id='".$id."'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    if ($exe)
    {

      echo"<script>alert('deletion succssesful');window.location.href='membervmessage.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function rowmeterial($meterial,$quantity,$amount,$date,$key)
{
  $key1=uniquekey("rowmeterial","rowkey");
  $id=keytoid("login","lkey",$key);
  $qry="insert into rowmeterial(rowkey,meterial,quantity,amount,date,loginid) values('".$key1."','".$meterial."','".$quantity."','".$amount."','".$date."','".$id."')";
  // echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    echo"<script>alert('row meterial details submitted')</script>";
  }
  else
    echo"<script>alert('row meterial details not submitted')</script>";
}
function rowview($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from rowmeterial";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function editrow($key)
    {
            $id=keytoid("rowmeterial","rowkey",$key);
      $qry="select * from rowmeterial where id='".$id."'";
      //echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function rowedit($meterial,$quantity,$amount,$date,$key)
    {
       $id=keytoid("rowmeterial","rowkey",$key);
       $qry1="update rowmeterial set meterial='".$meterial."',quantity='".$quantity."',amount='".$amount."',date='".$date."' where id='".$id."'";
        // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
}
function rowdelet($key)
   {
    $id=keytoid("rowmeterial","rowkey",$key);
    $qry="delete from rowmeterial where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='rowview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful');window.location.href='rowedit.php';</script>";
   }
   function krowview($key)
  {
    $id=keytoid("login","lkey",$key);
    $qry2="select kudumbasree from clerkreg where loginid='".$id."'";
    $exe2=mysql_query($qry2);
    while($rr=mysql_fetch_array($exe2))
    {
      $arr=$rr['kudumbasree'];
    }
  $qry="select * from rowmeterial inner join clerkreg on clerkreg.loginid=rowmeterial.loginid where clerkreg.kudumbasree='".$id."'";
  // echo $qry;exit;
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function adminnotification($k,$notification)
  {
    $k1=uniquekey("notification","nkey");
    $id=keytoid("login","lkey",$k);
    $date=date('Y-m-d');
     $qry="insert into adnotification(adnkey,notification,cdate,loginid) values('".$k1."','".$notification."','".$date."','".$id."')";
     $exe=mysql_query($qry);
     if ($exe) 
     {
      echo"<script>alert('notification successfull')</script>";
     }
     else
     {
       echo"<script>alert('notification unsuccessfull')</script>";
     }
  }
  function adminvnotification($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from adnotification inner join login on login.id=adnotification.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
function adminnotificationdel($key)
   {
    $id=keytoid("adnotification","adnkey",$key);
    $qry="delete from adnotification where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='adminvnotification.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful');window.location.href='adminnotificationedit.php';</script>";
   }
   function admineditnotification($key)
    {
            $id=keytoid("adnotification","adnkey",$key);
      $qry="select * from adnotification where id='".$id."'";
      // echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function notificationupdate($notification,$key)
    {
       $id=keytoid("adnotification","adnkey",$key);
       $qry1="update adnotification set notification='".$notification."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       
       //echo $qry2;exit();
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
    }
  }
  function kudumbasreevnotification($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from adnotification inner join login on login.id=adnotification.loginid order by adnotification.id desc";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}

function selemp($key)
{
  $id=keytoid("login","lkey",$key);
  $qry="select * from employerreg where kudumbasree='".$id."'";
  $exe=mysql_query($qry);
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function workshedule($k,$notification)
  {
    $k1=uniquekey("notification","nkey");
    $id=keytoid("login","lkey",$k);
    $date=date('Y-m-d');
     $qry="insert into adnotification(adnkey,notification,cdate,loginid) values('".$k1."','".$notification."','".$date."','".$id."')";
     $exe=mysql_query($qry);
     if ($exe) 
     {
      echo"<script>alert('notification successfull')</script>";
     }
     else
     {
       echo"<script>alert('notification unsuccessfull')</script>";
     }
  }
  function empshedule($shedule,$date,$key)
{
  $key1=uniquekey("shedulework","shedulekey");
  $id=keytoid("login","lkey",$key);
  $cdate=date('Y-m-d');
  $qry1="select loginid from employerreg where employerreg.kudumbasree='".$id."'";
  // echo $
  $exe2=mysql_query($qry1);
  while($rr=mysql_fetch_array($exe2))
  {
    $arr=$rr['loginid'];
  }
  $qry="insert into shedulework(shedulekey,emploginid,kid,cdate,shiftdetails,date) values('".$key1."','".$arr."','".$id."','".$cdate."','".$shedule."','".$date."')";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  if($exe)
  {
    echo"<script>alert('successfull')</script>";
  }
  else
    echo"<script>alert('unsuccessfull')</script>";
}
function sheduleview($key)
{
  $id=keytoid("login","lkey",$key);
  $qry="select * from shedulework where kid='".$id."'";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function sheduleselect($key)
    {
            $id=keytoid("shedulework","shedulekey",$key);
      $qry="select * from shedulework where id='".$id."'";
     // echo $qry; exit();

      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
    }
    function sheduleupdate($shedule,$date,$key)
    {
       $id=keytoid("shedulework","shedulekey",$key);
       $qry1="update shedulework set shiftdetails='".$shedule."',date='".$date."' where id='".$id."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('updation successfull')</script>";
       }
       else
       {
        echo "<script>alert('updation unsuccessfull')</script>";
       }
    }
     function sheduledelete($key)
   {
    $id=keytoid("shedulework","shedulekey",$key);
    $qry="delete from shedulework where id='".$id."'";
    $exe=mysql_query($qry);
    if ($exe)
    {
      echo"<script>alert('deletion succssesful');window.location.href='empsheduleview.php';</script>";
    } 
    else
            echo"<script>alert('deletion unsuccssesful')</script>";
   }
   function sheduleviewemp($key)
{
  $id=keytoid("login","lkey",$key);
  $qry="select * from shedulework inner join employerreg on employerreg.kudumbasree=shedulework.kid where shedulework.emploginid='".$id."'";
  //echo $qry;exit();
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function adminvkudumbasree($key)
  {
    $id=keytoid("login","lkey",$key);
  $qry="select * from userreg inner join login on login.id=userreg.loginid";
  $exe=mysql_query($qry);
   
  $arr=array();
  while($rr=mysql_fetch_array($exe))
      {
        $arr[]=$rr;
      }
      return $arr;
  
}
   function approvekudumbasree($key)
{
   // $id=keytoid("login","lkey",$key);
       $qry1="update login set status='1' where id='".$key."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('successfull');window.location.href='adminvkudumbasree.php';</script>";
       }
       else
       {
        echo "<script>alert('unsuccessfull')</script>";
       }
    }
 function Rejectkudumbasree($key)
{
   // $id=keytoid("login","lkey",$key);
       $qry1="update login set status='2' where id='".$key."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('successfull');window.location.href='adminvkudumbasree.php';</script>";
       }
       else
       {
        echo "<script>alert('unsuccessfull')</script>";
       }
    }
      function approvemember($key)
{
   // $id=keytoid("login","lkey",$key);
       $qry1="update login set status='1' where id='".$key."'";
       // echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('successfull');window.location.href='memberview.php';</script>";
       }
       else
       {
        echo "<script>alert('unsuccessfull')</script>";
       }
    }
    function Rejectmember($key)
{
   // $id=keytoid("login","lkey",$key);
       $qry1="update login set status='2' where id='".$key."'";
        //echo $qry1;exit();
       $exe1=mysql_query($qry1);
       if($exe1)
       {

        echo "<script>alert('successfull');window.location.href='memberview.php';</script>";
       }
       else
       {
        echo "<script>alert('unsuccessfull')</script>";
       }
    }
    }     
?>