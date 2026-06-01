<?php
session_start();
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");

if (!isset($_SESSION['isAdmin'])) {
    header("Location: ../../php/en/profile.php");
    exit();
}
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - CyberTech</title>

    <link rel="stylesheet" href="../../css/profile.css">
    <link rel="stylesheet" href="../../css/admin-panel.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
    <script>
        function toggleSection(id) {
            const sections = document.querySelectorAll('.admin-section');
            sections.forEach(sec => sec.style.display = 'none');

            const target = document.getElementById(id);
            target.style.display = 'block';
        }
    </script>
    <style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    
    .confirm-box {
        background-color: #212a21;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .confirm-box p {
        margin-bottom: 20px;
        font-size: 1.1em;
    }
    
    .buttons button {
        padding: 10px 20px;
        margin: 0 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 1em;
    }
    
    #confirmBtn {
        background-color: #133e14;
        color: white;
    }
    
    #cancelBtn {
        background-color: #60150f;
        color: white;
    }
    .create-btn {
        background: #393e30df;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .create-btn:hover {
        background: #2f3329df;
    }
    </style>
</head>

<body>

<?php include "../../html/en/header.php"; ?>

<div class="image-wrapper">
    <img class="back-image" src="../../assets/images/image2.jpg">

    <section class="admin-container">

        <!-- TOGGLE BUTTONS -->
        <div class="admin-menu">
            <button onclick="toggleSection('users')">Users</button>
            <button onclick="toggleSection('labs')">Laboratories</button>
            <button onclick="toggleSection('machines')">Pentest Machines</button>
        </div>

        <!-- USERS -->
        <div id="users" class="admin-section" style="display: block">
            <h2>Manage Users</h2>
            <table>
                <tr>
                    <th>ID</th><th>Username</th><th>Email</th><th>Status</th><th>Operation</th>
                </tr>
                <?php
                $users = mysqli_query($cybertech_db, "SELECT * FROM users");
                while ($u = mysqli_fetch_array($users)) {
                    echo "
                    <tr>
                        <td>{$u['id']}</td>
                        <td>{$u['username']}</td>
                        <td>{$u['email']}</td>
                        <td>{$u['user_status']}</td>
                        <td>
                            <a href='../database/editor.php?id={$u['id']}&lang=en&referrer=user' style='color: #fff;'>Edit</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"en\", \"user\", {$u['id']})'><u>Delete</span>
                        </td>
                    </tr>";
                }
                ?>
            </table><br>
            <button class="create-btn">Create New User</button>
        </div>

        <!-- LABS -->
        <div id="labs" class="admin-section">
            <h2>Manage Laboratories</h2>
            <table>
                <tr>
                    <th>ID</th><th>Name</th><th>Point</th><th>Level</th><th>Operation</th>
                </tr>
                <?php
                $labs = mysqli_query($cybertech_db, "SELECT * FROM laboratories_table");
                while ($l = mysqli_fetch_array($labs)) {
                    echo "
                    <tr>
                        <td>{$l['id']}</td>
                        <td>{$l['lab_name']}</td>
                        <td>{$l['lab_point']}</td>
                        <td>{$l['lab_level']}</td>
                        <td>
                            <a href='../database/editor.php?id={$l['id']}&lang=en&referrer=lab' style='color: #fff;'>Edit</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"en\", \"lab\", {$l['id']})'><u>Delete</span>
                        </td>
                    </tr>";
                }
                ?>
            </table><br>
            <button class="create-btn">Create New Laboratory</button>
        </div>

        <!-- MACHINES -->
        <div id="machines" class="admin-section">
            <h2>Manage Pentest Machines</h2>
            <table>
                <tr>
                    <th>ID</th><th>Name</th><th>About</th><th>Category</th><th>Level</th><th>Operation</th>
                </tr>
                <?php
                $machines = mysqli_query($cybertech_db, "SELECT * FROM machines_db");
                while ($m = mysqli_fetch_array($machines)) {
                    echo "
                    <tr>
                        <td>{$m['id']}</td>
                        <td>{$m['machine_name']}</td>
                        <td>{$m['description']}</td>
                        <td>{$m['fields']}</td>
                        <td>{$m['level']}</td>
                        <td>
                            <a href='../database/editor.php?id={$m['id']}&lang=en&referrer=machine' style='color: #fff;'>Edit</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"en\", \"machine\", {$m['id']})'><u>Delete</span>
                        </td>
                    </tr>";
                }
                ?>
            </table><br>
            <button class="create-btn">Create New Machine</button>
        </div>

    </section>
</div>
<div id="customConfirmOverlay" class="overlay" style="display:none;">
    <div class="confirm-box">
        <p id="confirmMessage">پیغام شما</p>
        <div class="buttons">
        <button id="confirmBtn">تایید</button>
        <button id="cancelBtn">لغو</button>
        </div>
    </div>
</div>
<script src="../../js/alert.js"></script>
</body>
</html>

<!-- href='delete-user.php?id={$u['id']}' -->
