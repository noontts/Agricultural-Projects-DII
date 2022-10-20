<?php
    session_start();
    require_once "config.php";

    /*
     * - Define variables to collect values from html pages.
     *   variables about users - name, password
     * - Select data from table authenticate_info 
     */
    $user_name = $_POST['user'];
    $user_pass = $_POST['pass'];
    $sql = "SELECT * FROM authsystem_demo WHERE username = '$user_name' AND password = '$user_pass'";

    // Connect to database and call sql table data.
    $query = mysqli_query($connect, $sql);

    if (mysqli_fetch_row($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        header("Location: ../Home_page.php");
    } else {
        header("Location: ../Page/LoginPage.php");
        $_SESSION['alert'] = "<p style=\"color: red; font-size: 12px; margin: 0;\">* ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง.</p>";
    }
    mysqli_close($connect);
?>