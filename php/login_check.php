<?php
include('condb.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `member` WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row>0){
    $_SESSION["username"]=$row['username'];
    $_SESSION["password"]=$row['password'];
    echo"<script>alert('Login Sucess');</script>"; 
   echo"<script>window.location='index.php';</script>"; 
}else {
 $_SESSION["Error"]="<p>Your name or password invalid</p>"   ;
 echo"<script>alert('Login Failed');</script>"; 
 echo"<script>window.location='login.php';</script>"; 
}
?>