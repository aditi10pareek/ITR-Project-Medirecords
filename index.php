<?php include 'header.php'; ?>

  <div class="slider">
    <img src="slider.jpg" class="slider-img" alt="Slider Image">
  </div>

  <div class="container info-section">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="info-card emergency-card">
          <div class="info-icon"><i class="fas fa-ambulance"></i></div>
          <h5>Emergency Cases</h5>
          <p>Need urgent assistance? Our 24×7 emergency services are always ready with expert care. Call now for immediate help.</p>
          <button class="btn phone-btn info-button"><i class="fas fa-phone"></i> +91 80808 68680</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card appointment-card">
          <div class="info-icon"><i class="fas fa-user-md"></i></div>
          <h5>Doctor Appointment</h5>
          <p>Check doctors' weekly schedules. Know their availability in advance and plan your visit easily.</p>
          <a href="appointment.php" class="btn btn-primary info-button">Book Appointment</a>

        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card hours-card">
          <div class="info-icon"><i class="fas fa-clock"></i></div>
          <h5>Opening Hours</h5>
          <ul class="list-unstyled">
            <li>OPD (Mon–Sat): 10:00 – 4:00 PM</li>
            <li>Emergency: 24hr 7 days</li>
            <li>Ambulance: 24hr 7 days</li>
            <li>Radiology: 24hr 7 days</li>
            <li>Pathlab: 24hr 7 days</li>
            <li>Pharmacy: 24hr 7 days</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
<?php include 'footer.php'; ?>