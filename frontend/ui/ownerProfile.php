<?php require_once "navbar.php" ?>
<div class="container pt-4">
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
                        <input type="text" class="inp fs-5 border-bottom read-only" id="name"
                            value="Jeetendra Singh">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="email" class="form-label fs-5 fw-semibold mb-0">Email</label>
                        <input type="email" class="inp fs-5 border-bottom read-only" id="email"
                            value="Jeetendra.Singh@gmail.com">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="phone" class="form-label fs-5 fw-semibold mb-0">Phone No.</label>
                        <input type="text" class="inp fs-5 border-bottom read-only" id="phone" value="9876651972">
                    </div>
                    <div class="mb-3 text-primary-emphasis">
                        <label for="Address" class="form-label fs-5 fw-semibold mb-0">Address</label>
                        <textarea name="Address" class="inp fs-5 border-bottom read-only" id="Address"
                            rows="1">Bhubaneswar, Odisha</textarea>
                    </div>
                    <div class="mb-2 text-primary-emphasis d-flex justify-content-end">
                        <button type="button" class="btn btn-primary text-white me-2" data-bs-toggle="modal"
                            data-bs-target="#updatePasswordModal">
                            Update Password
                        </button>
                        <input type="button" class="btn btn-secondary update-btn hide me-2" value="Cancle" id="cancle">
                        <input type="submit" class="btn btn-primary update-btn hide" value="Update" id="Update">
                        <input type="button" class="btn btn-primary edit-btn text-white" value="Edit Details"
                            id="edit">
                    </div>
                </form>
                <div class="modal fade" id="updatePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="updatePasswordModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="updatePasswordModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">Existing
                                            Password</label>
                                        <input type="password" class="inp border-bottom" id="phone"
                                            name="existingPassword">
                                    </div>
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">New Password</label>
                                        <input type="password" class="inp border-bottom" id="phone"
                                            name="newPassword">
                                    </div>
                                    <div class="mb-3 text-primary-emphasis">
                                        <label for="phone" class="form-label fw-semibold mb-0">Confirm
                                            Password</label>
                                        <input type="password" class="inp border-bottom" id="phone"
                                            name="confirmPassword">
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
        <div class="d-flex flex-wrap justify-content-evenly" id="yourProperties"></div>
    </div>
</div>
<?php require_once "footer.php" ?>
<script>
    $("#addNew").click(()=>{window.location="propertyRegister.php"})
    for(let i=0;i<6;i++){
        $("#yourProperties").append(`
            <div class="card property-card border-0 overflow-hidden mb-4" style="cursor:pointer;width:20rem">
                <div id="propertyImg" class="carousel slide w-100">
                    <div class="carousel-inner h-100 w-100">
                        <div class="carousel-item active">
                            <img src="https://imgs.search.brave.com/r3lzftQBeeNNKGchoyt7bQCTUmdgWJrxa772Vv6gOOk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzM3LzU0LzIz/LzM2MF9GXzQzNzU0/MjM2NF9yVUtSVURs/T1EyWm1WcnNpak5G/VWZyaHhaTzdqeU9G/Zy5qcGc" class="card-img" alt="ax" height="200px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://imgs.search.brave.com/BURrOYrppSL3YBxY0ZIfp-r45A0AOzmKwaPYbPCQFD4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cGl4YWJheS5jb20v/cGhvdG8vMjAxNy8w/MS8wNy8xNy80OC9p/bnRlcmlvci0xOTYx/MDcwXzY0MC5qcGc" class="card-img" alt="ax" height="200px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://imgs.search.brave.com/MRIsvkNXzCHqfkoEJvWn5aLQ7Ozr-UPjlpw5aev76A0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAwLzU3LzY4Lzgx/LzM2MF9GXzU3Njg4/MTc1X1BlSXNEOHpz/a013b2JiTTBOSVZN/SUlJMG5SZWdXc2Fs/LmpwZw" class="card-img" alt="ax" height="200px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyImg"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyImg"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body p-2 property-body bg-white">
                    <h5 class="card-title text-primary-emphasis">Rajinder Nagar</h5>
                    <p class="card-text mb-1 fs-6">
                        <img src="../assets/img/bed.png" alt="img" width="20rem">
                        <span class="ms-1">3 BHK Flat for Sale in Sundarpada, Bhubaneswar</span>
                    </p>
                    <p class="card-text mb-1 fs-4 text-primary-emphasis m-0 fw-semibold">&#8377; 5.87L</p>
                    <div class="row g-0">
                        <p class="col-6 mb-0 fw-medium">8087 Sq.Ft</p>
                        <p class="col-6 mb-0 fw-medium text-end">Semi-Furnished</p>
                    </div>
                    <div class="row g-0">
                        <p class="col-6 mb-0" style="font-size:0.9rem">Build-up Area</p>
                        <p class="col-6 mb-0 text-end" style="font-size:0.9rem">Furnishing Status</p>
                    </div>
                </div>
            </div>
        `);
    }
</script>