<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../../js/functions.js"></script>
</head>
<body>
    <header class="website-header">
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="./laboratories.php">Machines & Labs</a></li>
                <?php 
                if (isset($_SESSION['email']) and isset($_SESSION['password'])) {
                    echo("<li><a href='../../php/en/logout.php'>Logout</a></li>");
                } else {
                    echo("<li><a href='../../html/en/login.html'>Login</a></li>");
                }
                ?>
                <li><a href="#contact">Contact</a></li>
                <hr>
                <li onclick="redirect('../../php/fa/index.php')" class="ChangeLang">FA</li>
            </ul>
        </nav>
    </header>
</body>
</html>