<?php
  
  //To get login admin
  // session_start();
  $isUserLoggedIn = false;
  if ( isset($_SESSION['userEmail'])) {
    $isUserLoggedIn = true;
  }
  

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
    <style>

.change{
  /* display:none; */
  opacity: 0;
  z-index: -2;
}
</style>

</head>
<body>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
  
  <!-- Navbar -->
  <nav id="Nav" class="Nav NavColor navbar navbar-expand-lg fixed-top">

    <!-- Container wrapper -->
    <div class="container-fluid px-5">
      
        <!-- Left links -->
        <ul class="roboto-serif-regular navbar-nav me-auto mb-2 mb-lg-0 " id="unactive-text" >
          <li class="nav-item">
            <a href="../../index.php">
              <div class="roboto-serif-bold textColor d-flex align-items-center mt-2 mt-lg-0 fs-2 navbar-brand " style="color: #475569;">
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
            <i class="fas fa-bars " style="color: #475569;"></i>
          </button>

    
      
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <!-- Left links -->
          <ul class="roboto-serif-regular navbar-nav me-auto mb-2 mb-lg-0 m-auto ">

            <li class="nav-item mx-4 ">
              <a class="nav-link " style="color: #475569;" href="../../index.php">Home</a>
            </li>

            <li class="nav-item mx-4">

                <a 
                data-mdb-dropdown-init
                class="nav-link  roboto-serif-regular dropdown-toggle hidden-arrow" 
                href="../index.php" 
                role="button"
                style="color: #475569;"
                aria-expanded="false">
                  Wallet
                </a>

                  <ul
                  class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink" >

                    <li><a class="dropdown-item" href="<?php echo $isUserLoggedIn?"../../user/userWallet.php":"../login.php";?>">My Wallet</a></li>
                    <li><a class="dropdown-item" href="<?php echo $isUserLoggedIn?"../../user/cashIn.php":"../login.php";?>">Cash In</a></li>
                    <li><a class="dropdown-item" href="<?php echo $isUserLoggedIn?"../../user/cashOut.php":"../login.php";?>">Cash Out</a></li>
                    <li><a class="dropdown-item" href="<?php echo $isUserLoggedIn?"../../user/withDraw.php":"../login.php";?>">Withdraw</a></li>
                    <li><a class="dropdown-item" href="<?php echo $isUserLoggedIn?"../../user/transfer.php":"../login.php";?>">Transfer</a></li>
                  
                  </ul>

            </li>

            <li class="nav-item mx-4">

            <a
              class="nav-link roboto-serif-regular" 
              href="../../shop/shopList.php" 
              style="color: #475569;"
              >
                Shop
              </a>

            </li>

            <li class="nav-item mx-4">

                <a
                class="nav-link roboto-serif-regular" 
                href="../../games/gameList.php" 
                style="color: #475569;"
                >
                  Mini Game
                </a>

            </li>

          </ul>
          <!-- Left links -->

        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center" id="unactive-text">
            <!-- you can add more link here -->
          <div class="dropdown <?php echo !$isUserLoggedIn?"d-none":""?>" id="active-text">
              <a
                data-mdb-dropdown-init
                class="roboto-serif-regular text-reset me-3 dropdown-toggle hidden-arrow"
                href="../index.php"
                id="navbarDropdownMenuLink"
                role="button"
                aria-expanded="false">
              
                  <!-- to connect admin acount detail -->
                  <img src="../../images/userPhoto/<?php echo $_SESSION['userPhoto'];?>" height="35" alt="" class="ms-4 rounded shadow-lg" />                
              </a>

              <ul
                class="roboto-serif-regular dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink" >

                <li><a class="dropdown-item" href="../../user/userDetail.php">Account Detail</a></li>
                <li><a class="dropdown-item" href="../../user/userTransaction.php">Transcitions</a></li>
                <li><a class="dropdown-item" href="../../user/userHistory.php">History</a></li>
                <!-- you can add more link here -->
              </ul>
            </div>

            <!-- login logout btn -->
            <a href="../../user/logout.php" class="btn btn-danger px-2 <?php echo !$isUserLoggedIn?"d-none":""?>">LOGOUT</a>
            <a href="../../user/register.php" class="btn btn-primary px-2 <?php echo $isUserLoggedIn?"d-none":""?>">REGISTER</a>
            <a href="../../login.php" class="btn btn-success px-2 ms-3 <?php echo $isUserLoggedIn?"d-none":""?>">LOGIN</a>
            <div class="d-flex justify-content-center align-items-center ms-4" style="position:relative;">
              <button id="Dn" class=" fs-3 btn btn-link" style="position:absolute;transition: 2s ;color: #475569;background-color:transparent;margin:auto;"><i class="fa-solid fa-sun"></i></button>
              <button id="Dn1" class="change fs-3 btn btn-link" style="position:absolute;transition: 2s ; color: #475569 ;background-color:transparent;margin:auto;"><i class="fa-solid fa-moon"></i></button>
            </div>
          
        </div>
      <!-- Right elements -->

    </div>
    <!-- Container wrapper -->
    
  </nav>
  <!-- Navbar -->
</body>
<script>

var Dn = document.getElementById('Dn');
var Dn1 = document.getElementById('Dn1');
var nav = document.getElementById('Nav');

// sessionStorage.setItem("mode", "day");

var mode = sessionStorage.getItem("mode");
// var elements = document.querySelector('.textwhite');

// var nav=document.getElementByTagName('nav');
// var body = Na

function dnChange(){
  Dn.classList.toggle("change");
   Dn1.classList.toggle("change");
   console.log("hello");
  document.body.removeAttribute("id");
  nav.classList.remove("NavColor1");
  nav.classList.add("NavColor");
  sessionStorage.setItem("mode", "day");


    // elements.style.color='#0000';
}

function dn1Change(){

  Dn1.classList.toggle("change");
   Dn.classList.toggle("change");
   console.log("hello1");
   document.body.setAttribute("id","DNmode");
  nav.classList.add("NavColor1");
  nav.classList.remove("NavColor");
  sessionStorage.setItem("mode", "night");


  // elements.style.color='#cbd5e1';
}


if(mode == "day"){
  dnChange();
}else if(mode == "night"){
  dn1Change();
}
Dn.addEventListener("click",dnChange)

Dn1.addEventListener("click",dn1Change)

</script>
</html>