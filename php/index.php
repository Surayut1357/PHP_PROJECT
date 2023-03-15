<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

    <div class="container1">
        <form action="information.php" method="post">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1>Welcome</h1>
            <?php
            if (isset($_SESSION["username"])) {
                echo $_SESSION["username"];
            }
            ?>
            <div>
                <br><br>
                รหัสหมายเลยประจำตัวประชาชน:<input type="text" name="ID" placeholder="12009xxxxxxxx" class="form-control"><br>
                ชื่อ-นามสกุล: <input type="text" name="Name" placeholder="สุรยุxxxxx สุทธิสxxxxx" class="form-control"><br>

                รหัสสิ่งของ : <input type="text" name="ProID" placeholder="12345" class="form-control"><br>
                ชื่อสิ่งของ: <input type="text" name="ProName" placeholder="LG Gram" class="form-control"><br>

                ราคา: <input type="text" name="Price" placeholder="450" class="form-control"><br>
                วัน/เดือน/ปีเกิด: <input type="date" name="bdate" id="d0" class="form-control"><br>
                วันที่นำเข้าจำนำ: <input type="date" name="indate" id="d1" class="form-control"><br>
                วันที่นำหมดจำนำ: <input type="date" name="exdate" id="d2" class="form-control"><br>
                <input type="submit" name="submit" onclick="data()" class="btn btn-info w-100" value="บันทึกข้อมูล"><br><br>

                <p>หากต้องการออกจากระบบคลิ๊ก<a href="logout.php">ออกระบบ</p>

        </form>

    </div>

    </div>


</body>


</html>