<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-warning" id="staticBackdropLabel">Login Page</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-floating mb-4 shadow rounded">
              <input type="email" class="form-control "style="border:none;" name="email" id="email" placeholder="Enter your gmail" required>
              <label for="email" class="form-label">Email</label>
          </div>
          <div class="form-floating mb-4 shadow rounded">
              <input type="password" class="form-control" style="border:none;" name="password" id="password" placeholder="Enter your password" required>
              <label for="password">Password</label>
          </div>
          <div class="mb-2 text-end">
              <input type="submit" class="btn btn-primary px-4 me-2 shadow" name="login" id="login" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>