!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IPSR College | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navbar */
    .navbar {
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(8px);
    }
    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
      letter-spacing: 1px;
    }
    .nav-link {
      color: #f8f9fa !important;
      transition: 0.3s;
    }
    .nav-link:hover {
      color: #ffc107 !important;
    }

    /* Hero Section */
    .hero {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 100px 20px 60px;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 15px;
      letter-spacing: 1px;
    }
    .hero p {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 700px;
      margin: 0 auto 30px;
      line-height: 1.7;
    }

    .btn-custom {
      background: linear-gradient(90deg, #ff9800, #ffc107);
      color: #212121;
      font-weight: 600;
      padding: 12px 40px;
      border-radius: 30px;
      border: none;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
      display: inline-block;
    }
    .btn-custom:hover {
      background: linear-gradient(90deg, #ffc107, #ff9800);
      transform: translateY(-3px);
    }

    footer {
      text-align: center;
      padding: 15px;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(8px);
      color: rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }
      .hero p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">IPSR College</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero">
    <h1>Welcome to <span style="color:#ffc107;">IPSR College</span></h1>
    <p>
      Shaping the next generation of innovators, leaders, and professionals.<br />
      Discover excellence in education with world-class facilities and mentorship.
    </p>
    <a href="about.html" class="btn-custom">Learn More</a>
  </section>

  <!-- FOOTER -->
  <footer>
    © <?php echo date("Y"); ?> IPSR College | Powered by Red Hat OpenShift
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
