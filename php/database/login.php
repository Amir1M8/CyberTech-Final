<?php
session_start();
// connect database
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
$database_data = mysqli_query($cybertech_db, "SELECT * FROM `users`");
$result = mysqli_fetch_array($database_data);

// user inputs
$email = $_POST["email"];
$password = $_POST["password"];
$Login = "false";

// check data
while($result){
    if ($email == $result["email"] && $password == $result['password']) {
        if ($result["user_status"] == "isAdmin") {
            $_SESSION["isAdmin"] = "True";
        }
        if ($_POST["lang"] == "en") {
        ?>
            <script>
                window.location = "../en/profile.php";
            </script>
        <?php
        } elseif ($_POST["lang"] == "fa") {
        ?>
            <script>
                window.location = "../fa/profile.php";
            </script>
        <?php
        } else {
            echo "<center><h1>404 Error</h1></center>";
        }
        $Login = "true";
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
    }
    $result = mysqli_fetch_array($database_data);
}

if ($Login == "false") {
    if ($_POST["lang"] == "en") {
    ?>
        <script>
            window.location = "../../html/en/login.html?status=invalid";
        </script>
    <?php
    } elseif ($_POST["lang"] == "fa") {
    ?>
        <script>
            window.location = "../../html/fa/login.html?status=invalid";
        </script>
    <?php
    } else {
        echo "<center><h1>404 Error</h1></center>";
    }
}
?>