<?php
    session_start();
    require_once "../php_data/config.php";
    $uid = $_SESSION['uid'];

    $autoQuery = "SELECT * FROM authsystem_demo WHERE ID = '$uid'";
    $rows = mysqli_fetch_assoc(mysqli_query($connect, $autoQuery));

    function generate_userdb($values, $dir, $connection) {
        for ($count = 0; $count < count($dir); $count++)
        {
            $generate_id[$count] = "DELETE FROM $dir[$count] WHERE ID = '$values'";
            mysqli_query($connection, $generate_id[$count]);
        }
    }
    
    if ($rows['type'] == "farmer_role") 
    { 
        $tableName = array("authsystem_demo","fm_personal_info", "garden_info");
        generate_userdb($uid, $tableName, $connect); 
    }

    else if ($rows['type'] == "organize_role") 
    { 
        $tableName = array("or_personal_info");
        generate_userdb($uid, $tableName, $connect);
    }

    header('Location: ../php_data/logout.php');

?>
