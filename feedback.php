<?php include 'header.php'; ?>
<script>
    $(document).ready(function () {
      $('#feedbackForm').submit(function (e) {
        e.preventDefault(); 

        
        let name = $('#name').val();
        let email = $('#email').val();
        let message = $('#message').val();

        
        if (name === '' || email === '' || message === '') {
          alert('Please fill all the fields.');
          return;
        }
        
        $('#responseMessage').text('Thank you for your feedback, ' + name + '!!!').fadeIn();
        
        $('#feedbackForm')[0].reset();
        
      });
        
    });
  </script>

  <div class="feedback-title">
  <h2>Feedback Form</h2>
  </div>
  <div class="container">
    <form id="feedbackForm">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name:</label>
        <input type="text" class="form-control" id="name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Registered Email Id:</label>
        <input type="email" class="form-control" id="email" required>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Feedback:</label>
        <textarea class="form-control" id="message" rows="4" required></textarea>
      </div>

      <div id="responseMessage" class="mb-3 text-success" style="display: none;"></div>

      <div id="responseMessage" class="mb-3 text-success" style="display: none;"></div>

      <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
    </form>
  </div>
  
  <?php include 'footer.php'; ?>