<?php
include 'header.php';
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id = $_POST['Id'];
    $name = $_POST['name'];
    $Gender = $_POST['gender'];
    $Age = $_POST['age'];
    $Dob = $_POST['dob'];
    $contact_number = $_POST['contact'];
    $Email = $_POST['mail'];
    $doctors_name = $_POST['doctor'];
    $appointment_date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO appointment (Id, name, Gender, Age, Dob, contact_number, Email, doctors_name, appointment_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ississsss", $Id, $name, $Gender, $Age, $Dob, $contact_number, $Email, $doctors_name, $appointment_date);

if ($stmt->execute()) {
     echo "<script>alert('Appointment booked!'); window.location.href='index.php';</script>";
     exit; // Prevent further output
} else {
    echo "Error: " . $stmt->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-5">
  <div class="appointment-form">
    <h3 class="form-title text-center mb-4">Book Appointment</h3>
    <form action="" method="POST">

      <div class="mb-3">
        <label for="Id" class="form-label">Patient ID</label>
        <input type="number" class="form-control" id="Id" name="Id" required>
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Gender</label>
        <select class="form-select" name="gender" required>
          <option value="">--Select--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>

      <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>

      <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input type="number" class="form-control" id="contact" name="contact" required>
      </div>

      <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" required>
      </div>

      <div class="mb-3">
        <label for="doctor" class="form-label">Doctor's Name</label>
        <input type="text" class="form-control" id="doctor" name="doctor" required>
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Date of Appointment</label>
        <input type="date" class="form-control" id="date" name="date" required>
      </div>

      <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-primary">Book Appointment</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>
