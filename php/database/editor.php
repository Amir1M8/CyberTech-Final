<?php
session_start();

$isAdmin = TRUE;
$Status = "admin";
if (!isset($_SESSION['isAdmin'])) {
    $isAdmin = FALSE;
    $Status = "profile";
}

$id = $_GET['id'];

$referrer = $_GET['referrer'];
$lang = $_GET['lang'];
if ($lang == "en") {
    $page = "ltr";
} else {
    $page = "rtl";
}

$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");
if ($referrer == "user") {
    $database_data = mysqli_query($cybertech_db, "SELECT * FROM `users` WHERE id='$id'");
    $user_data = mysqli_fetch_array($database_data);
    
    if ($isAdmin == FALSE && $user_data["email"] != $_SESSION["email"]) {
        header("Location: ../../php/$lang/index.php");
        exit();
    } else {
        $username = $user_data["username"];
        $user_password = $user_data["password"];
        $user_email = $user_data["email"];
        $user_description = $user_data["description"];
        $user_status = $user_data["user_status"];
        $user_picture = $user_data["picture"];
        $user_skills = $user_data["skills"];
    }

} elseif ($referrer == "lab") {
    if ($isAdmin == FALSE) {
        header("Location: ../../php/$lang/index.php");
        exit();
    } else {
        $database_data = mysqli_query($cybertech_db, "SELECT * FROM `laboratories_table` WHERE id='$id'");
        $lab_data = mysqli_fetch_array($database_data);
        $lab_name = $lab_data["lab_name"];
        $lab_point = $lab_data["lab_point"];
        $lab_level = $lab_data["lab_level"];
        $lab_image = $lab_data["image"];
        $lab_url = $lab_data["url"];
    }

} elseif ($referrer == "machine") {
    if ($isAdmin == FALSE) {
        header("Location: ../../php/$lang/index.php");
        exit();
    } else {
        $database_data = mysqli_query($cybertech_db, "SELECT * FROM `machines_db` WHERE id='$id'");
        $machine_data = mysqli_fetch_array($database_data);
        $machine_name = $machine_data["machine_name"];
        $machine_description = $machine_data["description"];
        $machine_fields = $machine_data["fields"];
        $machine_level = $machine_data["level"];
        $machine_image = $machine_data["image"];
        $machine_url = $machine_data["url"];
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo($lang);?>" dir="<?php echo($page);?>">
<head>
    <meta charset="UTF-8">
    <?php
    if ($lang == "en") {
        echo "<title>Information Editor</title>";
    } else if ($lang == "fa") {
        echo "<title>ویرایش اطلاعات</title>";
    }
    ?>

    <link rel="stylesheet" href="../../css/editor.css">
    <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
    <script src="../../js/functions.js"></script>
    <style>
        .form-group {
            display: flex;
            flex-direction: column;
            <?php if ($lang == "en") {
                echo "text-align: left;";
            } else {
                echo "text-align: right;";
            }?>
        }
        .avatar {
            text-align: center;
        }

        .avatar img {
            border-radius: 50%;
            margin-bottom: 15px;
            max-width: 35%;
        }
    </style>
</head>
<body>

<div class="image-wrapper">

    <div class="admin-container">

        <div class="edit-section">
            <?php
            if ($lang == "en") {
                if ($referrer == "user") {
                    echo "<h2>Edit User</h2>";
                } else if ($referrer == "lab") {
                    echo "<h2>Edit Lab Info</h2>";
                } else if ($referrer == "machine") {
                    echo "<h2>Edit Machine Info</h2>";
                }
            } else if ($lang == "fa") {
                if ($referrer == "user") {
                    echo "<h2>ویرایش کاربر</h2>";
                } else if ($referrer == "lab") {
                    echo "<h2>ویرایش آزمایشگاه</h2>";
                } else if ($referrer == "machine") {
                    echo "<h2>ویرایش ماشین تست نفوذ</h2>";
                }
            }
            ?>
            

            <form class="edit-form" action="../database/apply_changes.php?referrer=<?php echo $referrer;?>&id=<?php echo $id;?>&lang=<?php echo $lang;?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<div class='avatar'><img src='$user_picture'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        } else if ($referrer == "lab") {
                            echo "<div class='avatar'><img src='$lab_image'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        } else if ($referrer == "machine") {
                            echo "<div class='avatar'><img src='$machine_image'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<div class='avatar'><img src='$user_picture'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        } else if ($referrer == "lab") {
                            echo "<div class='avatar'><img src='$lab_image'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        } else if ($referrer == "machine") {
                            echo "<div class='avatar'><img src='$machine_image'></div>";
                            echo "<input type='file' name='uploadImage' id='uploadImage'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Username</label>";
                            echo "<input type='text' placeholder='Enter user name' name='username' value='$username'>";
                        } else if ($referrer == "lab") {
                            echo "<label>Lab Name</label>";
                            echo "<input type='text' placeholder='Enter lab name' name='lab_name' value='$lab_name'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Name</label>";
                            echo "<input type='text' placeholder='Enter machine name' name='machine_name' value='$machine_name'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>نام کاربری</label>";
                            echo "<input type='text' placeholder='نام کاربری را وارد کنید' name='username' value='$username'>";
                        } else if ($referrer == "lab") {
                            echo "<label>نام آزمایشگاه</label>";
                            echo "<input type='text' placeholder='نام آزمایشگاه را وارد کنید' name='lab_name' value='$lab_name'>";
                        } else if ($referrer == "machine") {
                            echo "<label>نام ماشین</label>";
                            echo "<input type='text' placeholder='نام ماشین را وارد کنید' name='machine_name' value='$machine_name'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Email</label>";
                            echo "<input type='email' placeholder='Enter user email' name='email' value='$user_email'>";
                        } else if ($referrer == "lab") {
                            echo "<label>Lab Point</label>";
                            echo "<input type='text' placeholder='Enter laborator point' name='lab_point' value='$lab_point'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Description</label>";
                            echo "<input type='text' placeholder='Enter machine description' name='machine_description' value='$machine_description'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>ایمیل</label>";
                            echo "<input type='email' placeholder='ایمیل را وارد کنید' name='email' value='$user_email'>";
                        } else if ($referrer == "lab") {
                            echo "<label>امتیاز آزمایشگاه</label>";
                            echo "<input type='text' placeholder='امتیاز آزمایشگاه را وارد کنید' name='lab_point' value='$lab_point'>";
                        } else if ($referrer == "machine") {
                            echo "<label>توضیحات ماشین</label>";
                            echo "<input type='text' placeholder='توضیحات ماشین را وارد کنید' name='machine_description' value='$machine_description'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user" && $isAdmin == TRUE) {
                            echo "<label>Character</label>";
                            echo "<select name='uchar'>";
                            echo "<option>Member</option>";
                            echo "<option>isAdmin</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('uchar')[0].value='$user_status'</script>";
                        } else if ($referrer == "lab") {
                            echo "<label>Laboratory Level</label>";
                            echo "<select name='lab_level'>";
                            echo "<option>Easy</option>";
                            echo "<option>Medium</option>";
                            echo "<option>Hard</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('lab_level')[0].value='$lab_level'</script>";
                        } else if ($referrer == "machine") {
                            echo "<label>Vulnerable Machine Level</label>";
                            echo "<select name='machine_level'>";
                            echo "<option>Beginner</option>";
                            echo "<option>Beginner–Intermediate</option>";
                            echo "<option>Intermediate</option>";
                            echo "<option>Intermediate–Advance</option>";
                            echo "<option>Advanced</option>";
                            echo "<option>Professional</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('machine_level')[0].value='$machine_level'</script>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user" && $isAdmin == TRUE) {
                            echo "<label>نقش</label>";
                            echo "<select name='uchar'>";
                            echo "<option>Member</option>";
                            echo "<option>isAdmin</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('uchar')[0].value='$user_status'</script>";
                        } else if ($referrer == "lab") {
                            echo "<label>سطح آزمایشگاه</label>";
                            echo "<select name='lab_level'>";
                            // echo "<option>آسان</option>";
                            // echo "<option>متوسط</option>";
                            // echo "<option>سخت</option>";
                            echo "<option>Easy</option>";
                            echo "<option>Medium</option>";
                            echo "<option>Hard</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('lab_level')[0].value='$lab_level'</script>";
                        } else if ($referrer == "machine") {
                            echo "<label>سطح ماشین آسیب پذیر</label>";
                            echo "<select name='machine_level'>";
                            // echo "<option>آسان</option>";
                            // echo "<option>آسان-متوسط</option>";
                            // echo "<option>متوسط</option>";
                            // echo "<option>متوسط-پیشرفته</option>";
                            // echo "<option>پیشرفته</option>";
                            // echo "<option>حرفه ای</option>";
                            echo "<option>Beginner</option>";
                            echo "<option>Beginner–Intermediate</option>";
                            echo "<option>Intermediate</option>";
                            echo "<option>Intermediate–Advance</option>";
                            echo "<option>Advanced</option>";
                            echo "<option>Professional</option>";
                            echo "</select>";
                            echo "<script>document.getElementsByName('machine_level')[0].value='$machine_level'</script>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Description</label>";
                            echo "<input type='text' placeholder='Enter user description' name='description' value='$user_description'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Fields</label>";
                            echo "<input type='text' placeholder='Enter machine fields' name='machine_fields' value='$machine_fields'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>توضیحات</label>";
                            echo "<input type='text' placeholder='توضیحات کاربر را وارد کنید' name='description' value='$user_description'>";
                        } else if ($referrer == "machine") {
                            echo "<label>حوزه ماشین</label>";
                            echo "<input type='text' placeholder='حوزه ماشین را مشخص کنید' name='machine_fields' value='$machine_fields'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "lab") {
                            echo "<label>Laboratory Link</label>";
                            echo "<input type='text' placeholder='Enter laboratory link' name='lab_link' value='$lab_url'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Link</label>";
                            echo "<input type='text' placeholder='Enter machine link' name='machine_link' value='$machine_url'>";
                        } else if ($referrer == "user") {
                            echo "<label>User Skills</label>";
                            echo "<input type='text' placeholder='Enter user skills' name='user_skills' value='$user_skills'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "lab") {
                            echo "<label>لینک آزمایشگاه</label>";
                            echo "<input type='text' placeholder='لینک آزمایشگاه را وارد کنید' name='lab_link' value='$lab_url'>";
                        } else if ($referrer == "machine") {
                            echo "<label>لینک ماشین</label>";
                            echo "<input type='text' placeholder='لینک ماشین را وارد کنید' name='machine_link' value='$machine_url'>";
                        } else if ($referrer == "user") {
                            echo "<label>مهارت های کاربر</label>";
                            echo "<input type='text' placeholder='مهارت های کاربر را بنویسید' name='user_skills' value='$user_skills'>";
                        }
                    }
                    ?>
                </div>

                <?php if ($referrer == "user") {
                    ?><div class="form-group">
                    <?php
                    if ($lang == "en") {
                        echo "<label>Password</label>";
                        echo "<input type='text' placeholder='Enter New Password' name='user_password' value='$user_password'>";
                    } else if ($lang == "fa") {
                        echo "<label>تغییر رمز ورود</label>";
                        echo "<input type='text' placeholder='رمز جدید را وارد کنید' name='user_password' value='$user_password'>";
                    }
                    ?>
                </div><?php }?>

                <div class="form-actions">
                    <?php
                    if ($lang == "fa") {
                        echo '<button type="submit" class="save-btn">ذخیره تغییرات</button>';
                        echo '<button type="button" class="cancel-btn" onclick="redirect(\'../fa/' . $Status . '.php\')">انصراف</button>';
                    } elseif ($lang == "en") {
                        echo '<button type="submit" class="save-btn">Apply changes</button>';
                        echo '<button type="button" class="cancel-btn" onclick="redirect(\'../en/' . $Status . '.php\')">Cancel</button>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
