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
    session_start();
    include "../../html/fa/header.php"
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
            <p style="text-align: justify;"><b>توضیحات:</b> <?php echo $result["description"];?></p>
            <p style="text-align: right;"><b>حوزه</b>: <?php echo $result["fields"];?></p>
            <p style="text-align: right;"><b>سطح</b>: <?php echo $result["level"];?></p>
          </a>
          <?php
          $result = mysqli_fetch_array($database_data);
      }
      ?>
      <button onclick='redirect("./laboratories.php")'>بیشتر</button>
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
