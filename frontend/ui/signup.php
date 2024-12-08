<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
</head>
<body>
    <!-- button for Signup button trigger -->
    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
            Sign Up
        </button>
    </div>
   <!-- total form  -->
  <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-warning" id="staticBackdropLabel">Signup Page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-floating mb-4 shadow rounded">
                <input type="text" class="form-control "style="border:none;" name="name" id="name" placeholder="Enter your gmail" required>
                <label for="name" class="form-label">Name</label>
              </div>
              <label for=""id="errorName" class="text-danger"></label>
            <div class="form-floating mb-4 shadow rounded">
                <input type="email" class="form-control "style="border:none;" name="email" id="email" placeholder="Enter your gmail" required>
                <label for="email" class="form-label">Email</label>
              </div>
              <label for=""id="errorEmail" class="text-danger"></label>
            <div class="form-floating mb-4 shadow rounded">
                <input type="tel" class="form-control "style="border:none;" name="Mobile" id="mobile" placeholder="Enter your gmail" required>
                <label for="Mobile" class="form-label">Mobile</label>
              </div>
              <label for=""id="errorMobile" class="text-danger"></label>
            <div class="form-floating mb-4 shadow rounded">
                <input type="password" class="form-control" style="border:none;" name="password" id="password" placeholder="Enter your password" required>
                <label for="password">Password</label>
              </div>
              <label for=""id="errorPassword" class="text-danger"></label>
            <div class="form-floating mb-4 shadow rounded">
                <input type="password" class="form-control" style="border:none;" name="confirmPassword" id="confirmPassword" placeholder="Enter your password" required>
                <label for="confirmPassword">Confirm Password</label>
              </div>
              <label for=""id="errorConfirmPassword" class="text-danger"></label>
            <div class="d-flex justify-content-between">
                <div class="mb-2">
                    <label for="password">Already have an account?</label>
                    <a type="#" class="" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </a>
                </div>
                <div class="mb-2 text-end">
                    <input type="submit" class="btn btn-primary px-4 me-2 shadow" name="signup" id="signup" value="Sign Up">
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded",function(){
      const form = document.querySelector("form");
      const nameInput = document.getElementById("name");
      const emailInput = document.getElementById("email");
      const mobileInput = document.getElementById("mobile");
      const passwordInput = document.getElementById("password");
      const confirmPasswordInput = document.getElementById("confirmPassword");

      form.addEventListener("submit",function(e){
        // let isValid= true;
        if (!nameInput.value.match(/^[A-Za-z\s]+$/)) {
            document.getElementById("errorName").innerText = "Name contain only Characters and Space";
            // isValid = false;
            e.preventDefault();
        }
        if(!mobileInput.value.match(/^[6-9][0-9]{9}$/)){
          document.getElementById("errorMobile").innerText = "Mobile incorrect";
          // isValid = false;
          e.preventDefault();
        }
        
        if (passwordInput.value !== confirmPasswordInput.value) {
          document.getElementById("errorConfirmPassword").innerText = "Password and Confirm Password must be same.";
          e.preventDefault();
            // isValid = false;
        }
        if(isValid){
          window.location=signup.php;
        }
        
      })
    });
  </script>
    <script src="../../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/signupValidation.js"></script>
</body>
</html>
<?php
    if (isset($_POST['signup'])) {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $mobile = htmlspecialchars($_POST['Mobile']);
      $password = htmlspecialchars($_POST['password']);
      $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
      print_r($_POST);
    }
?>