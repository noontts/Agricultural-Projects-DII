<?php
    session_start();
    require_once "../php_data/config.php";
    $_SESSION['type'] = $_POST['system_type'];

    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] == "farmer_role") { header('Location: ../Page/Register_SubmitPage(FARM).php'); }
        else if ($_SESSION['type'] == "organize_role") { header('Location: ../Page/Register_SubmitPage(ORGANIZE).php'); }
    } 
?>


