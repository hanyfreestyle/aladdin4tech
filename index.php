<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us - Aladdin 4Tech</title>

  <?php
  require_once 'inc/header.php'
  ?>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .hero-slider {
        position: relative;
        width: 100%;
        height: 610px;
        overflow: hidden;
        background: #ddd;
      }

      .slides {
        position: relative;
        width: 100%;
        height: 100%;
      }

      .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.7s ease, visibility 0.7s ease;
      }

      .slide.active {
        opacity: 1;
        visibility: visible;
        z-index: 1;
      }

      .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      /* arrows */
      .slider-btn {
        position: absolute;
        top: 55%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border: none;
        background: rgba(55, 55, 55, 0.7);
        color: #fff;
        font-size: 28px;
        line-height: 1;
        border-radius: 6px;
        cursor: pointer;
        z-index: 5;
        transition: background 0.3s ease;
      }

      .slider-btn:hover {
        background: rgba(25, 25, 25, 0.9);
      }

      .slider-btn.prev {
        left: 32px;
      }

      .slider-btn.next {
        right: 32px;
      }

      /* dots */
      .slider-dots {
        position: absolute;
        left: 50%;
        bottom: 34px;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 5;
      }

      .dot {
        width: 8px;
        height: 8px;
        border: none;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.45);
        cursor: pointer;
        transition: 0.3s ease;
      }

      .dot.active {
        background: #fff;
        transform: scale(1.1);
      }

      /* optional overlay if needed */
      .hero-slider::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.03);
        pointer-events: none;
        z-index: 2;
      }

      @media (max-width: 992px) {
        .hero-slider {
          height: 500px;
        }
      }

      @media (max-width: 768px) {
        .hero-slider {
          height: 380px;
        }
        .slider-btn {
          width: 36px;
          height: 36px;
          font-size: 24px;
        }
        .slider-btn.prev {
          left: 16px;
        }
        .slider-btn.next {
          right: 16px;
        }
        .slider-dots {
          bottom: 20px;
        }
      }

      @media (max-width: 576px) {
        .hero-slider {
          height: 280px;
        }
      }
    </style>
</head>
<body>

<!-- Header -->
<?php
require_once 'inc/menu.php'
?>


<section class="hero-slider">
    <div class="slides">
        <div class="slide active">
            <img src="img/bg1.jpg" alt="Online Store">
        </div>

        <div class="slide active">
            <img src="img/bg2.jpg" alt="Online Store">
        </div>

        <!--        <div class="slide">-->
        <!--            <img src="images/slide-2.jpg" alt="Shopping Cart">-->
        <!--        </div>-->
        <!---->
        <!--        <div class="slide">-->
        <!--            <img src="images/slide-3.jpg" alt="Ecommerce Website">-->
        <!--        </div>-->
    </div>

    <button class="slider-btn prev" aria-label="Previous slide">&#10094;</button>
    <button class="slider-btn next" aria-label="Next slide">&#10095;</button>

    <div class="slider-dots">
        <button class="dot active" data-slide="0" aria-label="Go to slide 1"></button>
        <button class="dot" data-slide="1" aria-label="Go to slide 2"></button>
        <button class="dot" data-slide="2" aria-label="Go to slide 3"></button>
    </div>
</section>


<?php
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