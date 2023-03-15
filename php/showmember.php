<?php
include_once "condb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">โรงรับจำนำเฮงๆ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="showmember.php">ข้อมูลผู้จำนำ</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <div class=" h4 text-center alert alert-info" role="alert">แสดงข้อมูล</div>
        <table class="table table-bordered">
            <tr>
                <th>รหัสบัตรประจำตัวประชาชน</th>
                <th>ชื่อ-นามสกุล</th>
                <th>วัน/เดือน/ปีเกิด</th>
                <th>รหัสสิ่งของ</th>
                <th>ชื่อสิ่งของ</th>
                <th>ราคา</th>
                <th>วันที่นำเข้าจำนำ</th>
                <th>วันที่นำหมดจำนำ</th>
                <th>ดอกเบี้ย</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `customer`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?= $row["PID"] ?></td>
                    <td><?= $row["PNAME"] ?></td>
                    <td><?= $row["BDATE"] ?></td>
                    <td><?= $row["PROID"] ?></td>
                    <td><?= $row["PRONAME"] ?></td>
                    <td><?= $row["Price"] ?></td>
                    <td><?= $row["INDATE"] ?></td>
                    <td><?= $row["EXDATE"] ?></td>
                    <td><?= $row["Interest"] ?></td>
                    <td><a href="editmemberform.php?PID=<?= $row["PID"] ?>" class="btn btn-warning">Edit</td>
                    <td><a href="deletemember.php?PID=<?= $row["PID"] ?>" class="btn btn-danger">Delete</td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>

        </table>
    </div>


</body>

</html>