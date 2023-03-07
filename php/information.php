<?php
include 'condb.php';

$per_id =$_POST['ID'];
$name =$_POST['Name'];
$proid=$_POST['ProID'];
$proname=$_POST['ProName'];
$price=$_POST['Price'];
$indate=$_POST['indate'];
$exdate=$_POST['exdate'];
 $dat1=strtotime($indate);
 $dat2=strtotime($exdate);
 $diff=abs(($dat1-$dat2)/60/60/24/30.44);

if ($price<=5000) {
    $interest=($price*0.25)*$diff;
}
else if ($price>=5001&&$price<=10000) {
    $interest=($price*0.75)*$diff;
}
else if ($price>=10001&&$price<=20000) {
    $interest=($price*1.00)*$diff;
}
else if ($price>=20001&&$price<=100000) {
    $interest=($price*1.25)*$diff;
}



$sql="INSERT INTO `customer`(`PID`, `PNAME`, `PROID`, `PRONAME`, `Price`, `INDATE`, `EXDATE`, `Interest`)
 VALUES ('$per_id','$name','$proid','$proname','$price','$indate','$exdate','$interest')";
$result=mysqli_query($conn,$sql);
if ($result) {
   echo"<script>alert('Saved Data');</script>"; 
   echo"<script>window.location='index.php';</script>"; 
}
else{
   
    echo"<script>alert('Can't Save');</script>";
}

mysqli_close($conn);
