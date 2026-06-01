<?php
session_start();
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");

if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
} else {
    $lang = "en";
}

if (!isset($_SESSION["isAdmin"]) || !isset($_GET["id"]) || !isset($_GET["type"])) {
    header("Location: ../../php/$lang/profile.php");
    exit();
} else {
    $id = $_GET["id"];
    $type = $_GET["type"];

    if ($type == "user") {
        mysqli_query($cybertech_db, "DELETE FROM `users` WHERE id=$id");
        header("Location: ../$lang/admin.php?status=success");
    } elseif ($type == "lab") {
        mysqli_query($cybertech_db, "DELETE FROM `laboratories_table` WHERE id=$id");
        header("Location: ../$lang/admin.php?status=success");
    } elseif ($type == "machine") {
        mysqli_query($cybertech_db, "DELETE FROM `machines_db` WHERE id=$id");
        header("Location: ../$lang/admin.php?status=success");
    } else {
        echo "<center><h1>404 Error</h1><br><p>Type is not define...</p></center>";
    }
}
?>