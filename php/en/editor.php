<?php
session_start();
$cybertech_db = mysqli_connect("localhost", "root", "", "cybertech_db");

if (!isset($_SESSION['isAdmin'])) {
    header("Location: ../../html/en/index.html");
    exit();
}

$referrer = $_GET['referrer'];
$id = $_GET['id'];
$lang = $_GET['lang'];
if ($lang == "en") {
    $page = "ltr";
} else {
    $page = "rtl";
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
    <script src="../../js/functions.js"></script>
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
            

            <form class="edit-form" action="../database/apply_changes.php">

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Username</label>";
                            echo "<input type='text' placeholder='Enter user name' name='username'>";
                        } else if ($referrer == "lab") {
                            echo "<label>Lab Name</label>";
                            echo "<input type='text' placeholder='Enter lab name' name='lab_name'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Name</label>";
                            echo "<input type='text' placeholder='Enter machine name' name='machine_name'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>نام کاربری</label>";
                            echo "<input type='text' placeholder='نام کاربری را وارد کنید' name='username'>";
                        } else if ($referrer == "lab") {
                            echo "<label>نام آزمایشگاه</label>";
                            echo "<input type='text' placeholder='نام آزمایشگاه را وارد کنید' name='lab_name'>";
                        } else if ($referrer == "machine") {
                            echo "<label>نام ماشین</label>";
                            echo "<input type='text' placeholder='نام ماشین را وارد کنید' name='machine_name'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Email</label>";
                            echo "<input type='email' placeholder='Enter user email' name='email'>";
                        } else if ($referrer == "lab") {
                            echo "<label>Lab Point</label>";
                            echo "<input type='text' placeholder='Enter laborator point' name='lab_point'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Description</label>";
                            echo "<input type='text' placeholder='Enter machine description' name='machine_description'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>ایمیل</label>";
                            echo "<input type='email' placeholder='ایمیل را وارد کنید' name='email'>";
                        } else if ($referrer == "lab") {
                            echo "<label>امتیاز آزمایشگاه</label>";
                            echo "<input type='text' placeholder='امتیاز آزمایشگاه را وارد کنید' name='lab_point'>";
                        } else if ($referrer == "machine") {
                            echo "<label>توضیحات ماشین</label>";
                            echo "<input type='text' placeholder='توضیحات ماشین را وارد کنید' name='machine_description'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Character</label>";
                            echo "<select name='uchar'>";
                            echo "<option>Normal User</option>";
                            echo "<option>Admin</option>";
                            echo "</select>";
                        } else if ($referrer == "lab") {
                            echo "<label>Laboratory Level</label>";
                            echo "<select name='lab_level'>";
                            echo "<option>Easy</option>";
                            echo "<option>Medium</option>";
                            echo "<option>Hard</option>";
                            echo "</select>";
                        } else if ($referrer == "machine") {
                            echo "<label>Vulnerable Machine Level</label>";
                            echo "<select name='machine_level'>";
                            echo "<option>Beginner</option>";
                            echo "<option>Beginner–Intermediate</option>";
                            echo "<option>Intermediate</option>";
                            echo "<option>Intermediate–Advanced</option>";
                            echo "<option>Advanced</option>";
                            echo "<option>Professional</option>";
                            echo "</select>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>نقش</label>";
                            echo "<select name='uchar'>";
                            echo "<option>کاربر عادی</option>";
                            echo "<option>ادمین</option>";
                            echo "</select>";
                        } else if ($referrer == "lab") {
                            echo "<label>سطح آزمایشگاه</label>";
                            echo "<select name='lab_level'>";
                            echo "<option>آسان</option>";
                            echo "<option>متوسط</option>";
                            echo "<option>سخت</option>";
                            echo "</select>";
                        } else if ($referrer == "machine") {
                            echo "<label>سطح ماشین آسیب پذیر</label>";
                            echo "<select name='machine_level'>";
                            echo "<option>آسان</option>";
                            echo "<option>آسان-متوسط</option>";
                            echo "<option>متوسط</option>";
                            echo "<option>متوسط-پیشرفته</option>";
                            echo "<option>پیشرفته</option>";
                            echo "<option>حرفه ای</option>";
                            echo "</select>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "user") {
                            echo "<label>Description</label>";
                            echo "<input type='text' placeholder='Enter user description' name='description'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Fields</label>";
                            echo "<input type='text' placeholder='Enter machine fields' name='machine_fields'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "user") {
                            echo "<label>توضیحات</label>";
                            echo "<input type='text' placeholder='توضیحات کاربر را وارد کنید' name='description'>";
                        } else if ($referrer == "machine") {
                            echo "<label>حوزه ماشین</label>";
                            echo "<input type='text' placeholder='حوزه ماشین را مشخص کنید' name='machine_fields'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    if ($lang == "en") {
                        if ($referrer == "lab") {
                            echo "<label>Laboratory Link</label>";
                            echo "<input type='text' placeholder='Enter laboratory link' name='lab_link'>";
                        } else if ($referrer == "machine") {
                            echo "<label>Machine Link</label>";
                            echo "<input type='text' placeholder='Enter machine link' name='machine_link'>";
                        }
                    } else if ($lang == "fa") {
                        if ($referrer == "lab") {
                            echo "<label>لینک آزمایشگاه</label>";
                            echo "<input type='text' placeholder='لینک آزمایشگاه را وارد کنید' name='lab_link'>";
                        } else if ($referrer == "machine") {
                            echo "<label>لینک ماشین</label>";
                            echo "<input type='text' placeholder='لینک ماشین را وارد کنید' name='machine_link'>";
                        }
                    }
                    ?>
                </div>

                <div class="form-actions">
                    <?php
                    if ($lang == "fa") {
                        echo '<button type="submit" class="save-btn">ذخیره تغییرات</button>';
                        echo '<button type="button" class="cancel-btn" onclick="redirect(\'../fa/admin.php\')">انصراف</button>';
                    } elseif ($lang == "en") {
                        echo '<button type="submit" class="save-btn">Apply changes</button>';
                        echo '<button type="button" class="cancel-btn" onclick="redirect(\'./admin.php\')">Cancel</button>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
