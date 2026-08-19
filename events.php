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
    <title>Events | Dr. Manmohan Singh Bengaluru City University (BCU)</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- 1. TOP MARQUEE (Latest Events / News / Update) -->
<style>
    .marquee-bar {
        background-color: #0d47a1;
        transition: background-color 0.3s ease;
        overflow: hidden;
    }

    .marquee-bar:hover {
        background-color: #1565c0;
    }

    .marquee-content {
        display: inline-block;
        white-space: nowrap;
        padding-left: 100%;
        animation: marquee-scroll 20s linear infinite;
    }

    /* Pause scrolling when mouse is over the bar */
    .marquee-bar:hover .marquee-content {
        animation-play-state: paused;
    }

    /* The actual text — inline so highlight hugs the words, not the whole strip */
    .marquee-content span.text-inner {
        display: inline;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .marquee-bar:hover .marquee-content span.text-inner,
    .marquee-bar:hover .badge {
        background-color: orange;
        color: #000;
        text-decoration: underline;
        text-underline-offset: 6px;
        text-decoration-thickness: 2px;
        border-radius: 3px;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }

    @keyframes marquee-scroll {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }
</style>

<a href="signup.php" class="marquee-bar text-white py-1 text-decoration-none d-block">
    <div class="container-fluid d-flex align-items-center">
        <span class="badge bg-warning text-dark me-2 fw-bold px-2 py-1">UPDATES</span>
        <div class="overflow-hidden flex-grow-1">
            <div class="marquee-content small fw-semibold text-white">
                <span class="text-inner">🎓 Admissions Open for 2026-27  |  📢 Annual Convocation Ceremony Date Announced   |   📝 Odd Semester Examination Timetable Released | 🏆 BCU Ranked Among Top State Universities</span>
            </div>
        </div>
    </div>
</a>

<!-- 2. HEADER (Logo, BCU Name, Login & Sign Up) -->
<header class="py-3 bg-white border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo + BCU Name -->
        <a href="index.php" class="d-flex align-items-center text-decoration-none">
            <div class="bcu-logo-box me-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2YQ2Ypq0qxAO3DcosgHTwuVdWu8S0BNJ_CCj8Y2fjJg&s=10" alt="Bengaluru City University Logo" class="bcu-logo-img" style="height: 60px; width: auto;">
            </div>
            <div>
                <h1 class="h4 mb-0 fw-bold text-navy">KARNATAKA ASSOCIATION OF COMPUTER SCIENCE EDUCATORS</h1>
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
            <?php endif; ?>
        </div>
    </div>
</header>

<!-- 3. NAVIGATION BAR -->
<nav class="navbar navbar-expand-lg bg-navy">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="about.php">ABOUT</a></li>
                 <li class="nav-item"><a class="nav-link text-white" href="services.php">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link text-white active fw-bold" href="events.php">EVENTS</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- 4. PAGE BANNER -->
<div class="about-banner position-relative text-center text-white">
    <div class="about-banner-images d-flex">
        <div class="about-banner-img" style="background-image: url('images/campus-building.png');"></div>
        <div class="about-banner-img" style="background-image: url('images/campus-clocktower.png');"></div>
    </div>
    <div class="about-banner-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
      
                </ol>
            </nav>
        </div>
    </div>
</div>

<?php
// Sample event data — replace with database records
$upcomingEvents = [
    [
        'title' => 'Annual Convocation Ceremony',
        'date'  => '15',
        'month' => 'AUG',
        'time'  => '10:00 AM',
        'venue' => 'BCU Main Auditorium',
        'desc'  => 'Graduating students will be conferred their degrees at the university\'s annual convocation ceremony.',
        'category' => 'Convocation'
    ],
    [
        'title' => 'National Conference on AI in Education',
        'date'  => '02',
        'month' => 'SEP',
        'time'  => '9:30 AM',
        'venue' => 'Seminar Hall, CS Block',
        'desc'  => 'A two-day conference exploring the role of artificial intelligence in transforming classroom teaching.',
        'category' => 'Conference'
    ],
    [
        'title' => 'Faculty Development Program – Python for Educators',
        'date'  => '20',
        'month' => 'SEP',
        'time'  => '11:00 AM',
        'venue' => 'Computer Lab 3',
        'desc'  => 'A hands-on workshop for computer science faculty to strengthen their Python teaching skills.',
        'category' => 'Workshop'
    ],
    [
        'title' => 'Inter-College Coding Championship',
        'date'  => '05',
        'month' => 'OCT',
        'time'  => '9:00 AM',
        'venue' => 'BCU Sports Complex',
        'desc'  => 'Students from affiliated colleges compete in a day-long competitive programming championship.',
        'category' => 'Competition'
    ],
];

$pastEvents = [
    ['title' => 'Orientation Program for First-Year Students', 'date' => 'July 12, 2026'],
    ['title' => 'Workshop on Cyber Security Fundamentals', 'date' => 'June 28, 2026'],
    ['title' => 'Alumni Meet 2026', 'date' => 'May 18, 2026'],
    ['title' => 'Guest Lecture on Cloud Computing', 'date' => 'April 30, 2026'],
];
?>

<!-- 5. EVENT CATEGORY FILTER -->
<section class="py-4 bg-light border-bottom">
    <div class="container d-flex flex-wrap gap-2 justify-content-center">
        <button class="btn btn-navy btn-sm px-3">All Events</button>
        <button class="btn btn-outline-navy btn-sm px-3">Conference</button>
        <button class="btn btn-outline-navy btn-sm px-3">Workshop</button>
        <button class="btn btn-outline-navy btn-sm px-3">Competition</button>
        <button class="btn btn-outline-navy btn-sm px-3">Convocation</button>
    </div>
</section>

<!-- 6. UPCOMING EVENTS -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-navy">Upcoming Events</h3>
            <p class="text-muted">Stay updated with the latest happenings at BCU</p>
        </div>

        <div class="row g-4">
            <?php foreach ($upcomingEvents as $event): ?>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm event-card">
                    <div class="event-date-badge bg-navy text-white text-center p-2">
                        <div class="h4 fw-bold mb-0"><?php echo htmlspecialchars($event['date']); ?></div>
                        <small><?php echo htmlspecialchars($event['month']); ?></small>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-gold-dark text-white mb-2"><?php echo htmlspecialchars($event['category']); ?></span>
                        <h5 class="fw-bold text-navy"><?php echo htmlspecialchars($event['title']); ?></h5>
                        <p class="text-muted small mb-2">
                            <i class="fa-regular fa-clock me-1"></i><?php echo htmlspecialchars($event['time']); ?><br>
                            <i class="fa-solid fa-location-dot me-1"></i><?php echo htmlspecialchars($event['venue']); ?>
                        </p>
                        <p class="text-muted small"><?php echo htmlspecialchars($event['desc']); ?></p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="event-details.php" class="btn btn-outline-navy btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Floating Vertical Social Media Bar (Matches Sketch) -->
    <div class="side-social-bar d-flex flex-column gap-2 shadow-sm">
    <a href="https://wa.me/919876543210?text=Hello" target="_blank" rel="noopener noreferrer" class="social-icon whatsapp" title="WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <a href="https://facebook.com/yourpagename" target="_blank" rel="noopener noreferrer" class="social-icon facebook" title="Facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a href="https://www.linkedin.com/school/vijaya-teachers-college-11th-main-iv-block-jayanagar-bangalore-11-pa-up-2012-13-for-b.ed-/" target="_blank" rel="noopener noreferrer" class="social-icon linkedin" title="LinkedIn">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <a href="https://youtu.be/U1FPwZBpg-k?si=C3Qz6BFlNBooxbx_" target="_blank" rel="noopener noreferrer" class="social-icon youtube" title="YouTube">
        <i class="fa-brands fa-youtube"></i>
    </a>
</div>

<!-- 7. PAST EVENTS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-navy">Past Events</h3>
            <p class="text-muted">A look back at our recent activities</p>
        </div>

        <div class="list-group shadow-sm">
            <?php foreach ($pastEvents as $event): ?>
            <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                <div>
                    <i class="fa-solid fa-circle-check text-navy me-2"></i>
                    <span class="fw-semibold text-navy"><?php echo htmlspecialchars($event['title']); ?></span>
                </div>
                <small class="text-muted"><?php echo htmlspecialchars($event['date']); ?></small>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 8. FOOTER -->
<footer class="bg-navy text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            <!-- Left Box: Logo, Name & Information -->
            <div class="col-md-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="bcu-logo-box bg-white text-navy me-2" style="width: 35px; height: 35px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2YQ2Ypq0qxAO3DcosgHTwuVdWu8S0BNJ_CCj8Y2fjJg&s=10" alt="Bengaluru City University Logo" class="bcu-logo-img" style="height: 40px; width: auto;">
                    </div>
                    <h5 class="mb-0 fw-bold">KARNATAKA ASSOCIATION OF COMPUTER SCIENCE EDUCATORS</h5>
                </div>
                <p class="small text-light opacity-75">
                    Dr. Manmohan Singh Bengaluru City University is dedicated to academic excellence, higher research, and holistic student development in Bengaluru.
             </p>
    <p class="small mb-1">
        <i class="fa-solid fa-phone me-2 text-gold"></i>
        <a href="tel:+910802131313" class="text-decoration-none text-reset">+91 080-22131313</a>
    </p>
    <p class="small">
        <i class="fa-solid fa-envelope me-2 text-gold"></i>
        <a href="mailto:info@bcu.ac.in" class="text-decoration-none text-reset">info@bcu.ac.in</a>
    </p>
</div>
            <!-- Middle Box: Quick Links -->
            <div class="col-md-3">
                <h5 class="fw-bold mb-3 border-bottom pb-2">Quick Links</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none"><i class="fa-solid fa-chevron-right me-1 text-gold"></i> Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-white text-decoration-none"><i class="fa-solid fa-chevron-right me-1 text-gold"></i> About Us</a></li>
                    <li class="mb-2"><a href="services.php" class="text-white text-decoration-none"><i class="fa-solid fa-chevron-right me-1 text-gold"></i> Services</a></li>
                    <li class="mb-2"><a href="events.php" class="text-white text-decoration-none"><i class="fa-solid fa-chevron-right me-1 text-gold"></i> Events</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none"><i class="fa-solid fa-chevron-right me-1 text-gold"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Right Box: Location Google Map & Address (Matches Sketch) -->
            <div class="col-md-5">
               <h5 class="fw-bold mb-2">Location</h5>
<a href="https://www.google.com/maps/search/?api=1&query=Central+College+Campus+Dr+Ambedkar+Veedhi+Bengaluru+560001+Karnataka+India" target="_blank" class="text-white text-decoration-none">
    <p class="small mb-2">
        <i class="fa-solid fa-location-dot me-2 text-gold"></i> Central College Campus, Dr. Ambedkar Veedhi, Bengaluru - 560001, Karnataka, India
    </p>
</a>
<a href="https://www.google.com/maps/search/?api=1&query=Central+College+Campus+Dr+Ambedkar+Veedhi+Bengaluru+560001+Karnataka+India" target="_blank">
    <div class="map-container rounded overflow-hidden shadow-sm" style="height: 160px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.971168019725!2d77.58334417507647!3d12.97305928734241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16723223126f%3A0xf6b927e163c2be43!2sBengaluru%20City%20University!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" height="100%" style="border:0; pointer-events: none;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</a>

        <hr class="border-secondary my-4">
        <div class="text-center small opacity-75">
            &copy; <?php echo date("Y"); ?> Dr. Manmohan Singh Bengaluru City University. All Rights Reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>