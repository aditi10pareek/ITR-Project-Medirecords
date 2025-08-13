 <!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Record System</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="top-header">
  <div>
    <i class="fas fa-phone"></i> +91 80808 68680 |
    <i class="fas fa-envelope"></i> contact@medirecords.com
  </div>
  <div class="socials">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <div class="container-fluid px-3">
    <a class="navbar-brand" href="index.php">
      <img src="logo.jpg" alt="Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About Us</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="about.php">Our Mission</a></li>
            <li><a class="dropdown-item" href="doctors.php">Our Team</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Specialities</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kidney Disease & Dialysis</a></li>
            <li><a class="dropdown-item"  href="#">Orthopedics</a></li>
            <li><a class="dropdown-item" href="#">Cardiology</a></li>
            <li><a class="dropdown-item" href="#">Dietitian</a></li>
            <li><a class="dropdown-item" href="#">Physiotherapy</a></li>
            <li><a class="dropdown-item" href="#">Test Lab</a></li>
            <li><a class="dropdown-item" href="#">Microbiology</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="doctors.php">Our Doctors</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
      </ul>

      <a class="btn custom-btn me-2" href="signUp.php">Sign Up</a>
      <a class="btn custom-btn" href="login.php">Patient Login</a>


    </div>
  </div>
</nav>
</body>
</html> 