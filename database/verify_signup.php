<?php
    require_once "dbconnect.php";
    $name = $_POST['name'];
    $email = trim($_POST['email']);
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = trim($_POST['password']);
    // if($password === ""){
    //     echo "error";
    // }else{
    //     echo $password;
    // }

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
        $qry = "INSERT INTO user(name,email,contact,address,password) values(?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        // $hash_password = password_hash($password,PASSWORD_BCRYPT);
        $stmt->bind_param("ssiss",$name,$email,$mobile,$address,$password);
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