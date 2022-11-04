<?php
    session_start();
    require_once "../php_data/config.php";
    $uid = $_GET['id'];
    echo $uid;
    
    $pd_type = $_POST['pType'];
    $pd_price = $_POST['pPrice'];
    $pd_harvest = $_POST['pHarvest'];
    $pd_per_each = $_POST['pPeach'];
    $pd_harvest_day = $_POST['pHarveDay'];
    $pd_detail = $_POST['pDetail'];

    $sql_pd = "UPDATE product_info SET 
                pd_type= '$pd_type',
                pd_price = '$pd_price',
                pd_harvest = '$pd_harvest',
                pd_per_each = '$pd_per_each',
                pd_harvest_day = '$pd_harvest_day',
                pd_detail = '$pd_detail'
                WHERE ID = '84'"; 

    mysqli_query($connect, $sql_pd);

    header("Location: ../Page/All_agricultural_information_page.php?id=$uid");
?>