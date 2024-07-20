<?php
    session_start();
     //to connect database
     include("../db/connection.php");
     //functions
     include("../function/function.php");
    $log="logouted";
    $userid = $_SESSION['userid'];
    userLog($userid,$log);
    unset($_SESSION['userEmail']);
    header("Location:homePage.php");
?>