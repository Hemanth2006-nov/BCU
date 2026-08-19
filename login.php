<?php 
session_start();

// Handle login BEFORE including any files that produce output
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['login_username'] ?? '');
    if (!empty($username)) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    }
}

include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-navy text-white text-center py-3">
                    <h4 class="mb-0 fw-bold">SIGN IN</h4>
                </div>
                <div class="card-body p-4">
                    <form action="login.php" method="POST" autocomplete="off">

                        <!-- Decoy fields: absorb Chrome's autofill so it leaves the real fields alone -->
                        <input type="text" name="fake_username" style="display:none" tabindex="-1" autocomplete="off">
                        <input type="password" name="fake_password" style="display:none" tabindex="-1" autocomplete="off">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Username :</label>
                            <input type="text" name="login_username" class="form-control"
                                   autocomplete="off" readonly
                                   onfocus="this.removeAttribute('readonly');"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password :</label>
                            <input type="password" name="login_password" class="form-control"
                                   autocomplete="new-password" readonly
                                   onfocus="this.removeAttribute('readonly');"
                                   required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-navy w-100 py-2 fw-bold mb-3">LOGIN</button>
                        <div class="text-center mb-2">
                            <a href="#" class="text-decoration-none small text-navy">Forgot Password?</a>
                        </div>
                        <div class="text-center small">
                            New User? <a href="signup.php" class="fw-bold text-navy">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>