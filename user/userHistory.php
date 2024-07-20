<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");


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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>History</title>

</head>
<body>
   
    <?php include('./header.php')?>
   
    <div class="container my-5 py-5">
        <div class="dataFlow mt-5">
                        
                    <p class="h3 text-center p-3 fw-bold" style="color: #475569;">History</p>
                
                    <table class="roboto-serif-regular table-sm  align-middle mb-2" style=" width:100%; height:100vh" >
                        <thead>
                            <tr>
                            <!-- <th style="width:300px ;height:20px ;overflow:hidden">person 1</th>
                            <th class="text-center" style="width:500px ;height:20px ;overflow:hidden">about</th>
                            <th style="width:200px ;height:20px ;overflow:hidden">person 2</th> 
                            <th style="width:200px ;height:20px ;overflow:hidden">Date</th>  -->
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            
                            global $conn;
                            $key=$_SESSION['userid'];
                            $query = "SELECT * FROM `transitionctog` WHERE userid=$key ORDER BY operationTime DESC";
                            $go_query =mysqli_query($conn,$query);
                            // $dataQuery=dataList('transitionCtoG','operationTime');
                            while($row=mysqli_fetch_array($go_query)){
                                $userid = $row['userid'];
                                $userDetail = detail($userid,'user','userid');
                                $userName = $userDetail['username'];
                                $userPhoto = $userDetail['photo'];
                                $userEmail = $userDetail['email'];
                                $description = $row['description'];

                                $description = $row['description'];
                                $amount = $row['amount'];
                                $date = $row['operationTime'];

                                $gameid = $row['gameid'];
                                $gameData = detail($gameid,'game','gameid');
                                $pointName = $gameData['unitName'];

                                    echo "
                                    <tr>
                                    <td>
                                    <div class='d-flex align-items-center bg-image hover-zoom' style='position: relative;'>
                                

                                        <img
                                            src='../images/userPhoto/{$userPhoto}'
                                            alt=''
                                            style='width: 45px; height: 45px'
                                            class='rounded'
                                            />
                                            
                                        <div class='ms-3 text'>
                                            <p class='fw-bold mb-1'>{$userName}</p>
                                            <p class='mb-0'>{$userEmail}</p>
                                        </div>
                                        </div>
                                    </td>
                            
                                    <td class='text-center'>{$description}</td>
                                    <td>
                                    {$amount} {$pointName}
                                    </td>
                                    <td>
                                    {$date}
                                    </td>
                                    </tr>
                                    ";
                            };
                            ?>
                            
                        </tbody>
                        
                    </table>
                    
        </div>
    </div>
                
    <?php include('../footer.php') ?>
      
       
    
</body>
</html>