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
    session_start();
    include "../../html/en/header.php";
  ?>
  <div class="title-box">
    <center><h1>Machines & Laboratories</h1></center>
  </div>
  <div class="content-box">
    <div class="machine-section">
      <center><h1>Machines</h1></center><hr><br>
      <div class="machines-table">
        <!-- Machines Section -->
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
        mysqli_close($cybertech_db)
        ?>
      </div>
    </div>

    <div class="laboratories">
      <br><hr><br>
      <center><h1>Laboratories</h1></center><br>
      <div class="labs-section">
      <?php
        $cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
        $database_data = mysqli_query($cybertech_db, "SELECT * FROM `laboratories_table`");
        $labs = mysqli_fetch_array($database_data);

        while($labs){
          ?>
          <div class="lab-card">
            <div class="challenge-info">
              <h3><?php echo $labs["lab_name"];?></h3>
              <p>Point: <?php echo $labs["lab_point"];?><br>Level: <?php echo $labs["lab_level"];?></p>
            </div>
            <div class="challenge-icon">
              <img src="<?php echo $labs["image"];?>" alt="icon">
            </div>
          </div>
          <?php
          $labs = mysqli_fetch_array($database_data);
        }
      ?>
      </div>
    </div>
  </div>

  <script>
  </script>
</body>
</html>