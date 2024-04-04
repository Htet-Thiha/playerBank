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

    <title>Admin Dashboard</title>

</head>
<body>
   
    <?php include('./adminHeader.php')?>
   
        <div class="d-flex justify-content-center mt-5 p-5" > 
           
            <div class="mainbody px-5" style="width: 100%;">

                <div class="viewboxes text-center mt-2">

                    <div class="viewbox shadow-2-strong mx-2 bg-dark" >
                        <p class="text-light fs-5">
                            Visitors
                                <span>
                                    <?php
                                        $month=date('F');
                                        echo ($month);
                                    ?>
                                </span>
                        </p>
                        
                        <p class="text-light fs-2">
                            <?php
                            echo(viewerCheck());
                            ?>
                        </p>
                    </div>

                    <div class="viewbox shadow-2-strong mx-2 bg-dark" >
                        <p class="text-light fs-5">
                                New Users 
                                <span>
                                <?php
                                        $month=date('F');
                                        echo ($month);
                                    ?>
                                </span>
                        </p>
                        
                        <p class="text-light fs-2">
                        <?php
                            echo(newUserCheck(false));
                            ?>
                        </p>
                    </div>

                    <div class="viewbox shadow-2-strong mx-2 bg-dark">
                        <p class="text-light fs-5">
                        Active Users
                        </p>
                        <p class="text-light fs-2">
                        <?php
                            echo(userStatusCheck());
                            ?>
                        </p>
                    </div>

                    <a href="shopList.php" class="viewbox shadow-2-strong mx-2" >
                        <p class="text-light fs-5">
                            Shop
                                <!-- <span>in March</span> -->
                        </p>
                        
                        <p class="text-light fs-2">
                        <?php
                            echo(total('game'));
                            ?>
                        </p>
                    </a>

                    <a href="#" class="viewbox shadow-2-strong mx-2" >
                        <p class="text-light fs-5">
                            Mini Games
                                <!-- <span>in March</span> -->
                        </p>
                        
                        <p class="text-light fs-2">
                        <?php
                                echo(total('minigame'));
                                ?>
                            </p>
                        </p>
                    </a>

                    <a href="./userlist.php" class="viewbox shadow-2-strong mx-2">
                        <p class="text-light fs-5">
                            Total Users
                        </p>
                        <p class="text-light fs-2">
                        <?php
                            echo(total('user'));
                            ?>
                        </p>
                    </a>

                    <a href="./adminList.php" class="viewbox shadow-2-strong mx-2">
                        <p class="text-light fs-5">
                            Admin List
                        </p>
                        <p class="text-light fs-2">
                        <?php
                            echo(total('admin'));
                            ?>
                        </p>
                    </a>

                </div>

                <div class="dataFlow mt-5">
                    
                    <p class="h3 text-center p-3 text-light">Data Flow</p>
                   
                    <table class="roboto-serif-regular table-sm text-light align-middle mb-2" style=" width:100%; height:100vh" >
                        <thead>
                            <tr>
                            <th style="width:400px ;height:20px ;overflow:hidden">User</th>
                            <th class="text-center" style="width:500px ;height:20px ;overflow:hidden">Message</th>
                            <th style="width:200px ;height:20px ;overflow:hidden">Date</th> 
                            
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $dataQuery=dataList('transitionCtoG','operationTime');
                            while($row=mysqli_fetch_array($dataQuery)){
                                $gameDetail = detail($row['gameid'],'game','gameid');
                                $userDetail = detail($row['userid'],'user','userid');
                                $userImg=$userDetail['photo'];
                                $userName=$userDetail['username'];
                                $userEmail = $userDetail['email'];
                                $amount = $row['amount'];
                                $unitName=$gameDetail['unitName'];
                                $time=$row['operationTime'];

                                echo "
                                <tr>
                                <td>
                                <div class='d-flex align-items-center bg-image hover-zoom' style='position: relative;'>
                                

                                    <img
                                        src='./images/{$userImg}'
                                        alt=''
                                        style='width: 45px; height: 45px'
                                        class='rounded-circle'
                                        />
                                        <span style='width: 10px; height:10px; border-radius:50% ; background-color:red;
                                        position:absolute; top:3px ; left:40px '></span>
                                    <div class='ms-3 text'>
                                        <p class='fw-bold mb-1'>{$userName}</p>
                                        <p class='text-white-50 mb-0'>{$userEmail}</p>
                                    </div>
                                    </div>
                                </td>
                            
                                <td class='text-center'>Buy {$amount} {$unitName}</td>
                                <td>
                                   {$time}
                                </td>
                                </tr>
                                ";

                            }
                            ?>
                            
                        </tbody>
                        
                    </table>
                      
                </div>
                    

            </div>
        </div>
        <?php include('../footer.php') ?>
      
       
    
</body>
</html>