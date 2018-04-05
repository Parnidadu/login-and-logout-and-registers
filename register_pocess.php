<?php
include("databasecon.php");
session_start();
$fname=$_GET["name1"];
$lname=$_GET["name2"];
$email=$_GET["email"];
$cntct=$_GET["contact"];
$pswd=$_GET["password"];
$cpsd=$_GET["cpassword"];
$msg="";
$correct="";
$cor="";
if($cpsd == $pswd)
   {
      if(preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]*(\.[a-z]{2,3})+$/", $email)){
        if(preg_match("/^[6-9]{1}[0-9]{9}+$/",$cntct)){   
      $s="insert into customers(first_name,last_name,mob_no,mail,paswrd) values('$fname','$lname','$cntct',SHA1('$pswd'))";
   $i=mysqli_query($con,$s);
   
         echo "<script>alert('Registered successfully. Have a nice journey. Your Serial No.:$uid');window.location='index.php';</script>";
 }
 else{
   
   
   $correct="<h3 style='color:Red; '>Warning: You have Entered Wrong Number!!</h3>";
      header("location:reg.php?warning=".$correct);
 }
   
      
}	
else{
   
   $cor="<h3 style='color:Red; '>you have entered wrong mail_id </h3>";
      header("location:reg.php?warn=".$cor);
   
 }
}
else
{
	$msg="<h3 style='color:Red; '>again enter password!!</h3>";
	header("location:reg.php?warn1=".$msg);
}	
?>