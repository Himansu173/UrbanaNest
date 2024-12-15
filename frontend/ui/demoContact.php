<form id="contactForm" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
  <div class="row gy-4">
    <div class="col-md-6">
      <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="col-md-6">
      <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="col-12">
      <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
    </div>
    <div class="col-12">
      <textarea id="message" name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn custom-btn">Send Message</button>
    </div>
  </div>
</form>

<div id="toastContainer"></div> <!-- Container for toasts -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $("#contactForm").on("submit", function (e) {
      e.preventDefault(); // Prevent the default form submission

      const formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        subject: $("#subject").val(),
        message: $("#message").val(),
      };

      $.ajax({
        url: "../../database/contact.php", // Replace with your PHP file path
        method: "POST",
        data: formData,
        success: function (response) {
          $("#toastContainer").html(response); // Add the server response to the toast container
        },
        error: function () {
          $("#toastContainer").html(`
            <div class='toast align-items-center text-bg-danger border-0' role='alert' aria-live='assertive' aria-atomic='true'>
              <div class='d-flex'>
                <div class='toast-body'>An error occurred. Please try again.</div>
                <button type='button' class='btn-close btn-close-white me-2 m-auto' data-bs-dismiss='toast' aria-label='Close'></button>
              </div>
            </div>`);
        },
      });
    });
  });
</script>
