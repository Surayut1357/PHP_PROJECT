<?php
include_once "condb.php";
$per_id =$_GET['PID'];
$sql="DELETE FROM `customer` WHERE PID ='$per_id'";
if (mysqli_query($conn,$sql)) {
    echo"<script>alert('Delete Success');</script>"; 
    echo"<script>window.location='showmember.php';</script>"; 
}else {
    echo"Error :".$sql."<br>".mysqli_error($conn);
    echo"<script>alert('Delete Invalid');</script>"; 
}
?>

