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
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div container>
            <br><br>
            <div class="row">
                <div>

                    <h1>Welcome</h1>
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?>

                    <div>
                        <form action="information.php" method="post">
                            <br>
                            <p> รหัสหมายเลยประจำตัวประชาชน: </p><input type="text" name="ID" placeholder="12009xxxxxxxx">
                            <p> ชื่อ-นามสกุล:</p> <input type="text" name="Name" placeholder="สุรยุxxxxx สุทธิสxxxxx"><br>
                            <br>
                            <p> รหัสสิ่งของ : </p><input type="text" name="ProID" placeholder="12345">
                            <p> ชื่อสิ่งของ:</p> <input type="text" name="ProName" placeholder="LG Gram"><br>
                            <br>
                            <p> ราคา:</p> <input type="text" name="Price" placeholder="450"><br>
                            <br>
                            <p> วันที่นำเข้าจำนำ: <input type="date" name="indate" id="d1"></p>
                            <p> วันที่นำหมดจำนำ: <input type="date" name="exdate" id="d2"><br>
                                <input type="submit" name="submit" onclick="data()"><br>
                            <div id="result"></div>

                        </form>

                    </div>

                    <br>
                    <a href="logout.php">Logout
                        </form>

                </div>

            </div>
        </div><br>

    </center>
</body>


</html>