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
    <link rel="stylesheet" href="../css/sheetDesign.css">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>User Header</title>

</head>
<body>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
  
    <!-- user wallet session -->
    <div class="container mx-5">
        <div class="img-wrapper mt-5 d-flex align-items-center">
            <img src="https://i.ibb.co/mCrXjmZ/122442587-783026758912618-238755159588701890-n.jpg" height="120" alt="" class=" rounded" />      
            <div class="profile-name text-light ms-4">
                <h3>Htet Thiha</h3>
            </div>      
        </div>
        <div class="pt-1 bg-light mt-5"></div>
        <div class="button-wrapper text-light mt-5">
            <div class="btn text-light btn-success me-3">Cash In</div>
            <div class="btn text-light btn-success mx-3">Cash Out</div>
            <div class="btn text-light btn-success mx-3">Withdraw</div>
            <div class="btn text-light btn-success mx-3">Transfer</div>
        </div>
        <div class="point-wrapper mt-5">
            <div class="row point">
                <div class="col-4 d-flex align-items-center mb-2 w-25">
                    <div class="logo-wrapper w-25 text-center">
                        <div class="logo text-light fs-3 "><i class="fa-solid fa-dollar-sign"></i></div>
                    </div>
                    <div class="fs-3 text-light mx-3">-</div>
                    <div class="amount fs-3 text-light">1000</div>
                </div>
                <div class="col-4 d-flex align-items-center mb-2 w-25">
                    <div class="logo-wrapper w-25 text-center">
                        <div class="logo text-light fs-3 "><i class="fa-regular fa-gem"></i></div>
                    </div>
                    <div class="fs-3 text-light mx-3">-</div>
                    <div class="amount fs-3 text-light">1000</div>
                </div>
                <div class="col-4 d-flex align-items-center mb-2 w-25">
                    <div class="logo-wrapper w-25 text-center">
                        <div class="logo text-light fs-3 "><img src="https://i.ibb.co/dQbH8m3/game11.png" height="35" alt="game icon" class="gameicon"/></div>
                    </div>
                    <div class="fs-3 text-light mx-3">-</div>
                    <div class="amount fs-3 text-light">1000</div>
                </div>
                <div class="col-4 d-flex align-items-center mb-2 w-25">
                    <div class="logo-wrapper w-25 text-center">
                        <div class="logo text-light fs-3 "><img src="https://i.ibb.co/dQbH8m3/game11.png" height="35" alt="game icon" class="gameicon"/></div>
                    </div>
                    <div class="fs-3 text-light mx-3">-</div>
                    <div class="amount fs-3 text-light">1000</div>
                </div>
                <div class="col-4 d-flex align-items-center mb-2 w-25">
                    <div class="logo-wrapper w-25 text-center">
                        <div class="logo text-light fs-3 "><img src="https://i.ibb.co/dQbH8m3/game11.png" height="35" alt="game icon" class="gameicon"/></div>
                    </div>
                    <div class="fs-3 text-light mx-3">-</div>
                    <div class="amount fs-3 text-light">1000</div>
                </div>
            </div>
        </div>
    </div>

    <!-- user walllet session end -->
</body>
</html>