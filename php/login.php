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
    <div container >
        <br><br>
        <div class="row">
            <div >

                เข้าสู่ระบบ
                <br>
                <form action="login_check.php" method="post">
                    ชื่อ <input type="text" name="username"  required><br><br>
                    รหัสผ่าน <input type="password" name="password"  required><br><br>
                    <br>
                    <input type="submit" name="submit" >
                    <input type="reset" name="reset" ><br>

                    <a href="register.php">Login
                </form>

            </div>

        </div>
    </div>
    </center>
</body>

</html>