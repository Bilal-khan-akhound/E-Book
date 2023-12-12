<?php
$host="localhost";
$username="root";
$password="";
$dbname="pakistan";

$dbn = mysqli_connect($host,$username,$password,$dbname);
 if(!$db){
  die("Error Connection".mysqli_connect_error());
 }
?>
