<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once "dbconnect.php";
    $loginQry = "SELECT * FROM user where email=?";
    $stmt = $conn->prepare($loginQry);
    $stmt->bind_param("s",$email);
    $res = $stmt->execute();
    if(!$res){
      die($conn->error);
    }
    $result = $stmt->get_result();

    if($result->num_rows > 0){
      $user = $result->fetch_assoc();
      if($user['password']==$password){
        echo "success";
      }else{
        echo "error";
      }
    }else{
      echo "error";
    }
    // if($email === "soumendrabehera99@gmail.com" && $password === "password"){
    //   echo "success";
    // }else{
    //   echo "error";
    // }
?>
