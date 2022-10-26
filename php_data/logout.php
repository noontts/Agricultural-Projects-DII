<?php 
    session_start(); 
    $_SESSION = NULL;
    session_destroy(); 
    header("Location: ../Home_page.php");
    exit();
?> 