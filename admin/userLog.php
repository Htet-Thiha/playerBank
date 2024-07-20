<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

    if(isset($_GET['action']) && $_GET['action']=='userLog'){
        $id=$_GET['id'];
        $adminid = $_GET['adminid'];

        $log = "viewed user( ".$id." ) log";
        adminLog($adminid,$log);
    };



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
    <link rel="stylesheet" href="../css/sheetDesignAdmin.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>User Log</title>

</head>
<body>
   
    <?php 
    include('./adminHeader.php');
    ?>

    <div class="container my-5 pt-5">
        <div class="table-responsive rounded" style="height:500px;overflow-y: auto;">
            <table class="table table-striped" >
                <thead style="position: sticky;top: 0;z-index: 1;">
                    <tr>
                        <th class="fs-4">No.</th>
                        <th class="fs-4">User Log</th>
                        <th class="fs-4">Operation Time</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $query = "SELECT * from `userlog` WHERE `userid`='$id' ORDER BY `operationTime` DESC";
                    $go_query=mysqli_query($conn,$query);

                    $no=0;
                    while($row=mysqli_fetch_array($go_query)){
                        $no=$no+1;
                        $log = $row['log'];
                        $operationTime = $row['operationTime'];

                        echo "
                            <tr>
                                <td>$no</td>
                                <td>{$log}</td>
                                <td>{$operationTime}</td>
                             </tr>
                        ";

                    }

                ?>
                
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>