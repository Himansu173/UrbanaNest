<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
</head>

<body>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-7">
            <div id="propertyImg" class="carousel slide w-100">
               <div class="carousel-inner h-100 w-100">
                  <div class="carousel-item active">
                     <img
                        src="https://imgs.search.brave.com/r3lzftQBeeNNKGchoyt7bQCTUmdgWJrxa772Vv6gOOk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzM3LzU0LzIz/LzM2MF9GXzQzNzU0/MjM2NF9yVUtSVURs/T1EyWm1WcnNpak5G/VWZyaHhaTzdqeU9G/Zy5qcGc"
                        class="card-img" alt="ax" height="400px">
                  </div>
                  <div class="carousel-item">
                     <img
                        src="https://imgs.search.brave.com/BURrOYrppSL3YBxY0ZIfp-r45A0AOzmKwaPYbPCQFD4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cGl4YWJheS5jb20v/cGhvdG8vMjAxNy8w/MS8wNy8xNy80OC9p/bnRlcmlvci0xOTYx/MDcwXzY0MC5qcGc"
                        class="card-img" alt="ax" height="400px">
                  </div>
                  <div class="carousel-item">
                     <img
                        src="https://imgs.search.brave.com/MRIsvkNXzCHqfkoEJvWn5aLQ7Ozr-UPjlpw5aev76A0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAwLzU3LzY4Lzgx/LzM2MF9GXzU3Njg4/MTc1X1BlSXNEOHpz/a013b2JiTTBOSVZN/SUlJMG5SZWdXc2Fs/LmpwZw"
                        class="card-img" alt="ax" height="400px">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#propertyImg" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#propertyImg" data-bs-slide="next">
                  <span class="carousel-control-next-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
         <div class="col-md-5">
            <div class="card-body px-2 px-md-0 pe-md-1 p-0">
               <p class="card-text fw-semibold fs-sm-5 fs-6 m-0 p-0 text-primary-emphasis">Property
                  Name</p>
               <p class="card-text mb-1 fs-6"><img src="../images/bed.png" alt="img" width="20rem"> 2
                  BHK Flat for Sale in Sundarpada, Bhubaneswar</p>
               <p class="card-text mb-1 fs-5 text-primary-emphasis m-0 fw-semibold">&#8377; 5.87L</p>
               <div class="row">
                  <p class="col-6 mb-0 fw-medium">8087 Sq.Ft</p>
                  <p class="col-6 mb-0 fw-medium">Semi-Furnished</p>
               </div>
               <div class="row">
                  <p class="col-6 mb-0" style="font-size:0.9rem">Build-up Area</p>
                  <p class="col-6 mb-0" style="font-size:0.9rem">Furnishing Status</p>
               </div>
               <div class="mt-1">
                  <p class="card-text lh-sm" style="font-size:0.9rem">
                        <?php
                           $description="Krishna Enclave - 2 BHK Flats for Sale in Sundarpada, Bhubaneswar. Searching for the perfect home for your family in a prime location.";
                           echo strlen($description)>180?substr($description,0,180)."...":$description
                        ?>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <script src="../../bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>