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
   
    $icon = $_POST['icon'];
    $id = $_POST['id'];
    $tableName = $_POST['tableName'];

    if($_POST['Iupdate']){
        $gameData = detail($id,'game','gameid');
        $gameName = $gameData['gameName'];
        $log=$_POST['Iupdate'].$gameName;
        $adminid =$_POST['adminid'];
        // $adminName =  $_SESSION['adminName'];
        adminLog($adminid,$log);

    }

    edit($tableName,'icon',$icon,$id);
    $array['pass']="Success";
    echo json_encode($array);

    
}
?>