<?php
$ser="localhost";
$user="root";
$pass="";
$db="hotpotrestaurant";

$conn=mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
echo "Connection Success";


?>



