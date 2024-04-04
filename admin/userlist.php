<?php
//to connect database
include("../db/connection.php");
//functions
include("../function/function.php");

if(isset($_GET['action'])&& $_GET['action']=='delete')
{
    $id=$_GET['id'];
    delete($id,'user','userid');
};

if(isset($_GET['action']) && $_GET['action']=='banActive'){
    $id=$_GET['id'];
    banActivate($id,'user','userid');
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

    <div class="d-flex flex-column m-5 p-5" > 
           
            
            <div class="searchContainer">
            <p class="h3 text-center p-2 text-light" >Users list</p>
            <!-- <form action="">

            </form> -->
            <form action="userlist.php" class="searchbox rounded d-flex" method="POST">
           
        
            <input type="text" name="username" class="rounded" placeholder="username" aria-label="Search" aria-describedby="search-addon" />
        
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
                            <th style="width:400px ;height:20px ;overflow:hidden"  >User</th>
                            <th style="width:200px ;height:20px ;overflow:hidden">Status</th>
                            <th  style="width:200px ;height:20px ;overflow:hidden" >Date</th> 
                            <th  style="width:200px ;height:20px ;overflow:hidden" >Action</th>
                            </tr>
                        </thead>

                       
                        <tbody>
                        <?php
                            if(isset($_POST['submit'])){
                                $key = $_POST['username'];
                                
                                $dataQuery=search($key,'user','username');
                                while($user=mysqli_fetch_array($dataQuery)){
                                    $username=$user['username'];
                                    $photo=$user['photo'];
                                    $email=$user['email'];
                                    $status=$user['status'];
                                    $date=$user['created_at'];
                                    $id=$user['userid'];
                                    echo"
                                    <tr>
                            
                                    <td>
                                        <div class='d-flex align-items-center bg-image hover-zoom' style='position: relative;'>
                                        <img
                                            src='./images/{$photo}'
                                            style='width: 45px; height: 45px'
                                            class='rounded-circle'
                                            />
                                            <span style='width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                            position:absolute; top:3px ; left:40px '></span>
                                            <div class='ms-3 text'>
                                            <p class='fw-bold mb-1'>{$username}</p>
                                            <p class='text-white-50 mb-0'>{$email}</p>
                                        </div>
                                        </div>
                                
                                    </td>
                            
                            
                                    <td class='text-justify'>
                            
                                       {$status}</td>
                                    <td>
                                       {$date}
                                    </td>
                                    <td>
                                
                                        <a data-mdb-ripple-init type='button' class='btn'
                                        href='userlist.php?action=delete&id={$id}'
                                        onclick='return confirm('Are you sure?')'
                                        style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>DELETE</a>

                                        <a data-mdb-ripple-init type='button' class='btn'
                                        href='userlist.php?action=banActive&id={$id}'
                                        style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>B/A</a>                                                                    


                            
                                    </td>
                          
                                    </tr>";

                                };
                            }else{
                                $dataQuery=dataList('user','created_at');
                                while($user=mysqli_fetch_array($dataQuery)){
                                    $username=$user['username'];
                                    $photo=$user['photo'];
                                    $email=$user['email'];
                                    $status=$user['status'];
                                    $date=$user['created_at'];
                                    $id=$user['userid'];
                                    echo"
                                    <tr>
                            
                                    <td>
                                        <div class='d-flex align-items-center bg-image hover-zoom' style='position: relative;'>
                                        <img
                                            src='./images/{$photo}'
                                            style='width: 45px; height: 45px'
                                            class='rounded-circle'
                                            />
                                            <span style='width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                            position:absolute; top:3px ; left:40px '></span>
                                            <div class='ms-3 text'>
                                            <p class='fw-bold mb-1'>{$username}</p>
                                            <p class='text-white-50 mb-0'>{$email}</p>
                                        </div>
                                        </div>
                                
                                    </td>
                            
                            
                                    <td class='text-justify'>
                            
                                       {$status}</td>
                                    <td>
                                       {$date}
                                    </td>
                                    <td>

                                    <div class='d-flex'>
                                        <a data-mdb-ripple-init type='button' class='btn'
                                        href='userlist.php?action=delete&id={$id}'
                                        onclick='return confirm('Are you sure?')'
                                        style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>DEL</a>

                                        <a data-mdb-ripple-init type='button' class='btn'
                                        href='userlist.php?action=banActive&id={$id}'
                                        style='background-color:hsl(286, 61%, 92%) ; margin-left:20px'>B/A</a>    
                                    </div>                                                                                                 
                    
                                </td>
                          
                                    </tr>";

                                };
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