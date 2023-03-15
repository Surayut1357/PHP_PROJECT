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

    <div class="container1" >

        <form action="login_cus.php" method="post">
            <h2>
                <div class="text-center">เข้าสู่ระบบ</div>
            </h2>
            <br><br>
            ชื่อ-นามสกุล<br> <input type="text" name="username" class="form-control" required><br>
            รหัสหมายเลยประจำตัวประชาชน<br> <input type="password" name="password" class="form-control" required><br>

            <input type="submit" name="submit" class="btn btn-info w-100" value="เข้าสู่ระบบ"><br>
            <br>
           

        </form>

    </div>
    
   
</body>

</html>