<?php
//to connect database
include("../db/connection.php");
//functions
include("../function/function.php");

// $adminid =$_SESSION['adminid'];


if(isset($_GET['action'])&& $_GET['action']=='denine')
{
    $id=$_GET['id'];
    $userid=$_GET['userid'];
    $adminid=$_GET['adminid'];
    edit('cashIn','status','DENINE',$id);

    $log="denined user(".$userid.") cash in";
    adminLog($adminid,$log);

    echo '<script type="text/javascript">
            window.history.back();
        </script>';
};

if(isset($_GET['action']) && $_GET['action']=='approve'){
    $id=$_GET['id'];
    $userid=$_GET['userid'];
    $amount=$_GET['amount'];
    $adminid=$_GET['adminid'];

    edit('cashIn','status','APPROVE',$id);
    updatePoint($amount,$userid,'wallet','mmk','plus');

    $log=" approved ".$amount." from user(".$userid.") cash in";
    adminLog($adminid,$log);

    echo '<script type="text/javascript">
            window.history.back();
        </script>';

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
    
    <title>User Cash In</title>
</head>
<body>
   
  
   

    <?php 
    include('./adminHeader.php') 
    ?>

    <div class="d-flex flex-column m-5 p-5" > 
           
            
            <div class="searchContainer">
            <p class="h3 text-center p-2 text-light" >User Cash In</p>
            <!-- <form action="">

            </form> -->
            <form action="userCashIn.php" class="searchbox rounded d-flex" method="POST">
           
        
            <input type="text" name="userid" class="rounded" placeholder="userid" aria-label="Search" aria-describedby="search-addon" />
        
            <button type="submit" name="submit" class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search" style="color:white"></i>
            </button>
            </form>
            </div>
           
            <div class="dataFlow" style="max-height: 500px;margin-top:5px;padding:10px">
               
                <div class="container">
                <table class="roboto-serif-regular table-sm text-light align-middle mb-2 " style="width:100%;height:100vh" >
                        <thead>
                            <tr>
                            <th style="width:200px ;height:20px ;overflow:hidden">Userid</th>
                            <th style="width:200px ;height:20px ;overflow:hidden">Status</th>
                            <th  style="width:200px ;height:20px ;overflow:hidden" >transcion ID</th> 
                            <th  style="width:200px ;height:20px ;overflow:hidden" >Screenshot</th>
                            <th  style="width:200px ;height:20px ;overflow:hidden" >Buttons</th>

                            </tr>
                        </thead>

                    
                        <tbody>
                        <?php
                            if(isset($_POST['submit'])){
                                $key = $_POST['userid'];
                                
                                $dataQuery=search($key,'cashIn','userid');
                                while($CashIn=mysqli_fetch_array($dataQuery)){
                                    $userid=$CashIn['userid'];
                                    $screenshot=$CashIn['screenshot'];
                                    $amount=$CashIn['amount'];
                                    $status=$CashIn['status'];
                                    $transcionId=$CashIn['transcionId'];
                                    $id=$CashIn['cashInid'];
                                    echo"
                                    <tr>
                        
                                    <td>
                                        <div class='ms-3 text'>
                                            <p class='fw-bold mb-1'>{$userid}</p>
                                        </div>
                                    </td>
                        
                        
                                    <td class='text-justify'>
                                       {$status}
                                    </td>
                                
                                    <td>
                                       {$transcionId}
                                    </td>

                                    <td>
                                        <p class='fw-bold mb-1'><a href='{$screenshot}' class='text-light text-decoration-underline'>View</a></p>
                                    </td>

                                    ";
                                    if(!($status=="pending")){
                                        echo "
                                        <td></td>
                                        </tr>
                                        ";
                                    }else{
                                        echo"
                                        <td>

                                            <div class='d-flex'>
                                                <a data-mdb-ripple-init type='button' class='btn'
                                                href='userCashIn.php?action=approve&id={$id}&userid={$userid}&amount={$amount}&adminid={$_SESSION['adminid']}'
                                                onclick='return confirm('Are you sure?')'
                                                style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>APPROVED</a>

                                                <a data-mdb-ripple-init type='button' class='btn'
                                                href='userCashIn.php?action=denine&id={$id}&userid={$userid}&adminid={$_SESSION['adminid']}'
                                                style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>DENINED</a>    
                                            </div>                                                                                                 
                
                                        </td>
                      
                                            </tr>";
                                    }

                                };
                            }else{
                                $dataQuery=dataList('cashIn','created_at');
                                while($CashIn=mysqli_fetch_array($dataQuery)){
                                    $userid=$CashIn['userid'];
                                    $screenshot=$CashIn['screenshot'];
                                    $amount=$CashIn['amount'];
                                    $status=$CashIn['status'];
                                    $transcionId=$CashIn['transcionId'];
                                    $id=$CashIn['cashInid'];
                                    echo"
                                    <tr>
                            
                                    <td>
                                        <div class='ms-3 text'>
                                            <p class='fw-bold mb-1'>{$userid}</p>
                                        </div>
                                    </td>
                            
                            
                                    <td class='text-justify'>
                                       {$status}
                                    </td>
                                    
                                    <td>
                                       {$transcionId}
                                    </td>

                                    <td>
                                        <p class='fw-bold mb-1'><a href='{$screenshot}' class='text-light text-decoration-underline'>View</a></p>
                                    </td>";

                                    if(!($status=="pending")){
                                        echo "
                                        <td></td>
                                        </tr>
                                        ";
                                    }else{
                                        echo"
                                        <td>

                                            <div class='d-flex'>
                                                <a data-mdb-ripple-init type='button' class='btn'
                                                href='userCashIn.php?action=approve&id={$id}&userid={$userid}&amount={$amount}&adminid={$_SESSION['adminid']}'
                                                onclick='return confirm('Are you sure?')'
                                                style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>APPROVED</a>

                                                <a data-mdb-ripple-init type='button' class='btn'
                                                href='userCashIn.php?action=denine&id={$id}&userid={$userid}&adminid={$_SESSION['adminid']}'
                                                style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>DENINED</a>    
                                            </div>                                                                                                 
                
                                        </td>
                      
                                            </tr>";
                                    }

                                };
                            }
                            ?>

                            
                        </tbody>
                </table>
                </div>
                
       
            </div>
    </div>
    <?php
    //  include('../footer.php') 
     ?> 
          
   
    
</body>
</html>