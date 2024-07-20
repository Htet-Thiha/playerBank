<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");
    
    session_start();

    
    $adminid = $_SESSION['adminid'];
    $log = "logout";

    adminLog($adminid,$log);
    unset($_SESSION['adminEmail']);
    // unset($_SESSION['adminPassword']);
    header("Location:../login.php");
?>