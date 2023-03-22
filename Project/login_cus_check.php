<?php
include('staff.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `user` WHERE email='$username' and id='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row>0){
    $_SESSION["email"]=$row['email'];
    $_SESSION["id"]=$row['id'];
    echo"<script>alert('Login Sucess');</script>"; 
   echo"<script>window.location='cus.php';</script>"; 
}else {
 
 echo"<script>alert('Login Failed');</script>"; 
 echo"<script>window.location='login_cus_check.php';</script>"; 
}
?>