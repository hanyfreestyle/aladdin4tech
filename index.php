<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us - Aladdin 4Tech</title>

  <?php
  require_once 'inc/header.php'
  ?>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about-web-design.css">

</head>
<body>

<!-- Header -->
<?php
require_once 'inc/menu.php'
?>


<section class="hero-slider">
    <div class="slides">
        <div class="slide active">
            <img src="img/bg1-2.jpg" alt="Online Store">
        </div>
        <div class="slide active">
            <img src="img/bg2-2.jpg" alt="Online Store">
        </div>
        <div class="slide active">
            <img src="img/bg3.jpg" alt="Online Store">
        </div>
    </div>

    <button class="slider-btn prev" aria-label="Previous slide">&#10094;</button>
    <button class="slider-btn next" aria-label="Next slide">&#10095;</button>

    <div class="slider-dots">
        <button class="dot active" data-slide="0" aria-label="Go to slide 1"></button>
        <button class="dot" data-slide="1" aria-label="Go to slide 2"></button>
        <button class="dot" data-slide="2" aria-label="Go to slide 3"></button>
    </div>
</section>

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <span class="hero-badge">Secure Private Connection</span>
            <h1>Fast, Reliable, and Secure VPN Services</h1>
            <p>
                Protect your privacy, secure your internet traffic, and enjoy a safer
                browsing experience with our professional VPN solutions for personal
                and business use.
            </p>
            <!--            <div class="hero-buttons">-->
            <!--                <a href="#" class="btn btn-primary">Get Started</a>-->
            <!--                <a href="#" class="btn btn-outline">View Plans</a>-->
            <!--            </div>-->
        </div>

        <div class="hero-card">
            <div class="hero-card-top"></div>
            <div class="hero-card-body">
                <div class="shield-circle">VPN</div>
                <div class="hero-lines">
                    <div class="line w-100"></div>
                    <div class="line w-75"></div>
                    <div class="line w-90"></div>
                    <div class="line w-60"></div>
                </div>

                <div class="mini-stats">
                    <div class="mini-box">
                        <h3>256-Bit</h3>
                        <p>Encryption</p>
                    </div>
                    <div class="mini-box">
                        <h3>99.9%</h3>
                        <p>Uptime</p>
                    </div>
                    <div class="mini-box">
                        <h3>24/7</h3>
                        <p>Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mission-vision-section section_d">
    <div class="container">
        <div class="info-cards">

            <div class="info-card">
                <div class="card-image">
                    <img src="img/about_us-2.jpg">
                </div>
                <div class="card-content">
                    <h3>OUR MISSION</h3>
                    <p>
                        Focusing on our customers needs and make it done in the best way,
                        short time, and competitive prices. We are looking for a long-term
                        business relationship with our customers to make sure that their
                        business is going great as they planned.
                    </p>
                </div>
            </div>

            <div class="info-card">
                <div class="card-image">
                    <img src="img/about_us-3.jpg">
                </div>
                <div class="card-content">
                    <h3>OUR VISION</h3>
                    <p>
                        Nothing come for free and behind every successful business there are
                        a great efforts and awesome teamwork with an excellent and updated
                        knowledge, which is required to provide the best possible service with
                        high quality at the lowest price. This is our vision and strategy to build
                        our large network of customers and gain their respect and appreciation,
                        this is our way to create the opportunities for our business.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-web-design">
    <div class="container">
        <div class="section-heading">
            <h2>Website Design Solutions</h2>
            <p>
                A professional website is one of the most important tools for any
                business. It helps you present your services, connect with customers,
                and build a strong digital presence.
            </p>
        </div>

        <div class="about-grid">
            <div class="about-box">
                <h3>Creative Design</h3>
                <p>
                    We design clean and modern layouts that reflect your brand identity
                    and create a strong first impression for your visitors.
                </p>
            </div>

            <div class="about-box">
                <h3>Responsive Layout</h3>
                <p>
                    Your website will look great and work perfectly on desktop, tablet,
                    and mobile devices for the best user experience.
                </p>
            </div>

            <div class="about-box">
                <h3>Business Focused</h3>
                <p>
                    We build websites that are not only beautiful, but also structured
                    to support your business goals and increase conversions.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'inc/cta.php';
require_once 'inc/footer.php'

?>

<script>
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let currentSlide = 0;
    let autoPlay;

    function showSlide(index) {
        if (index >= slides.length) currentSlide = 0;
        else if (index < 0) currentSlide = slides.length - 1;
        else currentSlide = index;

        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === currentSlide);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === currentSlide);
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startAutoPlay() {
        autoPlay = setInterval(() => {
            nextSlide();
        }, 4000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlay);
        startAutoPlay();
    }

    nextBtn.addEventListener("click", () => {
        nextSlide();
        resetAutoPlay();
    });

    prevBtn.addEventListener("click", () => {
        prevSlide();
        resetAutoPlay();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
            resetAutoPlay();
        });
    });

    showSlide(currentSlide);
    startAutoPlay();
</script>


</body>
</html>