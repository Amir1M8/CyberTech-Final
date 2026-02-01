<?php
// connect database
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
$database_data = mysqli_query($cybertech_db, "SELECT * FROM `users`");
$result = mysqli_fetch_array($database_data);

// user inputs
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$username = $_POST["username"];
$isExist = "False";

// check data
while($result){
    if ($email == $result["email"]) {
        ?>
            <script>
                window.location = "../../html/en/login.html?status=exist";
            </script>
        <?php
        $isExist = "True";
    }
    $result = mysqli_fetch_array($database_data);
}

// add new user in database
if ($isExist == "False") {
    if ($confirm_password == $password) {
        $register = mysqli_query($cybertech_db, "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$username', '$password', '$email')");
        mysqli_close($cybertech_db);
        ?>
            <script>
                window.location = "../../html/en/login.html?status=success";
            </script>
        <?php
    }
}
?>