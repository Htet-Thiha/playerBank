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
        "img" => $_POST['img'],
        "transcionId" => $_POST['transcionId'],
        "amount" => $_POST['amount'],
        "id" => $_POST['id']
    ];

    //upload to db and return key
    cashIn($formdata);
    
}
?>