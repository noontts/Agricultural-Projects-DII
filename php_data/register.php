<?php
    session_start();
    require_once "config.php";

    /*
     * - Define variables to collect values from html pages.
     * - variables about user accounts data.
     */
    $user_type = $_SESSION['type'];
    $user_name = $_POST['user'];
    $user_pass = $_POST['pass'];
    $user_confirm_pass = $_POST['confirm_pass'] ;
    $user_email =  $_POST['email'];

    // Global variables to check if textbox is empty.
    $GLOBALS['emptyScan'] = false;


     /*
     * - " perDataQuery " require 1 array(user data) & 1 string(user type).  
     * - loop each values in array to check if it has spacebar or empty.
     *   it'll send to thier register page again.
     */
    function perDataQuery ($arrayData, $type) {
        foreach ($arrayData as $value) {
            $pattern = '/\s/';
            if (preg_match($pattern, $value) != 0) 
            {
                $_SESSION['alert'] = "คุณไม่สามารถเว้นช่องว่างในกล่องข้อความได้! *สามารถใช้ _ แทนการเว้นช่องว่าง";
                $GLOBALS['emptyScan'] = true; headerNext($type);
            } 
            else 
            {
                if(empty($value)) {
                    $_SESSION['alert'] = "คุณกรอกข้อมูลบางอย่างไม่สมบูรณ์ กรุณาลองใหม่อีกครั้ง!";
                    $GLOBALS['emptyScan'] = true; headerNext($type);
                }
            }
        }
    }


    /*
     * - " headerNext " require 1 string(user type).
     * - check if it be - farmer - will send to reg-farmer page
     *   , otherwise send to reg_organize.
     */
    function headerNext ($type) {
        if ($type == "farmer_role") { header( 'Location: ../Page/Register_SubmitPage(FARM).php'); }
        else if ($type == "organize_role") { header( 'Location: ../Page/Register_SubmitPage(ORGANIZE).php'); }
    }

    
    /*
     * - bring username and email from database to check
     * - if it same value as input. it'll return to reg-page again.
     */
    $return_base = "SELECT * FROM authSystem_Demo WHERE username = '$user_name' OR email = '$user_email'";
    $query = mysqli_query($connect, $return_base);

    if (mysqli_num_rows($query) > 0) 
    {
        $_SESSION['alert'] = "มีคนใช้ชื่อผู้ใช้งานหรืออีเมลดังกล่าวไปแล้วก่อนหน้านี้ กรุณาทำรายการใหม่";
        headerNext($user_type);
    } 
    else {
         // call function "perDataQuery" by using array of user data.
        $dataArray = array($user_name, $user_email, $user_pass, $user_confirm_pass);
        perDataQuery($dataArray, $user_type);


        /*
         * check if it has empty value and inside check 
         * if the password is match or doesn't match.
         */
        if($GLOBALS['emptyScan'] == false) {
            if ($user_pass == $user_confirm_pass)
            {
                $userQuery = "INSERT into authsystem_demo VALUES
                    ('', '$user_type', '$user_name', '$user_pass', '$user_email')";
                $result = mysqli_query($connect, $userQuery);
            
                if (!$result){ die ("ไม่สามารถเชื่อมต่อหรือรัน Query ของผู้ใช้งานได้ $userQuery".mysqli_error($connect)); }
                else { 
                    header( 'Location: ../Page/LoginPage.php');
                    //echo "เชื่อมต่อแล้ว";
                }
            }
            else 
            {
                //echo "รหัสไม่ตรงกัน";
                $_SESSION['alert'] = "รหัสผ่านของคุณไม่ตรงกัน กรุณาตรวจสอบและแก้ไขใหม่อีกครั้ง!";
                headerNext($user_type);
            }
        }   
    }
?>
