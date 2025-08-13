<?php
session_start();
require_once 'config.php'; 

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $login_error = "Please fill all the fields.";
    } else {
        
        $stmt = $conn->prepare("SELECT Id, Name, Password FROM patients WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $name, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
               
                $_SESSION['patient_id'] = $id;
                $_SESSION['patient_name'] = $name;
                $_SESSION['patient_email'] = $email;

                header("Location: appointment.php");
                exit;
            } else {
                $login_error = "Invalid password.";
            }
        } else {
            $login_error = "No account found with that email.";
        }
        $stmt->close();
    }
}
?>

<?php include 'header.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("loginForm").addEventListener("submit", function(e){
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value.trim();

        if (email === "" || password === "") {
            e.preventDefault();
            alert("Please fill all the fields.");
        }
    });
});
</script>

<div class="login-container" style="max-width: 400px; margin: 50px auto;">
    <h3 class="text-center mb-4">Patient Login</h3>

    <?php if ($login_error): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($login_error); ?></div>
    <?php endif; ?>

    <form id="loginForm" method="POST" action="">
        <div class="mb-3">
            <label for="email" class="form-label">Registered Email address</label>
            <input type="email" class="form-control" id="email" name="email" 
                   placeholder="Enter your email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" 
                   placeholder="********" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>