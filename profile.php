<?php
include("databasecon.php");
session_start();
if (! empty ($_SESSION["ss_fnm"])){
$firstname=$_SESSION["ss_fnm"];
$lastname=$_SESSION["ss_lnm"];
$mob_no=$_SESSION["ss_mob"];
}
else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "<h1>".$firstname." ".$lastname ."</h1><br>";
echo"<h2>Mobile no:".$mob_no."</h2>";
?>
<a href="logout.php"><button>Logout</button></a>
</body>
</html>