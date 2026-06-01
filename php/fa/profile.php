<?php
session_start();

if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  
  $cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
  $database_data = mysqli_query($cybertech_db, "SELECT * FROM `users` WHERE email='$email' and password='$password'");
  $result = mysqli_fetch_array($database_data);
  $id = $result["id"];
}
else{
  ?>
  <script>
    window.location = "../../html/fa/login.html"
  </script>
  <?php
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
  <title>Profile - CyberTech</title>
  <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
</head>
<body>
  <div class="image-wrapper">
    <img class="back-image" src="../../assets/images/image2.jpg" alt="Background" />
    <section class="profile-container">
        <div class="profile-card">

            <div class="profile-avatar">
                <img src="<?php echo($result["picture"]);?>" alt="User Avatar">
                <h2><?php echo($result["username"]);?></h2>
                <br>
                <button class="edit-profile" onclick="redirect('../database/editor.php?referrer=user&lang=fa&id=<?php echo($id);?>')">ویرایش پروفایل</button>
            </div>

            <div class="profile-info">
                <h3>اطلاعات</h3>
                <p>
                  <?php echo($result["description"]);?>
                </p>

                <ul class="info-list">
                    <li><strong>ایمیل:</strong> <?php echo($result["email"]);?></li>
                    <li><strong>نام کاربری:</strong> <?php echo($result["username"]);?></li>
                    <li><strong>سطح:</strong> نامشخص</li>
                </ul>

                <h3>مهارت ها</h3>
                <div class="skills">
                    <div class="skill">تست نفوذ</div>
                    <div class="skill">لینوکس</div>
                    <div class="skill">شبکه</div>
                    <div class="skill">امنیت وب</div>
                </div>
            </div>

        </div>
    </section>
  </div>
  <?php
    include "../../html/fa/header.php";
  ?>
  <script>
    document.body.style = "direction: rtl;margin: 0;font-family: 'Vazirmatn', sans-serif;";
  </script>
</body>
</html>
