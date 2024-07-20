<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");
    
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $FpointName = $_POST['pointName'];
        $pointName = $FpointName;
        $userid = $_POST['id'];
        $receiverNumber = $_POST['receiverNumber'];

        $currentAmount = pointcheck('wallet',$userid,$pointName);
        
        // header("Location:./userWallet.php");
        // echo "
        // <script>console.log({$currentAmount})</script>
        // ";

        if($amount<$currentAmount){
            if ( totalNumber($receiverNumber,"user","phone") != 0 ) {
                $receiverData = detail($receiverNumber,"user","phone");
                $receiverId = $receiverData['userid'];
                $receiverUsername = $receiverData['username'];
                if ( !totalNumberUsingUserId($pointName,"wallet","pointName",$receiverId) ) {
                    addWalletRow($receiverId,$receiverUsername,$pointName);
                }
                updatePoint($amount,$userid,'wallet',$pointName,'minus');
                updatePoint($amount,$receiverId,'wallet',$pointName,'plus');

                transactionC($userid,$receiverId,$amount,$pointName,NULL);

                $log="transfered ".$amount."( ".$pointName." ) to ".$receiverUsername;
                userLog($userid,$log);
                echo"<script>window.alert('Transfer Successfully')</script>";
                header("Location:./userWallet.php");

            }else{
                echo"<script>window.alert('Receiver not found')</script>";
            }
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
    <title>Transfer</title>
</head>
<body>
<?php include('./header.php')?>


    <div class="d-flex justify-content-center m-5 p-5"> 
    
            <div class="form" >
                <p class="h3 text-center p-3 fw-bolder" style="color: #475569;">Transfer</p>
            
                <form class="fw-bold m-2 p-2" method="POST" action="#">
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['userid'];?>">

                    <label for="receiverNumber">Receiver Number</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="receiverNumber" id="receiverNumber" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Enter receiver phone number<p>
                    </div>

                    <label for="amount">Amount</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="amount" id="amount" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Enter amount to transfer<p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose Unit</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="pointName">
                        <?php
                            $userId = $_SESSION['userid'];
                            $dataListQuery = "SELECT * FROM wallet WHERE userid=$userId";
                            $dataList = mysqli_query($conn,$dataListQuery);
                            while ( $row = mysqli_fetch_array($dataList) ) {
                                $pointName = $row['pointName'];
                                echo"
                                <option value='{$pointName}'>{$pointName}</option>";
                                
                            };
                        ?>
                        </select>
                    </div>
                    
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" id="btn" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Transfer</button>
                    </div>

                </form>

            </div>
                          
    </div>
</body>
</html>