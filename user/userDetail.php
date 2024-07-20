<?php

    session_start();


    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");


    if(isset($_POST['submit2'])){

        $name = $_POST['name'];
        $id = $_POST['id'];

        $photo = $_FILES['fileInput']['name'];
        $tmpName = $_FILES['fileInput']['tmp_name'];


        $targetFile = "../images/userPhoto/".$photo;
        move_uploaded_file($tmpName,$targetFile);

        edit('user','photo',$photo,$id);
        $log="changed profile picture ";
        userLog($id,$log);

        $_SESSION['userPhoto'] = $photo;

        echo'<script type="text/javascript">
                window.history.back();
            </script>';




    }
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $hashValue = md5($password);
        // echo ($name . $email . $phone . $password);

        if(!($name ==$_SESSION['username'])){
            $columnName = "username";
            edit('user',$columnName,$name,$id);
            global $conn;
            $query = "UPDATE `wallet` SET `username`='$name' WHERE `userid`='$id'";
            $go_query = mysqli_query($conn,$query);
            $_SESSION['username']=$name;

            $log="changed username ";
            userLog($id,$log);

            // if (isset($_SESSION['username'])) {
            //     $_SESSION['username'] = $name; // Update 'username' to a new value
            // }
        };

        if(!($email == $_SESSION['userEmail'])){
            $columnName = "email";
            edit('user',$columnName,$email,$id);
            $_SESSION['userEmail']=$email;
            $log="changed email ";
            userLog($id,$log);

        }

        if(!($phone == $_SESSION['phone'])){
            $columnName = "phone";
            edit('user',$columnName,$phone,$id);
            $_SESSION['phone']=$phone;
            $log="changed phone number ";
            userLog($id,$log);

        }

        if(!($hashValue  ==$_SESSION['userPassword'] )){
            $columnName = "password";
            edit('user',$columnName,$hashValue,$id);
            $_SESSION['userPassword']=$hashValue;

            $log="changed password ";
            userLog($id,$log);

        }
        echo'<script type="text/javascript">
            window.history.back();
        </script>';
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
    <link rel="stylesheet" href="../css/sheetDesign.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>User Detail</title>

</head>
<body>
   
    <?php 
    include('./header.php');
    ?>
    
    <div class="container mt-5 p-5">
        <div class="row roboto-serif-bold textColor " style="color: #475569;">

            <div class="mt-5 navbar-brand  col-md-5">
                <div class="d-flex flex-column">
                    <img src="../images/userPhoto/<?php echo $_SESSION['userPhoto'];?>" height="120" alt="" class=" rounded shadow-lg" />
                
                    <button style="background-color:hsl(286, 61%, 92%)"  class="btn mt-3" onclick="openFileInput()">Change</button>
                    <form action="" method="POST" enctype="multipart/form-data">  
                        <input type="file" id="fileInput" name="fileInput" style="display: none;">
                        <input type="hidden" name="name"  value="<?php echo $_SESSION['username']?>">
                        <input type="hidden" name="id"  value="<?php echo $_SESSION['userid']?>">
                        <button type="submit" name="submit2" id="imgFormBtn" style="display:none;">change</button>
                    </form>
                    
                </div>
                <div class="word ms-4 mb-5">
                    <h3><?php echo $_SESSION['username']?></h3>
                    <span class="">User</span>
                </div>
            </div>

            <div class="col-md-7 presonlInformation-wrapper mt-5 ">
                <div class="personalInformation w-100 p-4 form m-auto p-5">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-5">Personal Information</h3>
                        <a href="#" id="editBtn" class="text-decoration-none " style="color: #475569;">Edit<i class="fa-regular fa-pen-to-square ms-2"></i></a>
                    </div>

                    <form action="" method="POST" >

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="name"  readonly class="form-control-plaintext  BOX" value="<?php echo $_SESSION['username']?>">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" readonly class="form-control-plaintext  BOX" value="<?php echo $_SESSION['userEmail']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">User ID</label>
                            <div class="col-sm-9">
                              <input type="number" name="id" readonly class="form-control-plaintext " id="userId" value="<?php echo $_SESSION['userid']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">Password</label>
                            <div class="col-sm-9">
                            <input type="password" name="password" readonly class="form-control-plaintext  BOX" value="<?php echo $_SESSION['noUncryptPass']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">Phone</label>
                            <div class="col-sm-9">
                            <input type="text" name="phone" readonly class="form-control-plaintext  BOX" value="<?php echo $_SESSION['phone']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label ">Status</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext " value="<?php echo $_SESSION['status']?>">
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

    <?php include('../footer.php') ?>
</body>
<script>

    var editBtn=document.getElementById("editBtn");
    var fileInput=document.getElementById('fileInput');
    var id=document.getElementById('userId');
    var Fkey ="844b04819129e83a6436901198bddfe7";
    var userId = id.value;
    var imgFormBtn =document.getElementById('imgFormBtn');

    editBtn.addEventListener("click",edit=>{
        
        const Box=document.querySelectorAll(".BOX");
        // const imageBox=document.querySelector(".imageBox");
        const updateBtn=document.querySelector(".updateBtn");

        for (let i=0 ; i<Box.length ; i++){

            Box[i].toggleAttribute("readonly");
            Box[i].classList.toggle("form-control-plaintext");
            // Box[i].classList.toggle("text-light");
            Box[i].classList.toggle("form-control");

        }
        // console.log(Box);
        // imageBox.toggleAttribute("hidden");
        updateBtn.toggleAttribute("hidden");
       

    });

    fileInput.addEventListener("change",imgChange=>{
        imgFormBtn.click();
        // var img = fileInput.files[0];

        // if(img){
        //     fetchImg(img);
        // }else{
        //     console.log("fail");
        // }
    })

    function openFileInput(){
        fileInput.click();
    }

    // async function fetchImg(img) {
    //     var formdata = new FormData();
    //     formdata.append('key', Fkey);
    //     formdata.append('image', img);
    //     await fetch("https://api.imgbb.com/1/upload", {
    //         method: "post",
    //         body: formdata
    //     }).then(response => response.json()).then(data => {
    //         image = data.data.display_url;
    //         uploadPhp(image,userId);
    //         console.log(image);
    //     });
    // }

    // async function uploadPhp(image,userId) {
    //     var formData = new FormData();
    //     formData.append('tableName','user');
    //     formData.append('img', image);
    //     formData.append('id',userId);
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