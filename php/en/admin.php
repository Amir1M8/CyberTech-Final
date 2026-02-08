<?php
session_start();

$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
$database_data = mysqli_query($cybertech_db, "SELECT * FROM `users` WHERE user_status='isAdmin'");
$result = mysqli_fetch_array($database_data);

while ($result) {
  if ($_SESSION['email'] == $result["email"] and $_SESSION['password'] == $result["password"]) {
    $_SESSION["isAdmin"] = "True";
    break;
  }
  else{
    ?>
    <script>
      window.location = "../../html/en/login.html"
      </script>
    <?php
  }
}
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/profile.css">
  <link rel="stylesheet" href="../../css/header.css">
  <script src="../../js/functions.js"></script>
  <title>Admin Page - CyberTech</title>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
  <style>
    table,th,td{
      border: 3px solid;
      padding: 15px;
    }
  </style>
</head>
<body>
  <div class="image-wrapper">
    <img class="back-image" src="../../assets/images/image2.jpg" alt="Background" />
    <section class="profile-container">
      <center>
        <table style="background: #191b15df;border-radius: 16px;padding: 40px;">
          <th>ID</th><th>USERNAME</th><th>EMAIL</th><th>EDIT</th><th>DELETE</th><tr></tr>
          <?php
            $cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
            $users_info = mysqli_query($cybertech_db, "SELECT * FROM `users`");
            $rows = mysqli_fetch_array($users_info);
            
            while ($rows) {
              echo("<th>".$rows["id"]."</th><th>".$rows["username"]."</th><th>".$rows["email"]."</th><th><a href='x' style='color: white;'>Edit</a></th><th><a href='x' style='color: white;'>Delete</a></th><tr></tr>");
              $rows = mysqli_fetch_array($users_info);
            }
            mysqli_close($cybertech_db);
          ?>
        </table>
      </center>
    </section>
  </div>
  <?php
    include "../../html/en/header.php";
  ?>
</body>
</html>
