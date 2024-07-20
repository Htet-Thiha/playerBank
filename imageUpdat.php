<?php
session_start();
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

    if($_POST['Wupdate']){
        $gameData = detail($id,'game','gameid');
        $gameName = $gameData['gameName'];
        $log=$_POST['Wupdate'].$gameName;
        $adminid =$_POST['adminid'];
        // $adminName =  $_SESSION['adminName'];
        adminLog($adminid,$log);

    };

    if($_POST['fromAdmin']){
        $log = $_POST['fromAdmin'];
        adminLog($id,$log);
        $_SESSION['adminPhoto']=$image;
    }

    edit($tableName,'photo',$image,$id);
    $array['pass']="Success";
    echo json_encode($array);

    
}
?>