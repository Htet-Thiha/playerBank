<?php

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

      <!-- Css -->
      <!-- <link rel="stylesheet" href="design.css"> -->

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
    />
    <title>Footer</title>
</head>
<body>
   <!-- Footer -->
    <!-- Footer -->
<footer class="roboto-serif-regular text-center text-lg-start  text-light" style="background-color:hsla(300, 38%, 15%, 0.496);">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center p-4">
    <!-- Left -->
    
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.google.com" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instargram.com" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.github.com" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section >
    <div class="container text-center text-md-start">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class=" col-md-5 col-lg-4 mx-auto col-xl-3 mb-4">
          <!-- Content -->
          <img src="https://i.ibb.co/dQbH8m3/game11.png" height="50" alt="game icon" class="gameicon" />
       
           <span class="roboto-serif-bold fs-2">PlayerBank</span> 
     
         
     
          <p>
           Play Games Anytime Anywhere.

          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Shop
          </h6>
          <p>
            <a href="./shop/shopDetail.php?id=1" class="text-reset">Mobile Legends</a>
          </p>
          <p>
            <a href="./shop/shopDetail.php?id=2" class="text-reset">PUBG</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="<?php echo $isUserLoggedIn?"./user/userWallet.php":"./login.php";?>" class="text-reset">Wallet</a>
          </p>
          <p>
            <a href="<?php echo $isUserLoggedIn?"./shop/shopList.php":"./login.php";?>" class="text-reset">Shop</a>
          </p>
          <p>
            <a href="./games/gameList.php" class="text-reset">Mini games</a>
          </p>
          <p>
            <a href="./index.php" class="text-reset">Back to homepage</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p>
            <i class="fas fa-envelope me-3"></i>
            plyaerbank@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 95 234 567 888</p>
          <p><i class="fas fa-print me-3"></i> + 95  234 567 896</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    by Playerbank.com
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
    
                
        
</body>
</html>