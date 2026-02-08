<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/about.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../css/header.css">
  <script src="../../js/functions.js"></script>
  <title>CyberTech - About</title>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
</head>
<body>
  <!-- Header -->
  <div class="image-wrapper">
    <img src="../../assets/images/image7.jpg" alt="Background" />
    <div class="intro">
      <h1>About Developer</h1>
      <p>We are the CyberTech programming team, managed by the group's senior leader. <br>With 5 years of experience, we are skilled in cybersecurity, web development, application development, as well as backend and frontend technologies.</p>
    </div>
  </div>

  <?php
    session_start();
    include "../../html/en/header.php"
  ?>
  
  <!-- Cards -->
  <div class="section">
    <span class="card">
      <h2>About CyberTech</h2>
      <p>Discover essential tools for penetration testing, vulnerability scanning, and defensive research.</p>
    </span>
  </div>

  <!-- Footer -->
  <?php
    include "../../html/en/footer.html"
  ?>
</body>
</html>
