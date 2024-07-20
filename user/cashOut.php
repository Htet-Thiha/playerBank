<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

      session_start();

    
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $accountName = $_POST['accountName'];
        $accountNumber = $_POST['accountNumber'];
        $id = $_POST['id'];

        $currentAmount = pointcheck('wallet',$id,'mmk');

        if($amount<$currentAmount+1000){

            cashOut($amount,$accountName,$accountNumber,$id);
            $log="cashed out ".$amount." to account number ".$accountNumber." account name ".$accountName;
            userLog($id,$log);
            header("location:./userWallet.php");
        }else{
            echo"<script>window.alert('Sufficient balance in your wallet')</script>";
        }
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
    <title>Cash Out</title>
</head>
<body>
<?php include('./header.php')?>


    <div class="d-flex justify-content-center m-5 p-5"> 
    
            <div class="form" >
                <p class="h3 text-center p-3 fw-bolder" style="color: #475569;">Cash Out</p>
            
                <form class="fw-bold m-2 p-2" method="POST" action="">
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['userid'];?>">
                    <label for="amount">Amount</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="amount" id="amount" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">fill your amount<p>
                    </div>

                    <label for="accountName">Account Name</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="accountName" id="transcionId" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Enter your account name<p>
                    </div>

                    <label for="accountNumber">Account Number</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="accountNumber" id="transcionId" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Enter your account number<p>
                    </div>
                    
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" id="btn" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Cash Out</button>
                    </div>

                </form>

            </div>
                          
    </div>
</body>
</html>