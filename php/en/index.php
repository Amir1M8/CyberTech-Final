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
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/zodd.jpeg">
        <h3>Zodd Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description:</b> A challenge-focused machine targeting web application and authentication weaknesses — practice brute-force scenarios, session management flaws, and misconfigured auth. Great for learning how to detect insecure login patterns.</p>
        <p style="text-align: left;"><b>Focus</b>: Authentication, Session Management</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/arrival.jpeg">
        <h3>Arrival Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: Simulates a multi-service server where port discovery, service fingerprinting, and misconfigured services are the main challenges. Ideal for network scanning and hardening practice.</p>
        <p style="text-align: left;"><b>Focus</b>: Network, Services, Misconfiguration</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate–Advanced</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/blackhole.jpeg">
        <h3>Escape the BlackHole</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A web app with improper data handling and multiple reflected/stored input points — designed to practice input validation and safe testing of XSS/CSRF scenarios.</p>
        <p style="text-align: left;"><b>Focus</b>: Web App, XSS, CSRF, Input Validation</p>
        <p style="text-align: left;"><b>Level</b>: Beginner–Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/matrix.jpeg">
        <h3>Escape the Matrix</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: An internal administration system with complex access controls and information disclosure issues. Emphasizes privilege escalation and in-depth access auditing.</p>
        <p style="text-align: left;"><b>Focus</b>: Access Control, Information Disclosure, Privilege Escalation</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate–Advanced</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/pgnix.jpeg">
        <h3>Pgnix Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A machine for binary analysis and exploit development practice (includes challenges like hardened buffer overflows). Built for those starting with reverse engineering and safe exploitation techniques.</p>
        <p style="text-align: left;"><b>Focus</b>: Binary Analysis, RE, Memory Exploitation</p>
        <p style="text-align: left;"><b>Level</b>: Advanced (intro to RE)</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/rAndom.jpeg">
        <h3>rAndom Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: Emulates a small router/firewall with flawed rules and misconfigured NAT/ACLs — a chance to learn about network misconfigs and traffic sniffing in an isolated environment.</p>
        <p style="text-align: left;"><b>Focus</b>: Networking, Firewall, Router Configuration</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/ReconMe.png">
        <h3>ReconMe Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A test database containing examples of complex SQL injection and faulty transaction handling; focuses on identifying injection types and mitigation strategies.</p>
        <p style="text-align: left;"><b>Focus</b>: Databases, SQLi, Transaction Safety</p>
        <p style="text-align: left;"><b>Level</b>: Beginner–Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/Zodiac.jpeg">
        <h3>Zodiac Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A controlled machine for capturing malicious behavior; ideal for log analysis, attacker behavior profiling, and building IDS/IPS scenarios.</p>
        <p style="text-align: left;"><b>Focus</b>: Intrusion Detection, Log Analysis, Honeypot</p>
        <p style="text-align: left;"><b>Level</b>: All levels (analysis-focused)</p>
      </a>
      <button onclick='redirect("./laboratories.php")'>More</button>
    </div>
  </div>
  
  <!-- Footer -->
  <?php
    include "../../html/en/footer.html"
  ?>

</body>
</html>
