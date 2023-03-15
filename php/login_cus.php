<?php
include('condb.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `customer` WHERE PNAME='$username' and PID='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row>0){
    $_SESSION["username"]=$row['PNAME'];
    $_SESSION["password"]=$row['PID'];
    echo"<script>alert('Login Sucess');</script>"; 
   echo"<script>window.location='customer.php';</script>"; 
}else {
 $_SESSION["Error"]="<p>Your name or password invalid</p>"   ;
 echo"<script>alert('Login Failed');</script>"; 
 echo"<script>window.location='login_cus_Form.php';</script>"; 
}
?>