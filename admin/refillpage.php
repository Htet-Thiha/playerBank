<?php
//to connect database
include("../db/connection.php");
//functions
include("../function/function.php");

if(isset($_POST['submit'])){
    
    $pointName = $_POST['pointName'];
    $qty = $_POST['qty'];
    $gameName = $_POST['gameName'];

    $serachData = search($pointName,"adminWallet","pointName");

    $data = mysqli_fetch_array($serachData);

    $id = $data['adminWalletid'];

    $amount = $data['amount'];
    $amount+= $qty;

    edit("adminWallet","amount",$amount,$id);

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

      <!-- Css -->
      <link rel="stylesheet" href="../css/sheetDesign.css">

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
    <title>Document</title>
</head>
<body>
    
    <?php include('./adminHeader.php') ?>

    <div class="d-flex justify-content-center p-5 m-5"> 
          
           
            <div class="form">
                <p class="h3 text-center p-3 text-light">Refill Points</p>
                
                <form class="text-light m-2 p-2" action="" method="POST">
                    <!-- PointName input -->
                    <label for="form2Example1">Points Name</label>
                    <div data-mdb-input-init class="form-outline">
                        
                        <input type="text" name="pointName" id="form2Example1" class="form-control" required/>
                        <p class="form-label text-white-50" for="form2Example1">Diamond<p>
                    </div>

                    <!-- Qty input -->
                    <label for="form2Example2">Qty</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="qty" id="form2Example2" class="form-control" required/>
                        <p class="form-label text-white-50" for="form2Example2">Qty</p>
                    </div>

                      <!-- GameTitle input -->
                      <label for="form2Example3">Game Title</label>
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="gameName" id="form2Example3" class="form-control" />
                        <p class="form-label text-white-50" for="form2Example2">GameTitle</p>
                    </div>

                     <!-- Submit button -->
                     <div class="m-2 p-2">
                    <button type="submit" name="submit" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                    style="background-color:hsl(286, 61%, 92%)">Insert</button>
                    </div>
                    

                    
                </form>

            </div>
                   
    </div>
    <?php include('../footer.php') ?>      

                
        
</body>
</html>