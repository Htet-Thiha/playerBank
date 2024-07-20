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
    $gameid=$_POST['gameid'];
    $gamedata=detail($gameid,'game','gameid');
    $unitName = $gamedata['unitName'];
    $adminId =$_POST['adminid'];

    $formdata =[
        "imgPath" => $_POST['img'],
        "gameid" => $_POST['gameid'],
        "product" => $_POST['product'],
        "price" => $_POST['price'],
        "unitName"=>$unitName,
        "adminid"=>$adminId
    ];

    //upload to db and return key
    add_unit($formdata);
    
}
?>