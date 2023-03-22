
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
       
                <form action="Regis_conn.php" method="post" >
                <h2>
                <div class="text-center">ลงทะเบียน</div>
            </h2>
                    รหัสบัตรประจำตัวประชาชน <input type="text" name="pid"  class="form-control" required><br>
                    ชื่อ <input type="text" name="name"  class="form-control" required><br>
                    สกุล <input type="text" name="lname"  class="form-control" required><br>
                    วันเกิด <input type="date" name="date" class="form-control" required><br>
                    อีเมลล์ <input type="text" name="email" class="form-control" required><br>
                    รหัสผ่าน <input type="password" name="password" class="form-control" required><br>
                
                    <input type="submit" name="submit" class="btn btn-info w-100" value="เข้าสู่ระบบ">
                    <br>
                    <p>สมัครสมาชิกพนักงานใช่ไหม? <a href="index.php">เข้าสู่ระบบ</p>

                </form>

            </div>

    
</body>

</html>