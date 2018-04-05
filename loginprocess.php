<?php
include("databasecon.php");

$email=$_POST["email"];
$pswd=$_POST["pass"];

$s="select customer_id,first_name,last_name,mob_no from customers where BINARY mail=BINARY '$email' and BINARY paswrd=BINARY '$pswd'";
$i=mysqli_query($con,$s);
if($row=mysqli_fetch_assoc($i)){
	session_start();
	
	$_SESSION["ss_id"]=$row["customer_id"];
	$_SESSION["ss_fnm"]=$row["first_name"];
	$_SESSION["ss_lnm"]=$row["last_name"];
	$_SESSION["ss_mob"]=$row["mob_no"];

	echo "<script>alert('Welcome User'),window.location='profile.php'</script>";
  
}
else{
	echo "<script>alert('Invalid Input. Please try again.'),window.location='index.php';</script>";
}
?>