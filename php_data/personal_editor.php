<?php
    session_start();
    require_once "../php_data/config.php";
    $uid = $_GET['id'];
    $user_name = $_POST['uName'];
    $user_email = $_POST['uEmail'];
    $user_realname = $_POST['uRealname'];
    $user_nation_id = $_POST['uNationID'];
    $user_birth = $_POST['uBirth'];
    $user_area = $_POST['uArea'];
    $user_tel = $_POST['uTel'];
    $user_line = $_POST['uLine'];

    $sql_auth = "UPDATE authsystem_demo SET username = '$user_name',
            email = '$user_email' WHERE ID = '$uid'";
    $query1 = mysqli_query($connect, $sql_auth);

    $sql_fm = "UPDATE fm_personal_info SET 
                fm_realname = '$user_realname',
                fm_nation_id = '$user_nation_id',
                fm_birth = '$user_birth',
                fm_area = '$user_area',
                fm_tel = '$user_tel',
                fm_line = '$user_line'
                WHERE ID = '$uid'"; 

    $query2 = mysqli_query($connect, $sql_fm);

    header("Location: ../Page/All_agricultural_information_page.php?id=$uid");
?>