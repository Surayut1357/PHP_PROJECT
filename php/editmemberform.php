<?php

include_once 'condb.php';
$pro_id = $_GET['PROID'];
$sql = "SELECT * FROM `customer` WHERE PROID ='$pro_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container1">
        <br><br>
        <div>
            <div>

                <br><br><br><br><br><br><br><br><br><br><br><br>
                <div class=" h4 text-center alert alert-info" role="alert">แสดงข้อมูล</div>

                <div>

                    <form action="editmember.php" method="post">

                        <p> รหัสหมายเลยประจำตัวประชาชน: </p><input type="text" name="ID" readonly class="form-control" value=<?= $row['PID'] ?>><br>
                        <p> ชื่อ-นามสกุล:</p> <input type="text" name="Name" placeholder="สุรยุxxxxx สุทธิสxxxxx" class="form-control" value=<?= $row['PNAME'] ?>><br>

                        <p> รหัสสิ่งของ : </p><input type="text" name="ProID" placeholder="12345" class="form-control" value=<?= $row['PROID'] ?>><br>
                        <p> ชื่อสิ่งของ:</p> <input type="text" name="ProName" placeholder="LG Gram" class="form-control" value=<?= $row['PRONAME'] ?>><br>

                        <p> ราคา:</p> <input type="text" name="Price" placeholder="450" class="form-control" value=<?= $row['Price'] ?>><br>
                        <p> วัน/เดือน/ปีเกิด: <input type="date" name="bdate" id="d1" class="form-control" value=<?= $row['BDATE'] ?>></p><br>
                        <p> วันที่นำเข้าจำนำ: <input type="date" name="indate" id="d1" class="form-control" value=<?= $row['INDATE'] ?>></p><br>
                        <p> วันที่นำหมดจำนำ: <input type="date" name="exdate" id="d2" class="form-control" value=<?= $row['EXDATE'] ?>><br>
                            <input type="submit" name="submit" class="btn btn-info w-100" value="แก้ไขข้อมูล"><br>
                        <div id="result"></div>

                    </form>

                </div>

                <br>

                </form>

            </div>

        </div>
    </div><br>


</body>


</html>