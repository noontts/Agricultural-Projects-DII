<?php
    session_start();
    require_once "config.php";

    /*
     * - Define variables to collect values from html pages.
     * - variables about user accounts data.
     */
    $user_name = $_POST['user'];
    $user_pass = $_POST['pass'];
    $user_confirm_pass = $_POST['confirm_pass'] ;
    $user_realname = $_POST['real_name'];
    $user_email =  $_POST['email'];
    

    // Checking if password and confirm_password are same values.
    if ($user_pass == $user_confirm_pass) 
    {
        /*
        * Define 'userQuery' to collect data from html page
        * and insert values into 'authenticate_info'.
        */ 

        if (empty($user_name) OR empty($user_realname) OR empty($user_email)) 
        {
            $_SESSION['alert'] = "คุณยังกรอกข้อมูลไม่ครบถ้วน! กรุณาตรวจสอบและทำรายการใหม่อีกครั้ง";
            header( 'Location: ../Page/Register_SubmitPage(FARM).php');
        }
        else {
            $userQuery = "INSERT into authenticate_info VALUES
                ('', '', '$user_name', '$user_pass', 'user_email')";
            $result = mysqli_query($connect, $userQuery);
            
            // If if can't run query will display pharse in 'die' otherwise, it will be head to 'Login.html' page.
            if (!$result){ die ("ไม่สามารถเชื่อมต่อหรือรัน Query ของผู้ใช้งานได้ $userQuery".mysqli_error($connect)); }
            else{ 
                header( 'Location: ../Page/LoginPage.php');
             }
        }
        
    } 

    // if it doesn't same password. it'll display alert in same page.
    else 
    {
        $_SESSION['alert'] = "รหัสผ่านของคุณไม่ตรงกัน! กรุณาตรวจสอบและทำรายการใหม่อีกครั้ง";
        header( 'Location: ../Page/Register_SubmitPage(FARM).php');
    }
    

?>
