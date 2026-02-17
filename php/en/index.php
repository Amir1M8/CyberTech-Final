<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../css/header.css">
  <script src="../../js/functions.js"></script>
  <title>CyberTech</title>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
</head>
<body>
  <!-- Header -->
  <div class="image-wrapper">
    <img src="../../assets/images/image2.jpg" alt="Background" />
    <div class="intro">
      <h1>CyberTech Website</h1>
      <p>This website is built to introduce tools and fields within cybersecurity and penetration testing<br> It also includes a lab environment for practicing ethical hacking and security hardening</p>
    </div>
  </div>

  <?php
    session_start();
    include "../../html/en/header.php";
  ?>

  <!-- Cards -->
  <div class="section">
    <a href="./fields.php" class="card">
      <h2>Cybersecurity Fields</h2>
      <p>Explore various areas within cybersecurity including ethical hacking, network security, and more.</p>
    </a>
    <a href="#" class="card">
      <h2>Security Tools</h2>
      <p>Discover essential tools for penetration testing, vulnerability scanning, and defensive research.</p>
    </a>
  </div>

  <!-- Machines and Labratory -->
  <div class="lab-section" id="machines">
    <h2>Labs & Virtual Machines</h2>
    <p>Our lab section provides virtual environments and machines for safe and legal testing, training, and experimentation in cybersecurity.</p>
    
    <!-- Machines Section -->
    <br><br>
    <div class="machines-section">
      <?php
        $cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
        $database_data = mysqli_query($cybertech_db, "SELECT * FROM `machines_db`");
        $result = mysqli_fetch_array($database_data);

        while($result){
          ?>
          <a href="<?php echo $result["url"];?>" class="machine-card">
            <img src="<?php echo $result["image"];?>">
            <h3><?php echo $result["machine_name"];?></h3>
            <hr>
            <p style="text-align: justify;"><b>Description:</b> <?php echo $result["description"];?></p>
            <p style="text-align: left;"><b>Focus</b>: <?php echo $result["fields"];?></p>
            <p style="text-align: left;"><b>Level</b>: <?php echo $result["level"];?></p>
          </a>
          <?php
          $result = mysqli_fetch_array($database_data);
      }
      ?>
      <button onclick='redirect("./laboratories.php")'>More</button>
    </div>
  </div>
  
  <!-- Footer -->
  <?php
    include "../../html/en/footer.html"
  ?>

</body>
</html>
