<?php
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
        $userQuery = "INSERT into authenticate_info VALUES
                ('', '', '$user_name', '$user_pass', 'user_email')";
        $result = mysqli_query($connect, $userQuery);


        // If if can't run query will display pharse in 'die' otherwise, it will be head to 'Login.html' page.
        if (!$result){ die ("ไม่สามารถเชื่อมต่อหรือรัน Query ของผู้ใช้งานได้ $userQuery".mysqli_error($connect)); }
        else{ echo "data has added."; }
    } 

    // if it doesn't same password. it'll display alert in same page.
    else 
    {
        echo "<p style=\"color: red;\">รหัสผ่านของคุณไม่ตรงกัน";
    }
    

?>
