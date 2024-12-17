<?php $isLogged = false; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>UrbanNest</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
    />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/glightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/allProperties.css" />
    <link rel="stylesheet" href="../css/ownerProfile.css" />

    <!-- Main CSS File -->
    <link href="../css/main.css" rel="stylesheet" />
    <!-- <script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script> -->
  </head>

  <body class="index-page">
    <div
      class="container-fluid py-xl-0 py-3 position-relative d-flex align-items-center position-sticky sticky-top justify-content-between bg-white shadow-sm"
    >
      <a href="index.php" class="logo d-flex align-items-center me-xl-0">
        <!-- <img src="../assets/img/logo.png" alt="LOGO" class="rounded" height="35px"> -->
        <div class="p-1 bg-black text-white rounded fw-bold">UN</div>
        <h4 class="fw-semibold text-black mb-0 ms-1">UrbanNest</h4>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./home.php#hero" class="active">Home</a></li>
          <li>
            <a href="./home.php#recent-posts" class="active">Recent Post</a>
          </li>
          <li><a href="./home.php#contact" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?= $isLogged 
        ? '<div class="dropdown">
            <a
              data-mdb-dropdown-init
              class="dropdown-toggle-d-none d-flex align-items-center hidden-arrow"
              href="#"
              id="navbarDropdownMenuAvatar"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="../assets/img/profile.png"
                class="rounded-circle"
                height="40"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu "
              aria-labelledby="navbarDropdownMenuAvatar"
            >
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </div>'
        : '<a
            class="btn btn-dark btn-sm"
            data-bs-toggle="modal"
            data-bs-target="#loginModal"
          >
            Log In
          </a>'
      ?>

      <?php require_once "login.php"; ?>
      <?php require_once "signup.php"?>
    </div>
  </body>
</html>
