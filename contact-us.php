<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us - Aladdin 4Tech</title>

  <?php
  require_once 'inc/header.php'
  ?>


</head>
<body>

<!-- Header -->
<?php
require_once 'inc/menu.php'
?>

<!-- Banner -->
<section class="page-banner">
    <div class="container">
        <div class="breadcrumb">Home Page</div>
        <h1 class="page-title">Contact Us</h1>
    </div>
</section>

<!-- Contact -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            <!-- Left -->
            <div class="contact-info">
                <div class="info-block">
                    <h3>Get in <span>Touch</span></h3>
                    <p>If you have any questions regarding our services, please feel free to reach out to us via email.</p>
                    <p>Our team is always ready to assist you, and we look forward to hearing from you.</p>
                </div>

                <div class="info-block">
                    <h3>Our <span>Office</span></h3>
                    <ul class="info-list">
                        <li>
                            <span class="icon-circle"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <span><strong>Phone :</strong> +1 (612) 707-6852</span>
                        </li>
                        <li>
                            <span class="icon-circle"><i class="fa-regular fa-envelope"></i></span>
                            <span><strong>Email :</strong> <a href="mailto:info@aladdin4tech.com">info@aladdin4tech.com</a></span>
                        </li>

                        <li>
                            <span class="icon-circle"><i class="fa-solid fa-location-dot"></i></span>
                            <span><strong>Address:</strong>
                            Aladdin4Tech  <br>
                                            5291 3RD ST NE <br>
                    FRIDLEY, MN 55421
                            </span>
                        </li>

                    </ul>
                </div>

                <div class="info-block">
                    <h3>Business <span>Hours</span></h3>
                    <ul class="info-list">
                        <li>
                            <i class="fa-regular fa-clock" style="color:#444;"></i>
                            <span>Monday - Friday - 9am to 5pm</span>
                        </li>
                        <li>
                            <i class="fa-regular fa-clock" style="color:#444;"></i>
                            <span>Saturday - 9am to 2pm</span>
                        </li>
                        <li>
                            <i class="fa-regular fa-clock" style="color:#444;"></i>
                            <span>Sunday - Closed</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right -->
            <div class="form-box">
                <h2>Contact <span>Us</span></h2>

                <form class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject"/>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message"></textarea>
                    </div>

                    <button type="submit" class="btn">SEND MESSAGE</button>
                </form>
            </div>

        </div>
    </div>
</section>
<?php
require_once 'inc/footer.php'
?>


</body>
</html>