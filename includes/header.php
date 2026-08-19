<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Manmohan Singh Bengaluru City University (BCU)</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- 1. TOP MARQUEE (Latest Events / News / Update) -->
<div class="marquee-bar text-white py-1">
    <div class="container-fluid d-flex align-items-center">
        <span class="badge bg-warning text-dark me-2 fw-bold px-2 py-1">UPDATES</span>
        <div class="overflow-hidden flex-grow-1">
            <div class="marquee-content small fw-semibold">
                🎓 Admissions Open for 2026-27 | 📢 Annual Convocation Ceremony Date Announced | 📝 Odd Semester Examination Timetable Released | 🏆 BCU Ranked Among Top State Universities
            </div>
        </div>
    </div>
</div>

<!-- 2. HEADER (Logo, BCU Name, Login & Sign Up) -->
<header class="py-3 bg-white border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo + BCU Name -->
        <a href="index.php" class="d-flex align-items-center text-decoration-none">
            <div class="bcu-logo-box me-3">
                <i class="fa-solid fa-university text-navy fa-2x"></i>
            </div>
            <div>
                <h1 class="h4 mb-0 fw-bold text-navy">Bengaluru City University</h1>
                <small class="text-gold-dark fw-bold">Dr. Manmohan Singh Central College Campus</small>
            </div>
        </a>

        <!-- Auth Buttons -->
        <div class="header-auth-btns d-flex gap-2">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="align-self-center me-2 text-navy fw-bold">Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-outline-navy px-3">LOGIN</a>
                <a href="signup.php" class="btn btn-navy px-3">SIGN UP</a>
            <?php endif; ?>
        </div>
    </div>
</header>
</html>