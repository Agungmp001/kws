<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kws";

$con=mysqli_connect("localhost","root","","kws");
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

