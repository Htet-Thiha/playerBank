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

      //add admin log
      $adminid =$_POST['adminid'];

      $query = "SELECT MAX(adminid) FROM `admin`";
      $go_query = mysqli_query($conn,$query);
      $lastid = mysqli_fetch_array($go_query)['MAX(adminid)'];
      $lastid=$lastid+1;
  
      $log="created new admin id(".$lastid.")";
  
      adminLog($adminid,$log);
      
    // Retrieve image path from POST data
    $formdata =[
        "imgPath" => $_POST['img'],
        "adminEmail" => $_POST['email'],
        "adminName" => $_POST['name'],
        "adminPhone" => $_POST['phone'],
        "adminPassword" => $_POST['password'],
        "cPassword" => $_POST['cpassword'],
    ];

    //upload to db and return key
    admin_register($formdata);

  

    
}
?>