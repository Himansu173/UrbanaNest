$(document).ready(function () {
    $("#contactForm").submit(function (e) {
      e.preventDefault();

      // Clear previous error/success messages
      $("#toastContainer").html("");

      // Validate the form fields
      let name = $("#username").val().trim();
      let email = $("#useremail").val().trim();
      let subject = $("#subject").val().trim();
      let message = $("#message").val().trim();

      let errors = [];

      // Name validation
      if (name === "") {
        errors.push("Please enter your name.");
      }

      // Email validation
      if (email === "") {
        errors.push("Please enter your email.");
      } else if (!validateEmail(email)) {
        errors.push("Please enter a valid email address.");
      }

      // Subject validation
      if (subject === "") {
        errors.push("Please enter a subject.");
      }

      // Message validation
      if (message === "") {
        errors.push("Please enter a message.");
      } else if(message.length < 20){
        errors.push("Message must be atleast 20 character");
      }

      if (errors.length > 0) {
        let errorStr = `<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Errors:</strong><ul>`;
        errors.forEach(function (error) {
          errorStr += `<li>${error}</li>`;
        });
        errorStr += `</ul><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
        $("#toastContainer").html(errorStr);
        return;
      }

      const formData = {
        name: name,
        email: email,
        subject: subject,
        message: message,
      };
      console.log(formData);

      $.ajax({
        url: "../../database/contact.php",
        method: "POST",
        data: formData,
        success: function (response) {
          console.log(response);
          if (response === "success") {
            let successStr = `
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Message Sent</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            `;
            $("#toastContainer").html(successStr);
          } else {
            let errorStr = `
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Something went wrong. Please try again later.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            `;
            $("#toastContainer").html(errorStr);
          }
        }
      });
    });

    function validateEmail(email) {
      const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      return re.test(email);
    }
  });