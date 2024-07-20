<?php
  
  //To get login admin
  session_start();
  
  include("../db/connection.php");
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Css link -->
    <link rel="stylesheet" href="../css/sheetDesign.css">
    <link rel="stylesheet" href="style.css">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>Player Bank</title>


</head>
<body>

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
    -->
    <?php include("header.php") ?>

    
    <div class="container pt-5 mt-5">
        
    <div class="container-fluid">
        <div class="word mx-3">
            <h2 class="">Store</h2>
            <hr class="pt-1 bg-light">
        </div>
        <div class="shop-list my-5">
            <div class="row mb-5 mx-5">
                <?php
                $data=datalist('game','gameid');
                 while($row=mysqli_fetch_array($data)){
                    $icon = $row['icon'];
                    $id = $row['gameid'];
                    echo"
                    <div class='col-lg-3 col-md-4 col-sm-6'>
                        <div class='img-wrapper mt-5'>
                            <a href=''>
                                <img src='{$icon}' alt='' class='rounded ratio ratio-1x1'>
                            </a>
                        </div>
                        <a href='./shopDetail.php?id={$id}' class='btn btn-success mt-3 w-100'>Buy now</a>
                    </div>
                    ";
                 }
                ?>
                
            </div>
        </div>
        </div>
    </div>


    <?php
        include("./footer.php");
    ?>
</body>
</html>