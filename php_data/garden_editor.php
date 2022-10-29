<?php
    session_start();
    require_once "../php_data/config.php";
    $uid = $_GET['id'];
    $gd_name = $_POST['gName'];
    $gd_area = $_POST['gArea'];
    $gd_area_square = $_POST['gAreaSquare'];
    $gd_detail = $_POST['gDetail'];
    $gd_treat = $_POST['gTreat'];

    $sql_gd = "UPDATE garden_info SET 
                gd_name= '$gd_name',
                gd_area = '$gd_area',
                gd_area_square = '$gd_area_square',
                gd_detail = '$gd_detail',
                gd_treat = '$gd_treat'
                WHERE ID = '$uid'"; 

    mysqli_query($connect, $sql_gd);

    header("Location: ../Page/All_agricultural_information_page.php?id=$uid");
?>