<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");
    
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        // $pointName = $_POST['pointName'];
        $gameid=$_POST['gameid'];
        $gameData = detail($gameid,'game','gameid');
        $pointName = $gameData['unitName'];
        $userid = $_POST['id'];
        $fee = ($amount *5)/100;

        $currentAmount = pointcheck('wallet',$userid,$pointName);
        
        $netAmount = $amount + $fee ;

        if($netAmount<$currentAmount){
            updatePoint($netAmount,$userid,'wallet',$pointName,'minus');
            transactionG($userid,$gameid,$amount,$fee,'withdraw');
            $log=" withdrawed ".$amount." (".$pointName.") to game id ".$gameid;
            userLog($userid,$log);
            // echo"<script>window.alert('Withdraw Successfully')</script>";
            header("Location:./userWallet.php");

        }else{
            echo"<script>window.alert('Unsufficient balance in your wallet')</script>";
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
    <title>Withdraw</title>
</head>
<body>
<?php include('./header.php')?>


    <div class="d-flex justify-content-center m-5 p-5"> 
    
            <div class="form" >
                <p class="h3 text-center p-3 fw-bolder" style="color: #475569;">Withdraw</p>
            
                <form class="fw-bold m-2 p-2" method="POST" action="#">
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['userid'];?>">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose Game</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="gameid">
                        <?php
                            $dataList = dataList("game","gameid");
                            while ( $row = mysqli_fetch_array($dataList) ) {
                                $gameName = $row['gameName'];
                                // $pointName = $row['unitName'];
                                $gameid = $row['gameid'];
                                ?>
                                <option value="<?php echo $gameid;?>"><?php echo $gameName;?></option>
                                <?php
                            }
                        ?>
                        </select>
                    </div>

                    <label for="amount">Amount</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="amount" id="amount" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">fill your amount<p>
                    </div>

                    <label for="gameId">Game ID</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="gameId" id="gameId" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Enter your game id<p>
                    </div>
                    
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" id="btn" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Withdraw</button>
                    </div>

                </form>

            </div>
                          
    </div>
</body>
</html>