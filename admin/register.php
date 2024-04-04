<?php

//db connection
include("../db/connection.php");

//functions
include("../function/function.php");

// Ensure that content type is JSON
header('Content-Type: application/json');

//check post data id retrive or not
if(!($_POST)){

    $array['error']="Post not submit"."\n";
    echo json_encode($array);

}else{

    // Retrieve image path from POST data
    $formdata =[
        "imgPath" => $_POST['img'],
        "adminEmail" => $_POST['email'],
        "adminName" => $_POST['name'],
        "adminPhone" => $_POST['phone'],
        "adminPassword" => $_POST['password'],
        "cPassword" => $_POST['cpassword']
    ];

    //upload to db and return key
    admin_register($formdata);
    
}
?>