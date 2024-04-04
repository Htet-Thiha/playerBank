<?php

//db connection
include("./db/connection.php");

//functions
include("./function/function.php");

// Ensure that content type is JSON
header('Content-Type: application/json');

$array = [
    "error" =>"",
    "pass"=>""
];

//check post data id retrive or not
if(!($_POST)){

    $array['error']="Post not submit";

    echo json_encode($array);

}else{
   
    $image = $_POST['img'];
    $id = $_POST['id'];
    $tableName = $_POST['tableName'];

    edit($tableName,'photo',$image,$id);
    $array['pass']="Success";

    echo json_encode($array);
    
}
?>