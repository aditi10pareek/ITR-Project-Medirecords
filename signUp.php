<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'config.php';
$signup_error = "";
$fullname = $email = $phone = $age = $gender = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname         = trim($_POST['fullname']);
    $email            = trim($_POST['email']);
    $phone            = trim($_POST['phone']);
    $age              = (int)$_POST['age'];
    $gender           = trim($_POST['gender']);
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $signup_error = "Passwords do not match!";
    } else {
        $check = $conn->prepare("SELECT Id FROM patients WHERE Email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $signup_error = "This email is already registered!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare(
                "INSERT INTO patients (Name, Age, Gender, Contact_Number, Email, Password) VALUES (?, ?, ?, ?, ?, ?)"
            );
            $stmt->bind_param("sissss", $fullname, $age, $gender, $phone, $email, $hashed_password);

            if ($stmt->execute()) {
               
               header("Location: index.php");
                exit;
            } else {
                $signup_error = "Database error: " . $stmt->error;
            }
            $stmt->close();
        }
        $check->close();
    }
}
?>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="signup-form mx-auto" style="max-width: 500px;">
        <h3 class="form-title mb-4">Patient Sign Up</h3>
        <?php if ($signup_error): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($signup_error); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" id="fullname" name="fullname" required
                    value="<?php echo htmlspecialchars($fullname); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required
                    value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="XXXXX XXXXX"required pattern="[0-9]{10}"
                    value="<?php echo htmlspecialchars($phone); ?>">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" placeholder="Enter Age" id="age" name="age" min="0" max="120" required
                    value="<?php echo htmlspecialchars($age); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender" required>
                    <option value="">--Select--</option>
                    <option value="Male" <?php if($gender=="Male") echo "selected"; ?>>Male</option>
                    <option value="Female" <?php if($gender=="Female") echo "selected"; ?>>Female</option>
                    <option value="Other" <?php if($gender=="Other") echo "selected"; ?>>Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Create Password</label>
                <input type="password" class="form-control" id="password" placeholder="********" name="password" minlength="6" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password"  placeholder="********" name="confirm_password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>