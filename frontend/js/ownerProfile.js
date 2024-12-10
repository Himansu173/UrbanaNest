$("#edit").click(() => {
    $(".update-btn").removeClass("hide");
    $("#edit").addClass("hide");
    $(".inp-details").removeClass("read-only");
})
$(".update-btn").click(() => {
    $(".update-btn").addClass("hide");
    $("#edit").removeClass("hide");
    $(".inp-details").addClass("read-only");
})
$("#addNew").click(()=>{window.location="propertyRegister.php"})
for(let i=0;i<6;i++){
    $("#yourProperties").append(`
        <div class="card property-card border-0 mb-3 overflow-y-hidden" style="width:20rem;">
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
                <div class="d-flex align-items-center">
                    <h5 class="card-title text-primary-emphasis">Rajinder Nagar</h5>
                    <span class="badge ms-2 text-bg-success propertyStatus" style="cursor:pointer;">Available</span>
                </div>
                <p class="card-text mb-1 fs-6">
                    <img src="../assets/img/bed.png" alt="img" width="20rem">
                    <span class="ms-1">3 BHK Flat for Sale in Sundarpada, Bhubaneswar</span>
                </p>
                <p class="card-text mb-1 fs-4 text-primary-emphasis m-0 fw-semibold">&#8377; 5.87L</p>
                <a class="btn btn-secondary fw-semibold btn-sm my-1 w-100" href="./propertyRegister.php"><i class="bi bi-pen"></i> Edit Property Details</a>
            </div>
        </div>
    `);
}
    $(".propertyStatus").click((e)=>{
        if($(e.currentTarget).hasClass("text-bg-success")){
            $(e.currentTarget).text("UnAvailable");
            $(e.currentTarget).removeClass("text-bg-success");
            $(e.currentTarget).addClass("text-bg-danger");
        }else{
            console.log("ca");
            $(e.currentTarget).text("Available");
            $(e.currentTarget).removeClass("text-bg-danger");
            $(e.currentTarget).addClass("text-bg-success");
        }
    })