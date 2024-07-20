<?php
  
  //To get login admin
  session_start();
  include("../db/connection.php");
  include("../function/function.php");
  viewerCount();


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

    <title>Player Bank</title>

    <style>
        .hidden {
            opacity: 0%;
            transform: translateX(-100%);
            transition: all 2s;
            overflow:hidden;
        }

        .hidden2 {
            opacity: 0%;
            transform: translateX(100%);
            transition: all 2s;
            overflow:hidden;

        }
        .show {
            opacity: 100%;
            transform: translateX(0);
        }
        @media(prefers-reduced-motion) {
            .hidden {
                transition: none;
            }
            ;
            .hidden2 {
                transition: none;
            }
        }
    </style>

</head>
<body style="overflow-x:hidden">

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
    -->
    <?php include("./header.php") ?>

    <!-- Carousel wrapper -->
    <div class="CarouselWrapper w-100 mt-5 pt-4" >
        <div id="carouselMaterialStyle" class="carousel slide carousel-fade pt-1 " data-mdb-ride="carousel" data-mdb-carousel-init>

            <!-- Inner -->
            <div class="carousel-inner rounded-5 shadow-4-strong" style="height:70vh;position:relative">
                <!-- Single item --> 
                <div class="carousel-item active m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/mlbb.jpg" class="d-block w-100"
                    alt="Sunset Over the City" />
                </div>

                <!-- Single item -->
                <div class="carousel-item m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/pubg.jpeg" class="d-block w-100"
                    alt="Canyon at Nigh" />
                </div>

                <!-- Single item -->
                <div class="carousel-item m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/dota2.jpg" class="d-block w-100"
                    alt="Cliff Above a Stormy Sea" />
                </div>

                <!-- Single item --> 
                <div class="carousel-item active m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/codbg.jpg" class="d-block w-100"
                    alt="Sunset Over the City" />
                </div>

                <!-- Single item --> 
                <div class="carousel-item active m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/valbg.jpg" class="d-block w-100"
                    alt="Sunset Over the City" />
                </div>

                <!-- Single item --> 
                <div class="carousel-item active m-auto" data-bs-interval="10000" style="position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <img src="../images/pesbg.jpg" class="d-block w-100"
                    alt="Sunset Over the City" />
                </div>

            </div>

            
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!-- Carousel wrapper -->

    <!-- advertise session -->
    <div class="container-fluid my-5">
        <div class="row  p-auto mx-3">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center hidden">
                <img src="../images/gameBundle.png" class="w-75" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center hidden2">
                <div class="word">
                    <h3 class="fs-1 fw-bold">Every Player Need</h3>
                    <h3 class="fs-1 fw-bold">A Player Bank....</h3>
                    <p class="mt-4">Enjoy the seemless experiance by creating an account for purchasing varieties of digital game's currancy in ONE place anytime you want!</p>
                    <a href="./register.php" class="btn p-3 btn-primary mt-3"data-mdb-ripple-init>Creat Your Own</a>
                </div> 
            </div>
        </div>
    </div>
    <!-- advertise session end -->
  
    <!-- shops session -->
    <div class="container-fluid">
        <div class="word mx-3 ">
            <h2 class="">Recently Added</h2>
            <hr class="pt-1 bg-light"/>
        </div>
        <div class="shop-list m-5 hidden">
            <div class="row m-auto align-items-center">
                <?php
                $newest = 0;
                $data=datalist('game','gameid');
                 while($row=mysqli_fetch_array($data)){
                    $icon = $row['icon'];
                    $id = $row['gameid'];
                    $newest++;
                    echo"
                    <div class='col-lg-3 col-md-4 col-sm-6'>
                        <div class='img-wrapper pt-3'>
                            <a href=''>
                                <img src='{$icon}' alt='' class='rounded ratio ratio-1x1'>
                            </a>
                        </div>
                        <a href='../shop/shopDetail.php?id={$id}' class='btn btn-success mt-3 w-100'>Check Now</a>
                    </div>
                    ";
                    if($newest==4){
                        break;
                    }
                 }
                ?>
                
            </div>
        </div>
    </div>
    <!-- shop session end -->

    <!-- game session -->
    <div class="container-fluid">
        <div class="word mx-3">
            <h2 class="">Let's play to earn</h2>
            <hr class="pt-1 bg-light"/>
        </div>
        <div class="game1 my-5">
            <div class="row p-auto mx-3">
                        <?php
                            $game1Data = detail(1,'minigame','id');

                            $gameName = $game1Data['gameName'];
                            $gameAbout = $game1Data['about'];
                            $gamePhoto = $game1Data['photo'];

                        ?>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center hidden">
                    <img src="<?php echo $gamePhoto ;?>" class="w-50" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  d-flex align-items-center hidden2">
                    <div class="word">
                        <h3 class="fs-1 fw-bold"><?php echo $gameName ;?></h3>
                        <span class="text-success">5 win 10 point </span>
                        <p class="mt-3"><?php echo $gameAbout ;?></p>
                        <a href="../games/memoryDiceGame/index.php" class="btn p-3 btn-success mt-4">Creat Your Own</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="game2 my-5">
            <div class="row p-auto mx-3">
                        <?php
                            $game2Data = detail(2,'minigame','id');

                            $gameName = $game2Data['gameName'];
                            $gameAbout = $game2Data['about'];
                            $gamePhoto = $game2Data['photo'];

                        ?>
                <div class="col-lg-6 col-md-6 col-sm-12  d-flex align-items-center hidden">
                    <div class="word">
                        <h3 class="fs-1 fw-bold">Flow The Beat</h3>
                        <span class="text-success">1 win 1 point </span>
                        <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis amet a dignissimos? Nisi, incidunt minus! Placeat nemo totam mollitia dolor magni cumque quasi inventore sed!</p>
                        <a href="../games/simongame/index.php" class="btn p-3 btn-success mt-4">Creat Your Own</a>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center hidden2">
                <img src="<?php echo $gamePhoto ;?>" class="w-50" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- game session end -->

    <!-- wallet adv session -->
    <div class="container-overflow text-center bg-image" style=" background-image: url('../images/homebg.jpg');width:100%;">
        <div class="wallet-adv-wrapper py-5" style="backdrop-filter: brightness(40%);height:100%">
            <div class="img">
                <img src="https://i.ibb.co/dQbH8m3/game11.png" height="100" alt="game icon" class="gameicon" />
            </div>
            <div class="word-and-feature p-3">
                <h3 class="fs-4 ">Let's start 
                    <a href="<?php echo $isUserLoggedIn?"cashIn.php":"../login.php";?>" class="text-success">| CASH IN |</a>
                    <a href="<?php echo $isUserLoggedIn?"cashOut.php":"../login.php";?>" class="text-success">CASH OUT |</a>
                    <a href="<?php echo $isUserLoggedIn?"transfer.php":"../login.php";?>" class="text-success">TRANSFER |</a>
                    <a href="<?php echo $isUserLoggedIn?"withDraw.php":"../login.php";?>" class="text-success">WITHDRAW |</a>
                    NOW!!!
                </h3>
                <p class="w-75  m-auto my-3">
                    Lorem ipsum dolor sit amet consectetur Impedit ab pariatur laborum dicta, accusamus excepturi alias necessitatibus corrupti laudantium soluta, molestiae, explicabo nostrum voluptatibus commodi.uta, molestiae, explicabo nostrum voluptatibus commodi.uta, molestiae, explicabo nostrum voluptatibus commodi.
                </p>
            </div>
            <a href="../login.php"><div class="btn btn-success my-2 text-center"data-mdb-ripple-init>LOGIN NOW</div></a>
        </div>
    </div>
    <!-- wallet adv session end -->

    <?php
        include("../footer.php");
    ?>
</body>
<script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry)
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            })
        });

        const hiddenElements = document.querySelectorAll('.hidden');
        hiddenElements.forEach((el) => observer.observe(el));

       

        const hiddenElements2 = document.querySelectorAll('.hidden2');
        hiddenElements2.forEach((el) => observer.observe(el));
    </script>
</html>