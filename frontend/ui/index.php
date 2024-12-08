<?php
require_once "navbar.php"
?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <img 
      id="hero-img" 
      src="../assets/img/hero-bg2.jpg" 
      alt="" 
      style="
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
        position: absolute; 
        transition: opacity 1s ease-in-out; 
        opacity: 1;
      "
    >
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">Welcome to UrbanNest</h2>
          <p data-aos="fade-up" data-aos-delay="200">Rent Easy, Live Happy.</p>
        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="location-form">
              <input type="text" name="location" placeholder="Search by location">
              <input type="submit" value="Search">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    const images = [
      '../assets/img/hero-bg1.jpg',
      '../assets/img/hero-bg2.jpg',
      '../assets/img/hero-bg3.jpg'
    ];

    let currentImageIndex = 0;

    function changeHeroImage() {
      const heroImg = document.getElementById('hero-img');
      heroImg.style.opacity = 0;
      setTimeout(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        heroImg.src = images[currentImageIndex];
        heroImg.style.opacity = 1;
      }, 600);
    }

    // Change the image every 5 secods
    setInterval(changeHeroImage, 5000);
  </script><!-- Hero Section -->

  <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Posts</h2>
      <p>Discover Your Perfect Rental Home with Our Curated Selection of Recent Posts Tailored to Suit Your Style, Needs, and Budget!</p>
      <a class="btn custom-btn my-3" href="#">All</a>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-3">

        <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
          <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-xl-4 col-md-6 p-3" data-aos="fade-up" data-aos-delay="100">
                  <article>
                    <div class="post-img">
                      <img src="../assets/img/blog/blog-1.jpeg" alt="" class="img-fluid w-100">
                    </div>
                    <h2 class="title">
                      <div>
                        <a href="blog-details.html">4BHK</a>
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </h2>
                    <p class="post-category">&#x20B9;43,00,000 (2140 Sqft)</p>
                    <p class="post-category">Bani Bihar, Bhubaneswar</p>
                    <a class="btn custom-btn" href="#">View Details</a>
                  </article>
                </div>
                <!-- End post list item -->
                
                <!-- Second post item -->
                <div class="col-xl-4 col-md-6 p-3" data-aos="fade-up" data-aos-delay="100">
                  <article>
                    <div class="post-img">
                      <img src="../assets/img/blog/blog-2.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <h2 class="title">
                      <div>
                        <a href="blog-details.html">2BHK</a>
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </h2>
                    <p class="post-category">&#x20B9;20,00,000 (1480 Sqft)</p>
                    <p class="post-category">Badambadi, Cuttack</p>
                    <a class="btn custom-btn" href="#">View Details</a>
                  </article>
                </div>
                <!-- End post list item -->
                <!-- Third post item -->
                <div class="col-xl-4 col-md-6 p-3" data-aos="fade-up" data-aos-delay="100">
                  <article>
                    <div class="post-img">
                      <img src="../assets/img/blog/blog-2.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <h2 class="title">
                      <div>
                        <a href="blog-details.html">2BHK</a>
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </h2>
                    <p class="post-category">&#x20B9;20,00,000 (1480 Sqft)</p>
                    <p class="post-category">Badambadi, Cuttack</p>
                    <a class="btn custom-btn" href="#">View Details</a>
                  </article>
                </div>
                <!-- End post list item -->
              </div>
            </div>
            <!-- Second slide -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-xl-4 col-md-6 p-3" data-aos="fade-up" data-aos-delay="100">
                  <article>
                    <div class="post-img">
                      <img src="../assets/img/blog/blog-3.jpeg" alt="" class="img-fluid w-100">
                    </div>
                    <h2 class="title">
                      <div>
                        <a href="blog-details.html">7BHK</a>
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </h2>
                    <p class="post-category">&#x20B9;6,00,000 (5200 Sqft)</p>
                    <p class="post-category">Jatni, Khorda</p>
                    <a class="btn custom-btn" href="#">View Details</a>
                  </article>
                </div>
                <!-- End post list item -->
              </div>
            </div>
          </div>
        </div>
        
      </div><!-- End recent posts list -->

    </div>

  </section><!-- /Recent Posts Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Contact Us for Queries, Property Details, or Assistance with Your Ideal House Rental</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Silicon Hills, BBSR</p>
                <p>India, 751024</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+91 12345 06789</p>
                <p>+91 45126 46720</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@urbannest.com</p>
                <p>contact@urbannest.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>10:00AM - 06:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
          <form action="contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </div>

  </section><!-- /Contact Section -->

</main>

<!-- Footer -->
<?php require_once "footer.php"?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<!-- <div id="preloader"></div> -->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></scrip>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/glightbox.min.js"></script>
<script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../js/main.js"></script>
