<?php
session_start();

$lang = "en";
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
}

$isAdmin = TRUE;
$Status = "admin";
if (!isset($_SESSION['isAdmin'])) {
    $isAdmin = FALSE;
    $Status = "profile";
}

$referrer = $_GET["referrer"];
$connector = mysqli_connect("localhost","root","", "cybertech_db");
$id = $_GET["id"];

if (isset($referrer)) {
    if ($referrer == "user") {
        $userInfo = mysqli_query($connector, "SELECT * FROM `users` WHERE id='$id'");
        $userRow = mysqli_fetch_array($userInfo);
        if ($isAdmin == FALSE &&  $userRow["email"] != $_SESSION["email"]) {
            header("Location: ../../php/$lang/index.php");
            exit();
        } else {
            $ProfileImage = $_FILES["uploadImage"];
            $username = $_POST["username"];
            $user_email = $_POST["email"];

            if ($isAdmin == FALSE) {
                $user_character = "Member";
            } else {
                $user_character = $_POST['uchar'];
            }

            $user_description = $_POST["description"];
            $user_skills = $_POST["user_skills"];
            $user_password = $_POST["user_password"];

            if ($ProfileImage && $ProfileImage["name"] != NULL) {
                $ImageLocation = "../../assets/images/upload/users/" . $username . "_" . $ProfileImage["name"];
                move_uploaded_file($ProfileImage["tmp_name"], $ImageLocation);
                $usersResult = mysqli_query($connector, "UPDATE `users` SET `username`='$username',`password`='$user_password',`email`='$user_email',`description`='$user_description',`user_status`='$user_character',`picture`='$ImageLocation',`skills`='$user_skills' WHERE id=$id;");
            } else {
                $usersResult = mysqli_query($connector, "UPDATE `users` SET `username`='$username',`password`='$user_password',`email`='$user_email',`description`='$user_description',`user_status`='$user_character',`skills`='$user_skills' WHERE id=$id;");
            }
            
            mysqli_close($connector);

            if ($Status == "profile") {
                $_SESSION["email"] = $user_email;
                $_SESSION["password"] = $user_password;
            }
            header("Location: ../$lang/$Status.php#success");
            exit();
        }

    } elseif ($referrer == "lab") {
        if ($isAdmin == FALSE) {
            header("Location: ../../php/$lang/index.php");
            exit();
        } else {
            $laboratoryImage = $_FILES["uploadImage"];
            $labName = $_POST["lab_name"];
            $labPoint = $_POST["lab_point"];
            $labLevel = $_POST["lab_level"];
            $labURL = $_POST["lab_link"];

            if ($laboratoryImage && $laboratoryImage["name"] != NULL) {
                $LabImageLocation = "../../assets/images/upload/laboratories/" . $labName . "_" . $laboratoryImage["name"];
                move_uploaded_file($laboratoryImage["tmp_name"], $LabImageLocation);
                $laboratoryResult = mysqli_query($connector, "UPDATE `laboratories_table` SET `lab_name`='$labName',`lab_point`='$labPoint',`lab_level`='$labLevel',`image`='$LabImageLocation',`url`='$labURL' WHERE id=$id;");
            } else {
                $laboratoryResult = mysqli_query($connector, "UPDATE `laboratories_table` SET `lab_name`='$labName',`lab_point`='$labPoint',`lab_level`='$labLevel',`url`='$labURL' WHERE id=$id;");
            }

            mysqli_close($connector);

            header("Location: ../$lang/admin.php#success");
            exit();
        }

    } elseif ($referrer == "machine") {
        if ($isAdmin == FALSE) {
            header("Location: ../../php/$lang/index.php");
            exit();
        } else {
            $machineImage = $_FILES["uploadImage"];
            $machineName = $_POST["machine_name"];
            $machineDescription = $_POST["machine_description"];
            $machineLevel = $_POST["machine_level"];
            $machineFields = $_POST["machine_fields"];
            $machineURL = $_POST["machine_link"];

            
            if ($machineImage && $machineImage["name"] != NULL) {
                $MachineImageLocation = "../../assets/images/upload/laboratories/" . $machineName . "_" . $machineImage["name"];
                move_uploaded_file($machineImage["tmp_name"], $MachineImageLocation);
                $machineResult = mysqli_query($connector, "UPDATE `machines_db` SET `machine_name`='$machineName',`description`='$machineDescription',`fields`='$machineFields',`level`='$machineLevel',`image`='$MachineImageLocation',`url`='$machineURL' WHERE id=$id;");
            } else {
                $machineResult = mysqli_query($connector, "UPDATE `machines_db` SET `machine_name`='$machineName',`description`='$machineDescription',`fields`='$machineFields',`level`='$machineLevel',`url`='$machineURL' WHERE id=$id;");
            }

            mysqli_close($connector);

            header("Location: ../$lang/admin.php#success");
            exit();
        }
    }
}
else {
    header("Location: ../$lang/$Status.php");
    exit();
}
?>