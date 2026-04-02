<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Aladdin 4Tech</title>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Cairo", sans-serif;
      background: #f3f3f3;
      color: #333;
      line-height: 1.7;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    .container {
      width: 1140px;
      max-width: calc(100% - 40px);
      margin: auto;
    }

    /* =========================
       HEADER
    ========================= */
    .top-header {
      background: #fff;
      border-top: 4px solid #000;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-height: 86px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-mark {
      width: 48px;
      height: 58px;
      position: relative;
      transform: skewX(-10deg);
    }

    .logo-mark::before,
    .logo-mark::after {
      content: "";
      position: absolute;
      background: linear-gradient(180deg, #69c3f0, #2b77b5);
      clip-path: polygon(50% 0, 100% 100%, 72% 100%, 56% 65%, 38% 65%, 54% 100%, 24% 100%);
    }

    .logo-mark::before {
      inset: 0;
    }

    .logo-mark::after {
      inset: 10px 10px 0 10px;
      opacity: 0.45;
    }

    .logo-text {
      line-height: 0.95;
      color: #1174bb;
      font-weight: 800;
      font-size: 24px;
      text-transform: uppercase;
    }

    .menu {
      display: flex;
      align-items: center;
    }

    .menu li a {
      display: block;
      padding: 30px 18px;
      color: #0b79c7;
      font-size: 15px;
      font-weight: 600;
      transition: 0.3s;
    }

    .menu li a:hover,
    .menu li a.active {
      background: #1185ca;
      color: #fff;
    }

    /* =========================
       PAGE TITLE
    ========================= */
    .page-banner {
      background: linear-gradient(90deg, #1b2027, #20262e);
      color: #fff;
      padding: 22px 0 28px;
    }

    .breadcrumb {
      color: #18a0f5;
      font-size: 14px;
      margin-bottom: 6px;
    }

    .page-title {
      font-size: 22px;
      font-weight: 700;
      display: inline-block;
      position: relative;
      padding-bottom: 12px;
    }

    .page-title::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 140px;
      height: 4px;
      background: #1695e2;
    }

    /* =========================
       CONTACT SECTION
    ========================= */
    .contact-section {
      padding: 60px 0 70px;
      background: #f3f3f3;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 70px;
      align-items: start;
    }

    .info-block {
      margin-bottom: 52px;
    }

    .info-block h3 {
      font-size: 20px;
      font-weight: 800;
      margin-bottom: 14px;
      color: #232323;
    }

    .info-block h3 span {
      font-weight: 700;
    }

    .info-block p {
      color: #6d6d6d;
      font-size: 16px;
      margin-bottom: 2px;
    }

    .info-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 18px;
      color: #666;
      font-size: 16px;
    }

    .icon-circle {
      width: 26px;
      height: 26px;
      min-width: 26px;
      border: 1px solid #1496e6;
      border-radius: 50%;
      color: #1496e6;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
    }

    .info-list strong {
      color: #2a2a2a;
      font-weight: 700;
    }

    .info-list a {
      color: #1496e6;
    }

    /* =========================
       FORM
    ========================= */
    .form-box h2 {
      font-size: 28px;
      font-weight: 800;
      color: #222;
      margin-bottom: 8px;
      line-height: 1.2;
    }

    .form-box h2 span {
      font-weight: 500;
    }

    .contact-form {
      margin-top: 8px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
      margin-bottom: 18px;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .contact-form label {
      display: block;
      font-size: 15px;
      color: #111;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      border: 1px solid #d8d8d8;
      background: #fff;
      padding: 12px 14px;
      font-size: 15px;
      border-radius: 3px;
      outline: none;
      transition: 0.3s;
      font-family: inherit;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #1695e2;
      box-shadow: 0 0 0 3px rgba(22, 149, 226, 0.08);
    }

    .contact-form textarea {
      min-height: 215px;
      resize: vertical;
    }

    .btn {
      display: inline-block;
      background: #1185ca;
      color: #fff;
      border: none;
      padding: 13px 26px;
      font-size: 14px;
      font-weight: 700;
      border-radius: 4px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #0c74b3;
    }

    /* =========================
       FOOTER
    ========================= */
    .footer {
      background: linear-gradient(90deg, #1b2027, #20262e);
      color: #b9b9b9;
      margin-top: 0;
    }

    .footer-top {
      padding: 55px 0 48px;
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1.2fr;
      gap: 45px;
    }

    .footer h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 800;
      margin-bottom: 18px;
    }

    .footer p {
      font-size: 15px;
      color: #8d8d8d;
    }

    .footer-about .read-more {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-top: 10px;
      color: #fff;
      font-weight: 700;
    }

    .footer-links li,
    .footer-contact li,
    .footer-hours li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 12px;
      color: #8d8d8d;
      font-size: 15px;
    }

    .footer-links i,
    .footer-contact i,
    .footer-hours i {
      color: #00a0ff;
      font-size: 13px;
      margin-top: 7px;
      min-width: 16px;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.04);
      padding: 18px 0;
    }

    .footer-bottom-wrap {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #666;
      font-size: 14px;
    }

    .footer-bottom-wrap strong {
      color: #8a8a8a;
      font-weight: 700;
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 992px) {
      .navbar {
        flex-direction: column;
        padding: 15px 0;
      }

      .menu {
        flex-wrap: wrap;
        justify-content: center;
      }

      .menu li a {
        padding: 14px 12px;
      }

      .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .footer-top {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 768px) {
      .form-row {
        grid-template-columns: 1fr;
      }

      .footer-top {
        grid-template-columns: 1fr;
      }

      .footer-bottom-wrap {
        flex-direction: column;
        gap: 8px;
        text-align: center;
      }

      .page-title::after {
        width: 100px;
      }
    }

    @media (max-width: 576px) {
      .logo-text {
        font-size: 20px;
      }

      .form-box h2 {
        font-size: 24px;
      }

      .info-block h3,
      .footer h4 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

<!-- Header -->
<header class="top-header">
  <div class="container navbar">
    <div class="logo">
      <div class="logo-mark"></div>
      <div class="logo-text">
        ALADDIN<br>4TECH
      </div>
    </div>

    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Web Hosting</a></li>
      <li><a href="#">Online Store</a></li>
      <li><a href="#">Online Resume</a></li>
      <li><a href="#">Networking</a></li>
      <li><a href="#">Surveillance System</a></li>
      <li><a class="active" href="#">Contact Us</a></li>
    </ul>
  </div>
</header>

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
          <p>If you have any questions about our service please send us an email.</p>
          <p>We look forward to hearing from you</p>
        </div>

        <div class="info-block">
          <h3>Our <span>Office</span></h3>
          <ul class="info-list">
            <li>
              <span class="icon-circle"><i class="fa-solid fa-mobile-screen-button"></i></span>
              <span><strong>Phone :</strong> (909)-245-4234</span>
            </li>
            <li>
              <span class="icon-circle"><i class="fa-regular fa-envelope"></i></span>
              <span><strong>Email :</strong> <a href="mailto:info@aladdin4tech.com">info@aladdin4tech.com</a></span>
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
              <input type="text" id="name" />
            </div>

            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" />
            </div>
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" />
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

<!-- Footer -->
<footer class="footer">
  <div class="container footer-top">

    <div class="footer-about">
      <h4>About Us</h4>
      <p>
        ALADDIN HOSTING & IT SERVICES, LLC is an online company has been
        established in Minneapolis, MN. We are an international experienced
        developers, designers, network technicians and IT professional team
        who enjoy getting to understand the required task to establish it in a
        professional way. We enjoy helping our customers who are looking for
        web, networking, computer, and iPhone services.
      </p>
      <a href="#" class="read-more">Read More <i class="fa-solid fa-angles-right" style="font-size:12px;color:#00a0ff;"></i></a>
    </div>

    <div class="footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><i class="fa-solid fa-caret-right"></i> Web Hosting</li>
        <li><i class="fa-solid fa-caret-right"></i> Online Store</li>
        <li><i class="fa-solid fa-caret-right"></i> Networking</li>
        <li><i class="fa-solid fa-caret-right"></i> Web Hosting</li>
        <li><i class="fa-solid fa-caret-right"></i> Surveillance System</li>
      </ul>
    </div>

    <div class="footer-links">
      <h4>Main Menu</h4>
      <ul>
        <li><i class="fa-solid fa-caret-right"></i> Home</li>
        <li><i class="fa-solid fa-caret-right"></i> About Us</li>
        <li><i class="fa-solid fa-caret-right"></i> Contact Us</li>
      </ul>
    </div>

    <div>
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <ul>
          <li><i class="fa-solid fa-mobile-screen-button"></i> (909)-245-4234</li>
          <li><i class="fa-regular fa-envelope"></i> info@aladdin4tech.com</li>
        </ul>
      </div>

      <div class="footer-hours" style="margin-top: 10px;">
        <h4>Business Hours</h4>
        <ul>
          <li><i class="fa-regular fa-clock"></i> Monday - Friday - 9am to 5pm</li>
          <li><i class="fa-regular fa-clock"></i> Saturday - 9am to 2pm</li>
          <li><i class="fa-regular fa-clock"></i> Sunday - Closed</li>
        </ul>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-wrap">
      <div>All Rights Reserved © 2004 - 2021 aladdin4tech</div>
      <div><strong>Powered By</strong> aladdin4tech</div>
    </div>
  </div>
</footer>

</body>
</html>