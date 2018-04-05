<?php
$con=mysqli_connect("localhost","root","","people_contacts",3306) or die("Server not found");
mysqli_select_db($con,"people_contacts") or die("database not found!");
?>