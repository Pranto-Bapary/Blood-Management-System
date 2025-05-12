<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Management System | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url("./hero.jpg") no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      margin: 0;
    }

    .navbar {
      background-color: rgba(139, 0, 0, 0.1);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .navbar a i {
      color: #c1121f !important;
    }

    .navbar span {
      text-shadow: 1px 3px 1px #c1121f !important;
    }

    .hero {
      padding: 120px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.25rem;
      margin-top: 15px;
    }

    .btn-donate {
      background-color: #c1121f;
      color: #fff;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
    }

    .btn-donate:hover {
      background-color: #a10e1a;
      transform: scale(1.05);
    }

    .section {
      padding: 80px 0;
      background-color: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(5px);
    }

    .icon-box {
      padding: 30px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.1);
      transition: transform 0.3s, background 0.3s;
      color: #fff;
    }

    .icon-box:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.15);
    }

    .footer {
      background-color: #8b0000;
      color: #fff;
      padding: 20px 5px;
      text-align: center;
      font-size: 0.95rem;
    }

    .footer p {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="#">
        <i class="fas fa-droplet me-2 text-white"></i> <span>Blood Management System</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#how">How It Works</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="./inventory.php">Inventory</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Give Blood. Save Lives.</h1>
      <p>Your contribution can make a difference for someone in need.</p>
      <a href="#" class="btn btn-donate mt-4">Become a Donor</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section text-center">
    <div class="container">
      <h2 class="mb-5 fw-bold">Why Donate Blood?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-heartbeat fa-3x mb-3"></i>
            <h5 class="fw-semibold">Save Lives</h5>
            <p>Every donation can save up to three lives. Be a hero today.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-hand-holding-medical fa-3x mb-3"></i>
            <h5 class="fw-semibold">Community Support</h5>
            <p>Help hospitals and patients in your local area by donating regularly.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-users fa-3x mb-3"></i>
            <h5 class="fw-semibold">Make a Difference</h5>
            <p>Join our community of donors and help change lives every day.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it Works Section -->
  <section id="how" class="section text-center">
    <div class="container">
      <h2 class="mb-5 fw-bold">How It Works</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-user-check fa-3x mb-3"></i>
            <h5 class="fw-semibold">Register</h5>
            <p>Sign up and create your donor profile.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-tint fa-3x mb-3"></i>
            <h5 class="fw-semibold">Donate</h5>
            <p>Visit a nearby donation center or camp.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-handshake fa-3x mb-3"></i>
            <h5 class="fw-semibold">Impact</h5>
            <p>Help patients recover faster with your blood.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section id="contact" class="section text-center">
    <div class="container">
      <h2 class="mb-4 fw-bold">Contact Us</h2>
      <p class="mb-4">We'd love to hear from you! Whether you have a question about donations, our services, or anything else, our team is ready to answer all your questions.</p>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
            <h5 class="fw-semibold">Address</h5>
            <p>45, Green Road, Dhaka - 1204</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-phone fa-2x mb-3"></i>
            <h5 class="fw-semibold">Phone</h5>
            <p>+880 (234) 567-8901</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-envelope fa-2x mb-3"></i>
            <h5 class="fw-semibold">Email</h5>
            <p>support@bloodsystem.org</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2025 Blood Management System. All rights reserved. | Made with <i class="fas fa-heart text-danger"></i> by Pranto</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>