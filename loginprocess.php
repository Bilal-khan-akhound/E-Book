<?php
$db = mysqli_connect('localhost','root','','pakistan');
if(!$db){
    die("Connection Failed");
}
$query="SELECT * FROM players WHERE Email='".$_POST['email']."' AND Phone_number='".$_POST['password']."'";
$result = mysqli_query($db,$query);
if($result->num_rows>0){
  $row = mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['admin'] = $row;
  header("location:index.php");
}else{
  header("location:login.php?error=Invalid User please try again later");
}
?>
