<?php
require_once "navbar.php"
?>


<!-- <style>
  .order-card {
    color: #fff;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .bg-c-blue {
    background: linear-gradient(45deg, #4099ff, #73b4ff);
  }

  .bg-c-green {
    background: linear-gradient(45deg, #2ed8b6, #59e0c5);
  }

  .bg-c-yellow {
    background: linear-gradient(45deg, #ffb64d, #ffcb80);
  }

  .bg-c-pink {
    background: linear-gradient(45deg, #ff5370, #ff869a);
  }

  .card .card-block {
    padding: 25px;
  }

  .order-card i {
    font-size: 26px;
  }

  .f-left {
    float: left;
  }

  .f-right {
    float: right;
  }

  h2 {
      font-size: 24px;
  }

  @media (max-width: 576px) {
    .card .card-block {
      padding: 15px;
    }

    h2 {
      font-size: 20px;
    }

    .order-card i {
        font-size: 20px;
      }
  }
</style> -->

<style>
  .order-card {
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
    border: none;
    margin-bottom: 30px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
  }

  .order-card:hover {
    box-shadow: 0 8px 15px 0 rgba(4, 26, 55, 0.3);
    transform: scale(1.02);
  }

  .bg-c-blue {
    background: linear-gradient(45deg, #4099ff, #73b4ff);
  }

  .bg-c-green {
    background: linear-gradient(45deg, #2ed8b6, #59e0c5);
  }

  .bg-c-yellow {
    background: linear-gradient(45deg, #ffb64d, #ffcb80);
  }

  .bg-c-pink {
    background: linear-gradient(45deg, #ff5370, #ff869a);
  }

  .card .card-block {
    padding: 25px;
  }

  .order-card i {
    font-size: 26px;
  }

  .f-left {
    float: left;
  }

  .f-right {
    float: right;
  }

  h2 {
    font-size: 24px;
  }

  @media (max-width: 576px) {
    .card .card-block {
      padding: 15px;
    }

    h2 {
      font-size: 20px;
    }

    .order-card i {
      font-size: 20px;
    }
  }
  .responsive-fieldset {
    width: 100%; 
    padding: 10px 0; 
    box-sizing: border-box; 
    font-size: 30px; 
  }

  @media (max-width: 768px) {
    .responsive-fieldset {
      font-size: 22px; 
      padding: 8px; 
    }
  }

</style>


<link
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
  rel="stylesheet"
/>


<div class="container mt-5">

  <div class="row">

    <div class="col-md-4">
      <div class="card bg-c-blue order-card">
        <div class="card-block">
          <h6 class="m-b-20">Users</h6>
          <h2 class="text-right">
            <i class="bi bi-people-fill"></i>
            <span>486</span>
          </h2>
          <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card bg-c-green order-card">
        <div class="card-block">
          <h6 class="m-b-20">Properties</h6>
          <h2 class="text-right">
            <i class="bi bi-houses-fill"></i>
            <span>486</span>
          </h2>
          <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card bg-c-yellow order-card">
        <div class="card-block">
          <h6 class="m-b-20">Customer Feedbacks</h6>
          <h2 class="text-right">
            <i class="bi bi-bell-fill"></i>
            <span>486</span>
          </h2>
          <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <!-- Responsive Table Wrapper -->
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped dashboard-data">
            <fieldset class="responsive-fieldset mx-auto">Customer Feedbacks</fieldset>
            <thead class="thead-dark table-warning">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Anil</td>
                <td>anil@gmail.com</td>
                <td>abc</td>
                <td>@abc Message</td>
              </tr>
              <tr>
                <td>Anil</td>
                <td>anil@gmail.com</td>
                <td>abc</td>
                <td>@abc Message</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>


<?php
require_once "footer.php"
?>


