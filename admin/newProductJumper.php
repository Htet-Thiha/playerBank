<?php

//db connection
include("../db/connection.php");

//functions
include("../function/function.php");

// Ensure that content type is JSON
header('Content-Type: application/json');

//check post data id retrive or not
$array = [
    "error" =>"",
    "check"=>"",
    "success"=>"",
    "queryFail"=>""
];
if(!($_POST)){

    $array['error']="Post not submit"."\n";
    echo json_encode($array);

}else{

    // Retrieve image path from POST data

    $gameName = $_POST['gameName'];
    $unitName = $_POST['unitName'];
    $aboutGame = $_POST['aboutGame'];
    $link = $_POST['link'];
    $photo = $_POST['img'];
    $icon = $_POST['icon'];

    $adminid = $_POST['adminid'];

    $query="SELECT * from game WHERE gameName='$gameName'";
    $go_query=mysqli_query($conn,$query);
    $check = mysqli_num_rows($go_query);

    if($check>0){
        $array['check']='This Game is already exist'."\n";
        echo json_encode($array);

    }else{
        $query = "INSERT into game(gameName,unitName,photo,icon,aboutGame,link) VALUES('$gameName','$unitName','$photo','$icon','$aboutGame','$link')";
        $go_query = mysqli_query($conn,$query);
        if(!$go_query)
            {
                die("QUERY FAILED".mysqli_error());
                $array['queryFail']='Database Error'."\n";
                echo json_encode($array);

            }
        else{
                $query="SELECT * from adminwallet WHERE pointName='$unitName'";
                $go_query=mysqli_query($conn,$query);
                $check = mysqli_num_rows($go_query);

                if(!($check>0)){
                    $query = "INSERT INTO adminwallet(name,pointName,amount) VALUES('$gameName','$unitName',0)";
                    $queryResult = mysqli_query($conn,$query);
                }
                
            }
            $log="added new product(".$gameName.")";
            adminLog($adminid,$log);
            $array['success']="Add product Successfully"."\n";
            echo json_encode($array);
    }
    
}
?>