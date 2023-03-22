<?php
include('staff.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `staff` WHERE email='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row>0){
    $_SESSION["email"]=$row['email'];
    $_SESSION["password"]=$row['password'];
    echo"<script>alert('Login Sucess');</script>"; 
   echo"<script>window.location='home.php';</script>"; 
}else {
 $_SESSION["Error"]="<p>Your name or password invalid</p>"   ;
 echo"<script>alert('Login Failed');</script>"; 
 echo"<script>window.location='login.php';</script>"; 
}
?>