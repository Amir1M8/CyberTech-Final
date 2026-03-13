<?php
session_start();
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");

if (!isset($_SESSION['isAdmin'])) {
    header("Location: ../../php/en/profile.php");
    exit();
}
?>

<!doctype html>
<html lang="fa" dir="rtl">
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
                            <a href='delete-user.php?id={$u['id']}' style='color: #fff;'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </table>
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
                            <a href='delete-lab.php?id={$l['id']}' style='color: #fff;'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </table>
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
                            <a href='delete-machine.php?id={$m['id']}' style='color: #fff;'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </table>
        </div>

    </section>
</div>

</body>
</html>
