<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");
    include 'db.php';
    $data = json_decode(file_get_contents("php://input"));
    
    if ($_SERVER['REQUEST_METHOD'] !=='PATCH') {
        echo json_encode(array("status"=>"error"));
        die();
    }
    
    try {
        $stmt = $dbh->prepare("UPDATE `user` SET `fname`=:fname,`lname`=:lname,`email`=:email,`proid`=:proid,`proname`=:proname,`indate`=:indate,`exdate`=:exdate,`price`=:price,`interest`=:interest WHERE `id`=:id");
        $stmt->bindParam(":id", $data->id);
        $stmt->bindParam(":fname", $data->fname);
        $stmt->bindParam(":lname", $data->lname);
        $stmt->bindParam(":email", $data->email);
        $stmt->bindParam(":proid", $data->proid);
        $stmt->bindParam(":proname", $data->proname);
        $stmt->bindParam(":indate", $data->indate);
        $stmt->bindParam(":exdate", $data->exdate);
        $stmt->bindParam(":price", $data->price);
        $stmt->bindParam(":interest", $data->interest);

        if ($stmt->execute()) {
            echo json_encode(array("status"=>"ok"));
        }else{
            echo json_encode(array("status"=>"error"));
        }

        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>