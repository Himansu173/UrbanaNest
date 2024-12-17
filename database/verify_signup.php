<?php
    $name = $_POST['name'];
    $email = trim($_POST['email']);
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    require_once "dbconnect.php";

    $qry = "SELECT * FROM user WHERE email= ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("s",$email);
    $res = $stmt->execute();
    if(!$res){
        die($conn->error);
    }
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        echo "error";
    }else{
        $qry = "INSERT INTO user(name,email,mobile,password) values(?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssis",$name,$email,$mobile,$password);
        $res = $stmt->execute();
        if($res){
            echo "success";
        }else{
            echo "error1";
        }
    }

    // if($email === "soumendrabehera99@gmail.com"){
    //     echo "error";
    // }else{
    //     if($email === "user@gmail.com"){
    //         echo "success";
    //     }else{
    //         echo "error1";
    //     }
    // }

?>