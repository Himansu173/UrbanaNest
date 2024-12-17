<?php
    if (isset($_POST['signup'])) {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $mobile = htmlspecialchars($_POST['Mobile']);
      $password = htmlspecialchars($_POST['password']);
      $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
      print_r($_POST);
    }
    function addUser($name, $email, $mobile, $password){
        
    }
?>
