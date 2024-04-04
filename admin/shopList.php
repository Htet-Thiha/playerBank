<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="../css/sheetDesign.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>Shop List</title>

</head>
<body>
   
    <?php include('./adminHeader.php')?>
    
    <div class="container my-5 py-5">
        <div class="viewboxes text-center ">

            <div  class="viewbox shadow-2-strong mx-2" style="background-image:url('../images/mlbb.jpg');background-size: cover;background-position: center; background-repeat: no-repeat;">
                <a href="gameDetail.php" class="text-light fs-5 rounded px-5 py-2" style=" background-color: rgba(0, 0, 0, 0.629);">
                    Mobile Legend
                </a>
                <div class="d-flex gap-3 mt-3 justify-content-center">
                    <a class="btn bg-success">Update</a>
                    <a class="btn bg-danger">Delete</a>
                </div>
            </div>
            <div href="#" class="viewbox shadow-2-strong mx-2" style="background-image:url('../images/mlbb.jpg');background-size: cover;background-position: center; background-repeat: no-repeat;">
                <a class="text-light fs-5 rounded px-5 py-2" style=" background-color: rgba(0, 0, 0, 0.629);">
                    Mobile Legend
                </a>
                <div class="d-flex gap-3 mt-3 justify-content-center">
                    <div class="btn bg-success">Update</div>
                    <div class="btn bg-danger">Delete</div>
                </div>
            </div>
            <div href="#" class="viewbox shadow-2-strong mx-2" style="background-image:url('../images/mlbb.jpg');background-size: cover;background-position: center; background-repeat: no-repeat;">
                <a class="text-light fs-5 rounded px-5 py-2" style=" background-color: rgba(0, 0, 0, 0.629);">
                    Mobile Legend
                </a>
                <div class="d-flex gap-3 mt-3 justify-content-center">
                    <div class="btn bg-success">Update</div>
                    <div class="btn bg-danger">Delete</div>
                </div>
            </div>


        </div>
    </div>
   
        
    <?php include('../footer.php') ?>
    
</body>
</html>