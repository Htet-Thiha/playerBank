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

    
    <div class="game-main-container w-75 p-5 m-auto my-5 text-center" style="color: #475569;">
        <div class="timer fs-3" style="color: #475569;">0 Sec remaining</div>
        <div class="main-wrapper">
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="item"><img src=""></div>
            <div class="congrat-text-wrapper">
                Congratulations
            </div>
        </div>
        <div class="button-wrapper mb-5">
            <button class="reset-button">BACK</button>   
            <button class="start-button">PLAY</button>
            
        </div>
    </div>


    <?php
        include("./footer.php");
    ?>
    

    <script src="script.js"></script>
</body>
</html>