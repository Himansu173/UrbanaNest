<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <style>
        .highlightEle {
            color: #e84545;
            border-bottom: 3px solid #e84545;
        }

        .hidden {
            width: 100%;
            z-index: 2;
            position: absolute;
            left: -100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid my-2 d-flex justify-content-center">
        <div class="hidden d-md-none row gx-0">
            <div class="col-8" id="smallScreenFilterConainer">
                <?php
                    require "sideFilter.php";
                    // $width = "<script>document.write(screen.width); </script>";
                    // if($width > 768){
                    //     require_once "sideFilter.php";
                    // }
                ?>
            </div>
            <div class="col-4" onclick="toggleFilters()"></div>
        </div>
        <div class="row my-1" style="max-width:1600px">
            <div class="row p-0 m-0">
                <div class="col-6 d-md-none d-block">
                    <span class="py-1 px-4 btn border rounded fw-semibold shadow-sm" onclick="toggleFilters()"
                        style="cursor:pointer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
                            </svg> Filter</span>
                </div>
                <div class="col-6 d-md-none text-end">
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle py-1 px-2 border rounded fw-semibold shadow-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                            </svg> Sort By
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><button class="dropdown-item" type="button">Popularity</button></li>
                            <li><button class="dropdown-item" type="button">Price -- Low to High</button></li>
                            <li><button class="dropdown-item" type="button">Price -- High to Low</button></li>
                            <li><button class="dropdown-item" type="button">Newest First</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-md-block d-none gx-5" id="largeScreenFilterConainer">
                <?php
                require "sideFilter.php";
                    // $width = "<script>document.write(screen.width); </script>";
                    // if($width <= 768){
                        // require_once "sideFilter.php";
                    // }
                ?>
            </div>
            <div class="col-md-9 py-2">
                <div class="d-md-flex d-none mb-2">
                    <span class="fw-bold mx-2">Sort By</span>
                    <div class="sortBySelect">
                        <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                            onclick="highlightSortBy(this)">Popularity</span>
                        <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                            onclick="highlightSortBy(this)">Price -- Low to High</span>
                        <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                            onclick="highlightSortBy(this)">Price -- High to Low</span>
                        <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                            onclick="highlightSortBy(this)">Newest First</span>
                    </div>
                </div>
                <div class="card px-1 shadow-sm">
                    <div class="row py-1" style="cursor:pointer;">
                        <div class="col-sm-5 col-xl-5 col-xxl-5 d-flex align-items-center" style="height:200px">
                            <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyaminmellish-186077.jpg&fm=jpg"
                                alt="home" class="card-img" height="100%">
                        </div>
                        <div class="col-sm-7 col-xl-7 col-xxl-7 d-flex align-items-center">
                            <div class="card-body px-2 px-md-0 pe-md-1 p-0">
                                <p class="card-text fw-semibold fs-sm-5 fs-6 m-0 p-0 text-primary-emphasis">Property
                                    Name</p>
                                <p class="card-text mb-1 fs-6"><img src="../assets/img/bed.png" alt="img" width="20rem"> 2
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
                                echo strlen($description)>180?substr($description,0,180)."...":$description ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex my-1 py-1 px-md-4 px-1" style="background-color:#f5f5f5">
                        <div class="d-flex align-items-center w-50 overflow-hidden">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s"
                                alt="user" height="30px" width="30px" class="border rounded-circle">
                            <span class="ms-md-2 ms-1 fw-medium" style="cursor:pointer;">Jeet Chaudhary</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-end w-50 overflow-hidden fw-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <span class="ms-2">8126578173</span>
                        </div>
                    </div>
                    <div class="row pt-1 pb-2 px-md-4 px-1" style="cursor:pointer" id="simillarProperty">
                        <div class="col-10 d-flex align-items-center overflow-hidden">
                            <span>Similar listings by Jeet Chaudhary</span>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end overflow-hidden" id="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                    <div class="container-fluid overflow-y-auto" id="simillarPropertyContainer"
                        style="max-height:300px"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../jQuery/jquery-3.7.1.min.js"></script>
    <script src="../../bootstrap/bootstrap.bundle.min.js"></script>
    <script>
        // if(screen.width<768){
        //     $("#smallScreenFilterConainer").html(``);
        //     $("#largeScreenFilterConainer").html('');
        // }else{
        //     $("#smallScreenFilterConainer").html('');
        // }
        $("#simillarPropertyContainer").hide();
        simillarPropertyShow = false;
        for (let i = 0; i < 10; i++) {
            $("#simillarPropertyContainer").append(`
            <div class="row my-1 px-md-5 px-1" onMouseOver="this.style.backgroundColor='#f5f5f5'" onMouseOut="this.style.backgroundColor=''" style="cursor:pointer;">
                <div class="col-md-2 col-3">
                    <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyaminmellish-186077.jpg&fm=jpg" alt="img" width="80px" class="rounded">
                </div>
                <div class="col-md-4 col-sm-5 col-6 d-flex align-items-center flex-wrap overflow-hidden">
                    <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.9rem">
                        4 BHK Appartment 
                    </div>
                    <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.9rem">
                        Bhubaneswar
                    </div>
                </div>
                <div class="col-sm-2 d-sm-flex align-items-center overflow-hidden d-none" style="font-size:0.9rem">
                    8976 Sq.Ft
                </div>
                <div class="col-md-2 d-md-flex align-items-center overflow-hidden d-none" style="font-size:0.9rem">
                    Furnished
                </div>
                <div class="col-sm-2 col-3 d-flex align-items-center overflow-hidden" style="font-size:0.9rem">
                &#8377; 1.07L
                </div>
            </div>
        `);
        }
        $("#simillarProperty").click(() => {
            if (simillarPropertyShow) {
                $("#arrow").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg>`);
                simillarPropertyShow = false;
                $("#simillarPropertyContainer").slideUp();
            } else {
                $("#arrow").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/></svg>`)
                simillarPropertyShow = true;
                $("#simillarPropertyContainer").slideDown();
            }
        })
        function highlightSortBy(ele) {
            console.log("caa");

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
    </script>
</body>

</html>