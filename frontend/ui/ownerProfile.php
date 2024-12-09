<?php require_once "navbar.php" ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-sm-6 px-sm-2">
            <div class="card shadow-sm border-0 p-0 d-flex justify-content-center align-items-center">
                <div class="bg-img d-flex justify-content-center align-items-end w-100 img-container"
                    style="height: 250px;">
                    <label for="bgImg" class="bg-img-upload h-100 w-100 justify-content-center align-items-center"
                        style="background-color: rgba(0, 0, 0, 0.187);">
                        <i class="bi bi-upload fs-1" style="color: whitesmoke;"></i>
                    </label>
                    <input type="file" class="d-none" id="bgImg">
                </div>
                <div class="rounded-circle shadow z-1 position-relative" style="margin-top: -60px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s"
                        alt="user" height="120px" width="120px" class="rounded-circle">
                    <label
                        class="position-absolute bottom-0 p-2 translate-middle badge rounded-circle bg-white shadow-sm"
                        for="userImg" style="cursor: pointer; margin-left: -10px;  margin-bottom: -12px;">
                        <i class="bi bi-camera-fill fs-5 text-dark"></i>
                    </label>
                    <input type="file" class="d-none" id="userImg">
                </div>
                <div class="mt-3 text-primary-emphasis text-center align-items-center">
                    <h4>Jeetendra Singh</h4>
                    <h6>Bhubaneswar, Odisha</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 px-sm-2">
            <div class="card shadow-sm border-0 p-3">
                <form action="" method="post">
                    <div class="mb-3 text-primary-emphasis">
                        <label for="name" class="form-label fs-5 fw-semibold mb-0">Name</label>
                        <input type="text" class="inp inp-details fs-5 border-bottom read-only"
                            value="Jeetendra Singh">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="email" class="form-label fs-5 fw-semibold mb-0">Email</label>
                        <input type="email" class="inp inp-details fs-5 border-bottom read-only" value="Jeetendra.Singh@gmail.com">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="phone" class="form-label fs-5 fw-semibold mb-0">Phone No.</label>
                        <input type="text" class="inp inp-details fs-5 border-bottom read-only" value="9876651972">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="Address" class="form-label fs-5 fw-semibold mb-0">Address</label>
                        <textarea name="Address" class="inp inp-details fs-5 border-bottom read-only" rows="1">Bhubaneswar, Odisha</textarea>
                    </div>
                    <div class="mb-2 text-primary-emphasis d-flex justify-content-end">
                        <button type="button" class="btn btn-primary text-white me-2" data-bs-toggle="modal" data-bs-target="#updatePasswordModal">Update Password</button>
                        <input type="button" class="btn btn-secondary update-btn hide me-2" value="Cancle" id="cancle">
                        <input type="submit" class="btn btn-primary update-btn hide" value="Update" id="Update">
                        <input type="button" class="btn btn-primary edit-btn text-white" value="Edit Details" id="edit">
                    </div>
                </form>
                <div class="modal fade" id="updatePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="updatePasswordModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="updatePasswordModalLabel">Update Your Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">Existing
                                            Password</label>
                                        <input type="password" class="inp border-bottom" name="existingPassword">
                                    </div>
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">New Password</label>
                                        <input type="password" class="inp border-bottom" name="newPassword">
                                    </div>
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">Confirm
                                            Password</label>
                                        <input type="password" class="inp border-bottom" name="confirmPassword">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center my-2">
            <span class="fw-semibold fs-5 text-primary-emphasis">Your Properties</span>            
            <button class="btn btn-primary" id="addNew"><i class="bi bi-plus-lg"></i> Add a new property</button>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-evenly" id="yourProperties"></div>
</div>
<?php require_once "footer.php" ?>