<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CyberTech - Laboratories & Machines</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../css/header.css">
  <script src="../../js/functions.js"></script>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
      /* overflow: hidden;    */
    }

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("../../assets/images/image9.jpg");
      background-size: cover;
      background-position: center;
      filter: blur(8px);
      z-index: -1;
      transform: scale(1.1);
    }

    .machine-card {
      background-color: #30332a52;
      color: #c0c0c0ff;
    }

    .machine-card p {
      color: #c0c0c0ff;
    }
  </style>
</head>
<body>
  <?php
    include "../../html/en/header.html";
  ?>
  <div class="title-box">
    <center><h1>Machines & Laboratories</h1></center>
  </div>
  <div class="content-box">
    <div class="machine-section">
      <center><h1>Machines</h1></center><hr><br>
      <div class="machines-table">
        <!-- Machines Section -->
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
      </div>
    </div>

    <div class="laboratories">
      <br><hr><br>
      <center><h1>Laboratories</h1></center><br>
      <div class="labs-section">
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Command Injection</h3>
            <p>Point: 4<br>Level: Easy</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/ci.jpeg" alt="icon">
          </div>
        </div>

        <div class="lab-card">
          <div class="challenge-info">
            <h3>Open Redirect</h3>
            <p>Point: 15<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/redirect.jpeg" alt="icon">
          </div>
        </div>

        <div class="lab-card">
          <div class="challenge-info">
            <h3>Authentication Vulnerabilities</h3>
            <p>Point: 28<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/auth.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Server-Side Template Injection</h3>
            <p>Point: 28<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/ssti.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Server-Side Request Forgery</h3>
            <p>Point: 28<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/ssrf.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Remote Code Execution</h3>
            <p>Point: 28<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/rce.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Cross-Site Request Forgery</h3>
            <p>Point: 30<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/csrf.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Cross-Origin Resourse Sharing</h3>
            <p>Point: 15<br>Level: Easy</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/cors.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Cache Vulnerabilities</h3>
            <p>Point: 50<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/cache.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Broken Access Controls</h3>
            <p>Point: 100<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/bac.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>XML External Entity</h3>
            <p>Point: 25<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/xxe.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Cross-Site Scripting</h3>
            <p>Point: 30<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/xss.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>SQL Injection</h3>
            <p>Point: 50<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/sqli.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>Cryptography</h3>
            <p>Point: 15<br>Level: Easy</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/crypto.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>API Penetration Testing</h3>
            <p>Point: 40<br>Level: Medium</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/api.png" alt="icon">
          </div>
        </div>
        <div class="lab-card">
          <div class="challenge-info">
            <h3>OAuth Authentication Vulnerabilities</h3>
            <p>Point: 60<br>Level: Hard</p>
          </div>
          <div class="challenge-icon">
            <img src="../../assets/images/laboratories/oauth.png" alt="icon">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  </script>
</body>
</html>