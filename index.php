<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Christine | Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #343a40;
    }

    .navbar,
    footer {
      background-color: #fff !important;
      box-shadow: none;
    }

    .navbar .container,
    .navbar .navbar-brand,
    .navbar .nav-link {
      background: none;
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: #343a40 !important;
    }

    .navbar {
      position: sticky;
      top: 0;
      z-index: 9999;
      transition: background-color 0.3s ease;
    }

    .navbar .nav-link {
      color: #343a40 !important;
      transition: color 0.3s ease;
    }

    .navbar .nav-link.active,
    .navbar .nav-link:hover {
      text-decoration: underline;
      color: #6c757d !important;
    }

    .hero {
      background: #f1f3f5;
      color: #343a40;
      padding: 80px 0;
      text-align: center;
    }

    section {
      background-color: #ffffff;
      padding: 60px 0;
      color: #343a40;
    }

    .card-custom {
      border: none;
      border-radius: 20px;
      background-color: #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: 0.3s ease;
    }

    .card-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .card-body {
      flex-grow: 1;
      padding-bottom: 20px;
    }

    h2.section-title {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
    }

    .btn-social {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background-color: #e9ecef;
      color: #343a40;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      margin: 10px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn-social:hover {
      background-color: #dee2e6;
      color: #343a40;
    }

    footer {
      color: #6c757d;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">MY PORTFOLIO</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container">
    <h1>Hello, I'm Christine</h1>
    <p class="lead">Social Media Manager | Copywriter | Virtual Assistant</p>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="container">
    <h2 class="section-title">About Me</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-custom p-4">
          <p>
            Hey there! I'm Christine 👋<br><br>
            I’m passionate about crafting stories that connect, visuals that pop, and strategies that make people stop scrolling. Whether it's editing short-form videos, whipping up clever captions, designing eye-catching graphics, or planning out an entire content calendar—I’m in my element.<br><br>
            My journey into social media started with a simple love for storytelling. From there, I dove into video editing, discovered the magic of copywriting, and picked up graphic design skills along the way. Now, I’m on a mission to turn creativity into impact—one post at a time.<br><br>
            Let’s create something scroll-worthy. ✨
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="section-title">Contact Me</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-custom p-4 text-center">
          <h4>Let's Connect!</h4>
          <div class="social-links mt-4">
            <a href="https://www.facebook.com/CLXSUPREMO" target="_blank" class="btn btn-social">
              <img src="facebook.png" alt="Facebook" width="30" height="30"> Facebook
            </a>
            <a href="https://www.instagram.com/_xsupremo/" target="_blank" class="btn btn-social">
              <img src="instagram.png" alt="Instagram" width="30" height="30"> Instagram
            </a>
            <a href="https://t.me/joshdevp" target="_blank" class="btn btn-social">
              <img src="telegram.png" alt="Telegram" width="30" height="30"> Telegram
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; <?= date('Y') ?> Christine. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
