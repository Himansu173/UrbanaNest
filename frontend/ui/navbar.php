<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
  </head>
  <body>
    <div class="row overflow-hidden z-5">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-4">
          <a class="navbar-brand" href="#">UrbanNest</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="adviseTool.php">Advice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Location</a
                >
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <div class="profile-pic">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwRPWpO-12m19irKlg8znjldmcZs5PO97B6A&s"
                      alt="Profile Picture"
                      width="50"
                    />
                  </div>
                  <!-- You can also use icon as follows: -->
                  <!--  <i class="fas fa-user"></i> -->
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-sliders-h fa-fw"></i> Account</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-cog fa-fw"></i> Settings</a
                    >
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
