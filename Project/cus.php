<?php
include 'staff.php';
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login_cus.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body onload="users_read()">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
          <a class="navbar-brand" href="index.php">โรงรับ 3</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="logout_cus.php">ออกจากระบบ</a>
                  </li>
                 

              </ul>
          </div>
      </div>
  </nav>
  <br><br>
    <div class="container">
        <div class="row">
            <h2>Users</h2>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">InDate</th>
                        <th scope="col">ExDate</th>
                        <th scope="col">Price</th>
                        <th scope="col">Interest</th>
                    </tr>
                </thead>
                <tbody id="users_table"></tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

<script>
    var users_read = function() {
        var requestOptions = {
            method: "GET",
            redirect: "follow",
        };

        var users_table = document.getElementById("users_table");
        users_table.innerHTML = "Loading...";
        fetch("http://localhost/PROJECT/Project/read.php", requestOptions)
            .then((response) => response.text())
            .then((result) => {
                users_table.innerHTML = "";
                var jsonObj = JSON.parse(result);
                for (let user of jsonObj) {
                    var row =
                        '<tr> <th scope="row">' + user.id + '</th>  <td>' + user.fname + '</td><td>' + user.lname + '</td><td>' + user.email + '</td><td>' + user.proid + '</td><td>' + user.proname + '</td><td>' + user.indate + '</td><td>' + user.exdate + '</td><td>' + user.price + '</td><td>' + user.interest + '</td> </tr>';
                    users_table.insertAdjacentHTML("beforeend", row);
                }
            })
            .catch((error) => console.log("error", error));
    };
</script>