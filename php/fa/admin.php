<?php
session_start();
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");

if (!isset($_SESSION['isAdmin'])) {
    header("Location: ../../php/fa/profile.php");
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
    
    </style>
</head>

<body>

<?php include "../../html/fa/header.php"; ?>

<div class="image-wrapper">
    <img class="back-image" src="../../assets/images/image2.jpg">

    <section class="admin-container">

        <!-- TOGGLE BUTTONS -->
        <div class="admin-menu">
            <button onclick="toggleSection('users')">کاربران</button>
            <button onclick="toggleSection('labs')">آزمایشگاه ها</button>
            <button onclick="toggleSection('machines')">ماشین های تست نفوذ</button>
        </div>

        <!-- USERS -->
        <div id="users" class="admin-section" style="display: block">
            <h2>مدیریت کاربران</h2>
            <table>
                <tr>
                    <th>ID</th><th>نام کاربری</th><th>ایمیل</th><th>وضعیت</th><th>عملیات</th>
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
                            <a href='../database/editor.php?id={$u['id']}&lang=fa&referrer=user' style='color: #fff;'>ویرایش</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"fa\", \"user\", {$u['id']})'><u>حذف</span>
                        </td>
                    </tr>";
                }
                ?>
            </table>
        </div>

        <!-- LABS -->
        <div id="labs" class="admin-section">
            <h2>مدیریت آزمایشگاه ها</h2>
            <table>
                <tr>
                    <th>ID</th><th>نام</th><th>امتیاز</th><th>سطح</th><th>عملیات</th>
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
                            <a href='../database/editor.php?id={$l['id']}&lang=fa&referrer=lab' style='color: #fff;'>ویرایش</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"fa\", \"lab\", {$l['id']})'><u>حذف</span>
                        </td>
                    </tr>";
                }
                ?>
            </table>
        </div>

        <!-- MACHINES -->
        <div id="machines" class="admin-section">
            <h2>مدیریت ماشین های تست نفوذ</h2>
            <table>
                <tr>
                    <th>ID</th><th>نام</th><th>توضیحات</th><th>دسته بندی</th><th>سطح</th><th>عملیات</th>
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
                            <a href='../database/editor.php?id={$m['id']}&lang=fa&referrer=machine' style='color: #fff;'>ویرایش</a> |
                            <span style='cursor: pointer;color: #fff;' onclick='showCustomConfirm(\"fa\", \"machine\", {$m['id']})'><u>حذف</span>
                        </td>
                    </tr>";
                }
                ?>
            </table>
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
<script>
    document.body.style = "direction: rtl;margin: 0;font-family: 'Vazirmatn', sans-serif;";
</script>
</body>
</html>
