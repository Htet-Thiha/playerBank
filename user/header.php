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
  
  <!-- Navbar -->
  <nav class="Nav navbar navbar-expand-lg fixed-top">

    <!-- Container wrapper -->
    <div class="container-fluid px-5">
      
        <!-- Left links -->
        <ul class="roboto-serif-regular navbar-nav me-auto mb-2 mb-lg-0 " id="unactive-text" >
          <li class="nav-item">
            <a href="../index.php">
              <div class="roboto-serif-bold textColor d-flex align-items-center mt-2 mt-lg-0 fs-2 navbar-brand text-light">
                <img src="https://i.ibb.co/dQbH8m3/game11.png" height="40" alt="game icon" class="gameicon" />
                  PlayerBank
              </div>
            </a>
          </li>
          <!-- you can add more link here -->
        </ul>
        <!-- Left links button -->
          <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

    
      
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto ">

            <li class="nav-item mx-4 ">
              <a class="nav-link text-light" href="../index.php">Home</a>
            </li>

            <li class="nav-item mx-4">

                <a 
                data-mdb-dropdown-init
                class="nav-link text-light roboto-serif-regular dropdown-toggle hidden-arrow" 
                href="../index.php" 
                role="button"
                aria-expanded="false">
                  Wallet
                </a>

                  <ul
                  class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink" >

                    <li><a class="dropdown-item" href="userWallet.php">My Wallet</a></li>
                    <li><a class="dropdown-item" href="./adminDashboard.php">Cash In</a></li>
                    <li><a class="dropdown-item" href="userlist.php">Cash Out</a></li>
                    <li><a class="dropdown-item" href="adminList.php">Withdraw</a></li>
                    <li><a class="dropdown-item" href="refillpage.php">Transfer</a></li>
                  
                  </ul>

            </li>

            <li class="nav-item mx-4">

                <a 
                data-mdb-dropdown-init
                class="nav-link text-light roboto-serif-regular dropdown-toggle hidden-arrow" 
                href="../index.php" 
                role="button"
                aria-expanded="false">
                  Shop
                </a>

                  <ul
                  class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink" >

                    <li><a class="dropdown-item" href="./adminDashboard.php">Mobile Legend</a></li>
                    <li><a class="dropdown-item" href="userlist.php">PUBG</a></li>
                    <li><a class="dropdown-item" href="adminList.php">Dota 2</a></li>
                    <li><a class="dropdown-item" href="refillpage.php">Csgo</a></li>
                  
                  </ul>

            </li>

            <li class="nav-item mx-4">

                <a 
                data-mdb-dropdown-init
                class="nav-link text-light roboto-serif-regular dropdown-toggle hidden-arrow" 
                href="../index.php" 
                role="button"
                aria-expanded="false">
                  Mini Game
                </a>

                  <ul
                  class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink" >

                    <li><a class="dropdown-item" href="./adminDashboard.php">Memory Card</a></li>
                    <li><a class="dropdown-item" href="userlist.php">Flow The Beat</a></li>
                    <li><a class="dropdown-item" href="adminList.php">Rock Paper Sissor</a></li>
                  
                  </ul>

            </li>

          </ul>
          <!-- Left links -->

        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center" id="unactive-text">
            <!-- you can add more link here -->
          <div class="dropdown" id="active-text">
              <a
                data-mdb-dropdown-init
                class="roboto-serif-regular text-reset me-3 dropdown-toggle hidden-arrow"
                href="../index.php"
                id="navbarDropdownMenuLink"
                role="button"
                aria-expanded="false">
              
                  <!-- to connect admin acount detail -->
                  <img src="https://i.ibb.co/mCrXjmZ/122442587-783026758912618-238755159588701890-n.jpg" height="35" alt="" class="ms-4 rounded" />                
              </a>

              <ul
                class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink" >

                <li><a class="dropdown-item" href="./adminDashboard.php">Account Detail</a></li>
                <li><a class="dropdown-item" href="userlist.php">Transcitions</a></li>
                <li><a class="nav-link p-4 position-relative" data-mdb-ripple-init data-mdb-ripple-unbound="true" href="message.php">Messages
                    <span class="position-absolute translate-middle badge rounded-pill bg-secondary" style="top:35px ; left:120px">
                      20 
                    </span></a>
                </li>
                <!-- you can add more link here -->
              </ul>
            </div>

            <!-- login logout btn -->
            <div class="btn btn-danger px-2">LOGOUT</div>
          
        </div>
      <!-- Right elements -->

    </div>
    <!-- Container wrapper -->
    
  </nav>
  <!-- Navbar -->
</body>
</html>