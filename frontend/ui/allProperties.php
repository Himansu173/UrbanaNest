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
        <div class="card p-1">
            <div class="row">
                <div class="col-md-4 col-xl-3 col-xxl-2 d-flex align-items-center">
                    <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyaminmellish-186077.jpg&fm=jpg" alt="home" class="card-img">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body px-2 px-md-0 pe-md-3">
                        <h5 class="card-title">Property Name</h5>
                        <p class="card-text mb-1"><img src="../images/bed.png" alt="img" width="20rem"> 2 BHK Flat for Sale in Sundarpada, Bhubaneswar</p>
                        <p class="card-text fs-5 text-primary-emphasis mb-1 fw-semibold">&#8377; 5.87L</p>
                        <div class="row">
                            <p class="col-md-4 col-6 mb-0">8087 Sq.Ft</p>
                            <p class="col-md-4 col-6 mb-0">Semi-Furnished</p>
                        </div>
                        <div class="row">
                            <p class="col-md-4 col-6 mb-2" style="font-size:0.8rem">Build-up Area</p>
                            <p class="col-md-4 col-6 mb-2" style="font-size:0.8rem">Furnishing Status</p>
                        </div>
                        <div class="">
                            <p class="card-text" style="font-size:0.9rem"><?php
                            $description="Krishna Enclave - 2 BHK Flats for Sale in Sundarpada, Bhubaneswar. Searching for the perfect home for your family in a prime location.";
                            echo strlen($description)>130?substr($description,0,130)."...":$description ?> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex my-1 py-1 px-md-4 px-1" style="background-color:#f5f5f5">
                <div class="d-flex align-items-center w-50 overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s" alt="user" height="40px" width="40px" class="border rounded-circle">
                    <span class="ms-md-2 ms-1">Jeet Chaudhary</span>
                </div>
                <div class="d-flex align-items-center justify-content-end w-50 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                    <span class="ms-2">8126578173</span>
                </div>
            </div>
            <div class="d-flex my-1 py-1 px-md-4 px-1" style="cursor:pointer" id="simillarProperty">
                <div class="d-flex align-items-center w-50 overflow-hidden">
                    <span >Similar listings by Jeet Chaudhary</span>
                </div>
                <div class="d-flex align-items-center justify-content-end w-50 overflow-hidden" id="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="container-fluid overflow-y-scroll" id="simillarPropertyContainer" style="max-height:300px"></div>
        </div>
    </div>
    <script src="../../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../jQuery/jquery-3.7.1.min.js"></script>
    <script>
        $("#simillarPropertyContainer").hide();
        simillarPropertyShow=false;
        for(let i=0;i<10;i++){
            $("#simillarPropertyContainer").append(`
                <div class="row my-1 px-md-5 px-1" onMouseOver="this.style.backgroundColor='#f5f5f5'" onMouseOut="this.style.backgroundColor=''" style="cursor:pointer;">
                    <div class="col-md-2 col-3">
                        <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyaminmellish-186077.jpg&fm=jpg" alt="img" width="70px" class="rounded">
                    </div>
                    <div class="col-md-4 col-sm-5 col-6 d-flex align-items-center flex-wrap overflow-hidden">
                        <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.8rem">
                            4 BHK Appartment 
                        </div>
                        <div class="d-flex align-items-center w-100 overflow-hidden" style="font-size:0.8rem">
                            Bhubaneswar
                        </div>
                    </div>
                    <div class="col-sm-2 d-sm-flex align-items-center overflow-hidden d-none" style="font-size:0.8rem">
                        8976 Sq.Ft
                    </div>
                    <div class="col-md-2 d-md-flex align-items-center overflow-hidden d-none" style="font-size:0.8rem">
                        Furnished
                    </div>
                    <div class="col-sm-2 col-3 d-flex align-items-center overflow-hidden" style="font-size:0.8rem">
                    &#8377; 1.07L
                    </div>
                </div>
            `);
        }
        $("#simillarProperty").click(()=>{
            if(simillarPropertyShow){
                $("#arrow").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg>`);
                simillarPropertyShow=false;
                $("#simillarPropertyContainer").slideUp();
            }else{
                $("#arrow").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/></svg>`)
                simillarPropertyShow=true;
                $("#simillarPropertyContainer").slideDown();
            }
        })
    </script>
</body>
</html>