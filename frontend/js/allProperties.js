if (screen.width < 768) {
    $("#FilterConainer").removeClass("col");
    $("#FilterConainer").addClass("hidden");
}
for (let i = 0; i < 20; i++) {
    $("#propertyCardContainer").append(`
        <div class="card property-card border-0 overflow-hidden mb-4" style="cursor:pointer;">
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
$(".property-card").click(() => {
    window.location = "propertyDetails.php"
})
function highlightSortBy(ele) {
    $(".sortByElement").removeClass("highlightEle");
    $(ele).addClass("highlightEle");
}
function toggleFilters() {
    var hidden = $('.hidden');
    if (hidden.hasClass('visible')) {
        hidden.animate({ "left": "-100%" }, "medium").removeClass('visible');
    } else {
        hidden.animate({ "left": "0px" }, "medium").addClass('visible');
    }
}