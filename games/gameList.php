<?php
  
  //To get login admin
  session_start();
  include("../db/connection.php");
  include("../function/function.php");

  $simonData = detail('1','miniGame','id');
  $memoaryData = detail('2','miniGame','id');

  $simonName = $simonData['gameName'];
  $simonAbout = $simonData['about'];
  $simonPhoto = $simonData['photo'];

  $memoaryName = $memoaryData['gameName'];
  $memoaryAbout = $memoaryData['about'];
  $memoaryPhoto = $memoaryData['photo'];


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
        <div  class="game-container w-100 d-flex align-items-center border rounded" style="height: 200px;">
            <div class="image-container mx-4 w-25">
                <img class="image-container w-100" src="<?php  echo $simonPhoto?>"/>
            </div>
            <div class="detail-container ">
                <div class="title fs-3"><?php echo $simonName ?></div>
                <div class="description my-3">
                    <?php echo $simonAbout ?>
                </div>
                <a  href="./simongame/index.php" class="btn btn-success start-button" type="submit">Play</a>
            </div>
        </div>

        <br>
        
    </div>

    <div class="container pt-5">
        <div  class="game-container w-100 d-flex align-items-center border rounded" style="height: 200px;">
            <div class="image-container mx-4 w-25">
                <img class="image-container w-100" src="<?php  echo $memoaryPhoto?>"/>
            </div>
            <div class="detail-container ">
                <div class="title  fs-3"><?php echo $memoaryName ?></div>
                <div class="description  my-3">
                    <?php echo $memoaryAbout ?>
                </div>
                <a  href="./memoryDiceGame/index.php" class="btn btn-success start-button" type="submit">Play</a>
            </div>
        </div>

        <br>
        
    </div>

    <?php
        include("./footer.php");
    ?>
</body>
</html>