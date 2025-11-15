<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../css/header.css">
  <title>CyberTech</title>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
  <script src="../js/functions.js"></script>
</head>
<body>
  <!-- Header -->
  <div class="image-wrapper">
    <img src="../../assets/images/image2.jpg" alt="Background" />
    <div class="intro">
      <h1>آکادمی تکنوژی های سایبری</h1>
      <p>این آکادمی جهت معرفی شاخه های مختلف امنیت سایبری و معرفی ابزار های آن به وجود آمده<br> همچنین این آکادمی در اختیار کاربران ماشین ها و آزمایشگاه های مختلفی برای تست امنیت و تمرین قرار میدهد</p>
    </div>
  </div>
  
  <?php
    include "../../html/fa/header.html"
  ?>

  <!-- Cards -->
  <div class="section">
    <a href="#" class="card">
      <h2>شاخه های امنیت سایبری</h2>
      <p>امنیت سایبری دارای شاخه های مختلفی از جملهامنیت شبکه، شبکه، امنیت وب سایت ها و موارد بیشتر هست...</p>
    </a>
    <a href="#" class="card">
      <h2>ابزار های امنیت سایبری</h2>
      <p>برای مشاهده ابزار های مختلف امنیت سایبری از جمله ابزار های اسکن و شناخت آسیب پدیری کلیک کنید.</p>
    </a>
  </div>

  <!-- Machines and Labratory -->
  <div class="lab-section" id="machines">
    <h2>آزمایشگاه ها و ماشین ها</h2>
    <p>در این بخش از سایت ما شما میتونید با استفاده از ماشین ها و آزمایشگاه های ما تمرین کنید و خود را به چالش بکشید.</p>

    <!-- Machines Section -->
    <br><br>
    <div class="machines-section">
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/medusa.jpg">
        <h3>Medusa Machine</h3>
        <hr>
        <p style="text-align: justify;"><b>Description:</b> A challenge-focused machine targeting web application and authentication weaknesses — practice brute-force scenarios, session management flaws, and misconfigured auth. Great for learning how to detect insecure login patterns.</p>
        <p style="text-align: left;"><b>Focus</b>: Authentication, Session Management</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/cerberus.jpg">
        <h3>Cerberus Box</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: Simulates a multi-service server where port discovery, service fingerprinting, and misconfigured services are the main challenges. Ideal for network scanning and hardening practice.</p>
        <p style="text-align: left;"><b>Focus</b>: Network, Services, Misconfiguration</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate–Advanced</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/EchoVault.png">
        <h3>EchoVault</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A web app with improper data handling and multiple reflected/stored input points — designed to practice input validation and safe testing of XSS/CSRF scenarios.</p>
        <p style="text-align: left;"><b>Focus</b>: Web App, XSS, CSRF, Input Validation</p>
        <p style="text-align: left;"><b>Level</b>: Beginner–Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/cerberus.jpg">
        <h3>BlackMirror</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: An internal administration system with complex access controls and information disclosure issues. Emphasizes privilege escalation and in-depth access auditing.</p>
        <p style="text-align: left;"><b>Focus</b>: Access Control, Information Disclosure, Privilege Escalation</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate–Advanced</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/medusa.jpg">
        <h3>Fission Lab</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A machine for binary analysis and exploit development practice (includes challenges like hardened buffer overflows). Built for those starting with reverse engineering and safe exploitation techniques.</p>
        <p style="text-align: left;"><b>Focus</b>: Binary Analysis, RE, Memory Exploitation</p>
        <p style="text-align: left;"><b>Level</b>: Advanced (intro to RE)</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/EchoVault.png">
        <h3>ShadowRouter</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: Emulates a small router/firewall with flawed rules and misconfigured NAT/ACLs — a chance to learn about network misconfigs and traffic sniffing in an isolated environment.</p>
        <p style="text-align: left;"><b>Focus</b>: Networking, Firewall, Router Configuration</p>
        <p style="text-align: left;"><b>Level</b>: Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/medusa.jpg">
        <h3>PhantomDB</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A test database containing examples of complex SQL injection and faulty transaction handling; focuses on identifying injection types and mitigation strategies.</p>
        <p style="text-align: left;"><b>Focus</b>: Databases, SQLi, Transaction Safety</p>
        <p style="text-align: left;"><b>Level</b>: Beginner–Intermediate</p>
      </a>
      <a href="#" class="machine-card">
        <img src="../../assets/images/machines/cerberus.jpg">
        <h3>Nebula Honeypot</h3>
        <hr>
        <p style="text-align: justify;"><b>Description</b>: A controlled machine for capturing malicious behavior; ideal for log analysis, attacker behavior profiling, and building IDS/IPS scenarios.</p>
        <p style="text-align: left;"><b>Focus</b>: Intrusion Detection, Log Analysis, Honeypot</p>
        <p style="text-align: left;"><b>Level</b>: All levels (analysis-focused)</p>
      </a>
      <!-- <button>More</button> -->
    </div>
  </div>
  
  
  <!-- Footer -->
  <?php
    include "../../html/fa/footer.html"
  ?>

  <script>
    document.body.style = "direction: rtl;margin: 0;font-family: 'Vazirmatn', sans-serif;";
    document.getElementsByTagName("ul")[0].style = "direction: rtl;margin: 0;font-family: 'Vazirmatn', sans-serif;";
  </script>
</body>
</html>
