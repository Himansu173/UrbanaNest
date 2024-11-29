<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        overflow-x: hidden;
        overflow-y: hidden;
      }

      .carousel-item img {
        width: 75vw;
        height: 90vh;
        object-fit: cover;
      }

      .carousel {
        max-width: 100vw;
      }
    </style>
  </head>
  <body>
    <div
      id="carouselExampleInterval"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img
            src="https://www.nobroker.in/blog/wp-content/uploads/2024/03/best-low-budget-simple-house-design.webp"
            class="d-block w-100"
            alt="img1"
          />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="https://static.vecteezy.com/system/resources/thumbnails/023/309/311/small_2x/ai-generative-exterior-of-modern-luxury-house-with-garden-and-beautiful-sky-photo.jpg"
            class="d-block w-100"
            alt="img2"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://plus.unsplash.com/premium_photo-1661915661139-5b6a4e4a6fcc?q=80&w=1867&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="d-block w-100"
            alt="img3"
          />
        </div>
      </div>
    </div>
  </body>
</html>
