<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg bg-navy sticky-top">
    <div class="container">
        <button class="navbar-toggler text-white border-light ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#bcuNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="bcuNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="services.php">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'events.php') ? 'active' : ''; ?>" href="events.php">EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>