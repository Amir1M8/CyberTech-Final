<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../../js/functions.js"></script>
</head>
<body>
    <header class="website-header">
        <nav>
            <ul>
                <li><a href="./index.php">خانه</a></li>
                <li><a href="./about.php">درباره</a></li>
                <li><a href="#services">سرویس ها</a></li>
                <li><a href="./laboratories.php">آزمایشگاه ها</a></li>
                <?php 
                if (isset($_SESSION['isAdmin'])) {
                    if ($_SESSION['isAdmin'] == "True") {
                        echo("<li><a href='../../php/fa/logout.php'>خروج</a></li>");
                        echo("<li><a href='../../php/fa/admin.php'>مدیریت</a></li>");
                        echo("<li><a href='../../php/fa/profile.php'>پروفایل</a></li>");
                    } else {
                        echo("<li><a href='../../php/fa/logout.php'>خروج</a></li>");
                    }
                }
                else if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
                    echo("<li><a href='../../php/fa/logout.php'>خروج</a></li>");
                    echo("<li><a href='../../php/fa/Profile.php'>پروفایل</a></li>");
                } else {
                    echo("<li><a href='../../html/fa/login.html'>ورود</a></li>");
                }
                ?>
                <li><a href="#contact">ارتباط</a></li>
                <hr>
                <li onclick="redirect('../../php/en/index.php')" class="ChangeLang">EN</li>
            </ul>
        </nav>
    </header>
</body>
</html>