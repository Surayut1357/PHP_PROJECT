<?php
include 'condb.php';

$name =$_POST['username'];
$email =$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO `member`(`username`, `email`, `password`) 
VALUES ('$name','$email','$password')";
$result=mysqli_query($conn,$sql);
if ($result) {
   echo"<script>alert('Saved Data');</script>"; 
   echo"<script>window.location='register.php';</script>"; 
}
else{
   
    echo"<script>alert('Can't Save');</script>";
}

mysqli_close($conn);




?>