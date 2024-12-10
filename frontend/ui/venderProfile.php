<?php require_once "./navbar.php" ?>
<div class="container my-2">
    <div class="card shadow-sm border-0 rounded d-flex align-items-start">
        <div class="bg-img d-flex justify-content-center align-items-end w-100 img-container"
            style="height: 300px;">
        </div>
        <div class="rounded-circle z-1 ms-md-5 mx-auto text-center" style="margin-top: -60px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s"
                alt="user" height="120px" width="120px" class="rounded-circle shadow">
            <div class="text-md-start">
                <h4 class="text-primary-emphasis fw-semibold">Jeetendra Singh</h4>
                <h6 class="text-primary-emphasis fw-semibold"><i class="bi bi-geo-alt-fill"></i> Bhubaneswar, Odisha</h6>
                <h6 class="text-primary-emphasis fw-semibold"><i class="bi bi-envelope-fill"></i> jeetendra@gmail.com</h6>
                <h6 class="text-primary-emphasis fw-semibold"><i class="bi bi-telephone-fill"></i> 9873989827</h6>
            </div>
        </div>
    </div>
    <h5 class="my-3 fw-semibold">Recent Properties Listed By Jeetendra Singh</h5>
    <div id="venderProperties">
        <div></div>
    </div>
</div>
<?php require_once "./footer.php" ?>
<script>
    for (let i = 0; i < 10; i++) {
        $("#venderProperties").append(`
        <div class="row mt-3 g-0 px-2 w-100 d-flex justify-content-between" onMouseOver="this.style.backgroundColor='#f5f5f5'" onMouseOut="this.style.backgroundColor=''" style="cursor:pointer;">
            <div class="col-md-2 col-3">
                    <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyaminmellish-186077.jpg&fm=jpg" alt="img" width="90px" class="rounded">
            </div>
            <div class="col-md-4 col-sm-5 col-6 d-flex align-items-center flex-wrap overflow-hidden">
                    <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.8rem">
                    4 BHK Appartment 
                    </div>
                    <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.8rem">
                    Bhubaneswar
                    </div>
            </div>
            <div class="col-xl-2 d-xl-flex align-items-center justify-content-center overflow-hidden d-none" style="font-size:0.8rem">
                    8976 Sq.Ft
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center overflow-hidden" style="font-size:0.8rem">
            &#8377; 1.07L
            </div>
            <div class="col-md-2 d-md-flex align-items-center justify-content-center overflow-hidden d-none" style="font-size:0.8rem">
                    12-09-2024
            </div>
        </div>
        `)
    }
</script>