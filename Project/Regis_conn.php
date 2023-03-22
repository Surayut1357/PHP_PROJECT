<?php
include 'staff.php';

$id =$_POST['pid'];
$name =$_POST['name'];
$lname =$_POST['lname'];
$bdate =$_POST['date'];
$email =$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO `staff`(`pid`, `name`, `lname`, `bdate`, `email`, `password`) 
VALUES ('$id','$name','$lname','$bdate','$email','$password')";
$result=mysqli_query($conn,$sql);
if ($result) {
   echo"<script>alert('Saved Data');</script>"; 
   echo"<script>window.location='login.php';</script>"; 
}
else{
   
    echo"<script>alert('Can't Save');</script>";
}

mysqli_close($conn);




?>