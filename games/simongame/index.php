<?php
  
  //To get login admin
  session_start();


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
    <link rel="stylesheet" href="../../css/sheetDesign.css">
    <link rel="stylesheet" href="style.css">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>Player Bank</title>


</head>
<body>

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
    -->
    <?php include("./header.php") ?>

    <div class="game-main-container w-75 p-5 mt-5 m-auto">
        <div class="title fw-bold" style="color: #475569;">Simon Game</div>
            <div class="simon_container">
                <div class="progressBarContainer">
                    <div class="progressBar"></div>
                </div>
                <div class="levelContainer">Level 1</div>
                <div class="colorContainer">
                    <div class="top side">
                        <div class="color yellow"></div>
                        <div class="color red"></div>
                    </div>
                    <div class="bottom side">
                        <div class="color green"></div>
                        <div class="color blue"></div>
                    </div>
                </div>
                <div class="goLabel" style="color: #475569;">
                    Go!
                </div>
                <div class="buttonContainer">
                    <button class="btn btn-warning startButton">Start game!</button>
                    <a class="btn btn-primary backButton" href="../gameList.php">Back</a>
                </div>
        </div>
    </div>



    <?php
        include("./footer.php");
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>