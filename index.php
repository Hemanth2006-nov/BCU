<?php 
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- BANNER / SLIDESHOW WITH RIGHT SOCIAL MEDIA BAR -->
<section class="position-relative">
    
    <!-- Floating Vertical Social Media Bar (Matches Sketch) -->
    <div class="side-social-bar d-flex flex-column gap-2 shadow-sm">
        <a href="https://wa.me/" target="_blank" class="social-icon whatsapp" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://facebook.com" target="_blank" class="social-icon facebook" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://linkedin.com" target="_blank" class="social-icon linkedin" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://youtube.com" target="_blank" class="social-icon youtube" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
    </div>

    <!-- Carousel Banner -->
    <div id="bcuBanner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bcuBanner" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#bcuBanner" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active slide-1 text-white text-center py-5">
                <div class="container py-5">
                    <h2 class="display-4 fw-bold">BENGALURU CITY UNIVERSITY</h2>
                    <p class="lead">Empowering minds, shaping leaders of tomorrow.</p>
                </div>
            </div>
            <div class="carousel-item slide-2 text-white text-center py-5">
                <div class="container py-5">
                    <h2 class="display-4 fw-bold">State-of-the-Art Campus</h2>
                    <p class="lead">Multidisciplinary Excellence & Innovation</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bcuBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bcuBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- WELCOME TO OUR ORGANIZATION -->
<section class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold text-navy mb-3">WELCOME TO OUR ORGANIZATION</h2>
        <div class="bcu-divider mx-auto mb-4"></div>
        <p class="lead text-secondary mx-auto" style="max-width: 850px;">
            Dr. Manmohan Singh Bengaluru City University (BCU) is a premier state university committed to providing quality higher education, research opportunities, and innovation for students across Karnataka. Located in the heart of Bengaluru at the historical Central College Campus, BCU brings together diverse disciplines under one vibrant learning community.
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>