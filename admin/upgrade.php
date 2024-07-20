<?php

    session_start();
    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

    $adminid = $_SESSION['adminid'];


    if(isset($_GET['action']) && $_GET['action']=='upgrade'){
        $id=$_GET['id'];
        $adminDetail = detail($id,'admin','adminid');
        $adminName = $adminDetail['adminName'];
        $photo = $adminDetail['photo'];
        $email = $adminDetail['email'];
        $keycode = $adminDetail['keycode'];
        $password = $adminDetail['password'];
        $phone = $adminDetail['phone'];
        $role = $adminDetail['role'];
        $status = $adminDetail['status'];
        
        $_SESSION['upgradeRole'] = $role;

    };

    if(isset($_POST['submit'])){

        // $Fname = $_POST['name'];
        // $Femail = $_POST['email'];
        // $Fphone = $_POST['phone'];
        // $Fpassword = $_POST['password'];
        $Frole = $_POST['role'];
        // $hashValue = md5($Fpassword);
        $Fid = $_POST['id'];

        // echo ($name . $email . $phone . $password);

        // if(!($Fname == $adminName )){
        //     $columnName = "adminName";
        //     edit('admin',$columnName,$Fname,$Fid);
        // };

        // if(!($Femail ==  $email )){
        //     $columnName = "email";
        //     edit('admin',$columnName,$Femail,$Fid);
        // }

        // if(!($Fphone ==   $phone )){
        //     $columnName = "phone";
        //     edit('admin',$columnName,$Fphone,$Fid);
        // }

        if(!($Frole ==  $role )){
            
            $columnName = "role";
            if($Frole>3){
                $Frole = 3;
                edit('admin',$columnName,$Frole,$Fid);
                $_SESSION['upgradeRole']=$Frole;

                $log=" downgraded ".$adminName." into role ".$Frole;
                adminLog($adminid,$log);
            }else if($Frole<1){
                $Frole=1;
                edit('admin',$columnName,$Frole,$Fid);
                $_SESSION['upgradeRole']=$Frole;

                $log=" upgraded ".$adminName." into role ".$Frole;
                adminLog($adminid,$log);

            }
            
            if($Frole > $role){
                edit('admin',$columnName,$Frole,$Fid);
                $_SESSION['upgradeRole']=$Frole;

                $log=" downgraded ".$adminName." into role ".$Frole;
                adminLog($adminid,$log);
            }else{
                edit('admin',$columnName,$Frole,$Fid);
                $_SESSION['upgradeRole']=$Frole;

                $log=" upgraded ".$adminName." into role ".$Frole;
                adminLog($adminid,$log);
            }

            echo '<script type="text/javascript">
                window.history.back();
            </script>';

        }

        // if(!($hashValue ==  $password )){
        //     $columnName = "password";
        //     // $hashValue = md5($password);
        //     edit('admin',$columnName,$hashValue,$Fid);
        // }

    }else{
        // echo"<script>window.alert('Form Error')</script>";
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
    <link rel="stylesheet" href="../css/sheetDesignAdmin.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>Admin Detail</title>

</head>
<body>
   
    <?php 
    include('./adminHeader.php');
    ?>
    
    <div class="container mt-5 p-5">
        <div class="row roboto-serif-bold textColor text-light">

            <div class="mt-5 navbar-brand  col-md-5">
                <div class="d-flex flex-column">
                    <img src="<?php echo  $photo ?>" height="120" alt="" class=" rounded shadow-lg" />
                    <!-- <button style="background-color:hsl(286, 61%, 92%)"  class="btn mt-3" onclick="openFileInput()">Change</button>
                    <input type="file" id="fileInput" style="display: none;"> -->
                </div>
                <div class="word ms-4 mb-5">
                    <h3><?php echo  $adminName ?></h3>
                    <span class="">Admin</span>
                </div>
            </div>

            <div class="col-md-7 presonlInformation-wrapper mt-5 ">
                <div class="personalInformation w-100 p-4 form m-auto p-5">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-5">Personal Information</h3>
                        <p href="" id="editBtn" class="text-decoration-none text-light">Edit<i class="fa-regular fa-pen-to-square ms-2"></i></p>
                    </div>

                    <form action="#" method="POST" >

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="name"  readonly class="form-control-plaintext text-light " value="<?php echo  $adminName ?>">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" readonly class="form-control-plaintext text-light " value="<?php echo $email ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Admin ID</label>
                            <div class="col-sm-9">
                              <input type="number" name="id" readonly class="form-control-plaintext text-light" id="adminId" value="<?php echo $id ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Key Code</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="<?php echo $keycode ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Password</label>
                            <div class="col-sm-9">
                            <input type="password" name="password" readonly class="form-control-plaintext text-light " value="<?php echo $password ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Phone</label>
                            <div class="col-sm-9">
                            <input type="text" name="phone" readonly class="form-control-plaintext text-light " value="<?php echo $phone ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Role</label>
                            <div class="col-sm-9">
                            <input type="text" name="role" readonly class="form-control-plaintext text-light BOX" value="<?php echo  $_SESSION['upgradeRole'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Status</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="<?php echo $status ?>">
                            </div>
                        </div>

                        <!-- <div class="form-group row imageBox" hidden>
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Image</label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control-plaintext text-light" name="image">
                            </div>
                        </div> -->

                        <button type="submit" hidden name="submit" style="background-color:hsl(286, 61%, 92%)" id="btn"  class="btn mt-3 w-100 updateBtn">UPDATE</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
    <div class="container my-5">
        <div class="table-responsive rounded" style="height:500px;overflow-y: auto;">
            <table class="table table-striped" >
                <thead style="position: sticky;top: 0;z-index: 1;">
                    <tr>
                        <th class="fs-4">No.</th>
                        <th class="fs-4">Admin Log</th>
                        <th class="fs-4">Operation Time</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $query = "SELECT * from `adminlog` WHERE `adminid`='$id' ORDER BY `operationTime` DESC";
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
<script>

    var editBtn=document.getElementById("editBtn");
    // var fileInput=document.getElementById('fileInput');
    // var id=document.getElementById('adminId');
    // var Fkey ="844b04819129e83a6436901198bddfe7";
    // var adminId = id.value;

    editBtn.addEventListener("click",edit=>{
        
        const Box=document.querySelectorAll(".BOX");
        // const imageBox=document.querySelector(".imageBox");
        const updateBtn=document.querySelector(".updateBtn");

        for (let i=0 ; i<Box.length ; i++){

            Box[i].toggleAttribute("readonly");
            Box[i].classList.toggle("form-control-plaintext");
            Box[i].classList.toggle("text-light");
            Box[i].classList.toggle("form-control");

        }
        // console.log(Box);
        // imageBox.toggleAttribute("hidden");
        updateBtn.toggleAttribute("hidden");
       

    });

    // fileInput.addEventListener("change",imgChange=>{
    //     var img = fileInput.files[0];

    //     if(img){
    //         fetchImg(img);
    //     }else{
    //         console.log("fail");
    //     }
    // })

    // function openFileInput(){
    //     fileInput.click();
    // }

    // async function fetchImg(img) {
    //     var formdata = new FormData();
    //     formdata.append('key', Fkey);
    //     formdata.append('image', img);
    //     await fetch("https://api.imgbb.com/1/upload", {
    //         method: "post",
    //         body: formdata
    //     }).then(response => response.json()).then(data => {
    //         image = data.data.display_url;
    //         uploadPhp(image,adminId);
    //         console.log(image);
    //     });
    // }

    // async function uploadPhp(image,adminId) {
    //     var formData = new FormData();
    //     formData.append('tableName','admin');
    //     formData.append('img', image);
    //     formData.append('id',adminId);
    //     await fetch("../imageUpdat.php", {
    //         method: "post",
    //         body: formData
    //     }).then(response => response.json()).then(data => {
    //         // console.log('data', data)
    //         if (data.error == "" ) {
    //             console.log(data.pass);
    //         }else{
    //             window.alert(data.error);
    //         }
    //     });
    // }

</script>
</html>