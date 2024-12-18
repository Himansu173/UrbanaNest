<?php
  session_start();
?>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
          <h1 class="modal-title fs-5 text-warning" id="staticBackdropLabel">Login Page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="home.php" method="post" id="loginForm">
          <div class="form-floating mb-4 shadow rounded">
            <input type="email" class="form-control "style="border:none;" name="email" id="email" placeholder="Enter your gmail" required>
            <label for="email" class="form-label">Email</label>
          </div>
          <label for=""id="errorLoginEmail" class="text-danger"></label>
          <div class="form-floating mb-4 shadow rounded">
            <input type="password" class="form-control" style="border:none;" name="password" id="password" placeholder="Enter your password" required>
            <label for="password">Password</label>
          </div>
          <label for=""id="errorLoginPassword" class="text-danger"></label>
          <div class="d-flex justify-content-between ">
                <div class="mb-2">
                    <label for="">Don't have an account?</label>
                    <a type="#" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#signupModal">
                        Signup
                    </a>
                </div>
                <div class="mb-2 text-end">
                  <input type="submit" class="btn btn-primary px-4 me-2 shadow" name="login" id="login" value="Login">
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="../assets/vendor/jQuery/jquery-3.7.1.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
        // console.log("Script loaded");
        const form = document.querySelector("#loginForm");
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            let isValid = true;

            document.getElementById("errorLoginEmail").innerText = "";
            document.getElementById("errorLoginPassword").innerText = "";

            if (!emailInput.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
                document.getElementById("errorLoginEmail").innerText = "Please enter a valid email address.";
                isValid = false;
            }

            if (isValid) {
              
              $.ajax({
                url: "../../database/verify_login.php",
                type: "POST",
                data: {
                  email: emailInput.value,
                  password: passwordInput.value
                },
                success: function (response){
                  console.log(response);
                  if(response.trim() === "success"){
                    console.log("form submited");
                    console.log(response);
                    form.submit();
                  }else{
                    console.log("error");
 
                  }
                }
              })
            }
        });
    });
  </script>
<?php
if(isset($_SESSION['userId'])){
    echo $_SESSION['userId'] ;
}
?>