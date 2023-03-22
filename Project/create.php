<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");
    include 'db.php';
    $data = json_decode(file_get_contents("php://input"));
    
    if ($_SERVER['REQUEST_METHOD'] !=='POST') {
        echo json_encode(array("status"=>"error"));
        die();
    }
    
    try {
        $stmt = $dbh->prepare("INSERT INTO user (fname,lname,email,proid,proname,indate,exdate,price,interest) VALUES (:fname,:lname,:email,:proid,:proname,:indate,:exdate,:price,:interest)");
        $stmt->bindParam(":fname", $data->fname);
        $stmt->bindParam(":lname", $data->lname);
        $stmt->bindParam(":email", $data->email);
        $stmt->bindParam(":proid", $data->proid);
        $stmt->bindParam(":proname", $data->proname);
        $stmt->bindParam(":indate", $data->indate);
        $stmt->bindParam(":exdate", $data->exdate);
        $stmt->bindParam(":price", $data->price);
        $stmt->bindParam(":interest", $data->interest);

       // :fname,:lname,:email,:proid,:proname,:indate,:exdate
        
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