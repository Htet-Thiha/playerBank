<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // echo ($name . $email . $phone . $password);

        if(!($name =="Htet Thiha")){
            $columnName = "adminName";
            edit('admin',$columnName,$name,$id);
        };

        if(!($email == "htetthiha2004@gmail.com")){
            $columnName = "email";
            edit('admin',$columnName,$email,$id);
        }

        if(!($phone == "09794866365")){
            $columnName = "phone";
            edit('admin',$columnName,$phone,$id);
        }

        if(!($password == "d41d8cd98f00b204e9800998ecf8427e")){
            $columnName = "password";
            $hashValue = md5($password);
            edit('admin',$columnName,$hashValue,$id);
        }

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
                    <img src="https://i.ibb.co/mCrXjmZ/122442587-783026758912618-238755159588701890-n.jpg" height="120" alt="" class=" rounded-circle" />
                    <button style="background-color:hsl(286, 61%, 92%)"  class="btn mt-3" onclick="openFileInput()">Change</button>
                    <input type="file" id="fileInput" style="display: none;">
                </div>
                <div class="word ms-4 mb-5">
                    <h3>Htet Thiha</h3>
                    <span class="">Admin</span>
                </div>
            </div>

            <div class="col-md-7 presonlInformation-wrapper mt-5 ">
                <div class="personalInformation w-100 p-4 form m-auto p-5">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-5">Personal Information</h3>
                        <a href="#" id="editBtn" class="text-decoration-none text-light">Edit<i class="fa-regular fa-pen-to-square ms-2"></i></a>
                    </div>

                    <form action="#" method="POST" >

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="name"  readonly class="form-control-plaintext text-light BOX" value="Htet Thiha">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" readonly class="form-control-plaintext text-light BOX" value="htetthiha2004@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Admin ID</label>
                            <div class="col-sm-9">
                              <input type="number" name="id" readonly class="form-control-plaintext text-light" id="adminId" value="23">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Key Code</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="VOwJp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Password</label>
                            <div class="col-sm-9">
                            <input type="password" name="password" readonly class="form-control-plaintext text-light BOX" value="d41d8cd98f00b204e9800998ecf8427e">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Phone</label>
                            <div class="col-sm-9">
                            <input type="text" name="phone" readonly class="form-control-plaintext text-light BOX" value="09794866365">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Role</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="Leader">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Status</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="Active">
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
    var id=document.getElementById('adminId');
    var Fkey ="844b04819129e83a6436901198bddfe7";
    var adminId = id.value;

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

    fileInput.addEventListener("change",imgChange=>{
        var img = fileInput.files[0];

        if(img){
            fetchImg(img);
        }else{
            console.log("fail");
        }
    })

    function openFileInput(){
        fileInput.click();
    }

    async function fetchImg(img) {
        var formdata = new FormData();
        formdata.append('key', Fkey);
        formdata.append('image', img);
        await fetch("https://api.imgbb.com/1/upload", {
            method: "post",
            body: formdata
        }).then(response => response.json()).then(data => {
            image = data.data.display_url;
            uploadPhp(image,adminId);
            console.log(image);
        });
    }

    async function uploadPhp(image,adminId) {
        var formData = new FormData();
        formData.append('tableName','admin');
        formData.append('img', image);
        formData.append('id',adminId);
        await fetch("../imageUpdat.php", {
            method: "post",
            body: formData
        }).then(response => response.json()).then(data => {
            // console.log('data', data)
            if (data.error == "" ) {
                console.log(data.pass);
            }else{
                window.alert(data.error);
            }
        });
    }

</script>
</html>