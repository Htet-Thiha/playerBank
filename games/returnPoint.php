<?php
    $status = $_POST['status'];
    $point = $_POST['point'];
    if ( $status == "add" ) {
        // database manipulation....
    }

    $updateStatus = "success : ".$point;
    echo json_encode([
        "status" => $updateStatus
    ]);
?>