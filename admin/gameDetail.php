<?php

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");

    if(isset($_POST['submit'])){

        $gameName = $_POST['name'];
        $aboutGame = $_POST['aboutGame'];
        $unitName = $_POST['unitName'];
        $id = $_POST['id'];

        if(!($gameName =="Mobile Legend")){
            $columnName = "gameName";
            edit('game',$columnName,$gameName,$id);
        }

        if(!($aboutGame == "5 vs 5")){
            $columnName = "aboutGame";
            edit('game',$columnName,$aboutGame,$id);
        }

        if(!($unitName == "Diamond")){
            $columnName = "unitName";
            edit('game',$columnName,$unitName,$id);
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
    <link rel="stylesheet" href="../css/sheetDesignAdmin.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <title>Game Detail</title>

</head>
<body>
   
    <?php 
    include('./adminHeader.php');
    ?>
    
    <div class="container mt-5 p-5">
        <div class="row roboto-serif-bold textColor text-light">

            <div class="mt-5 navbar-brand  col-md-5 m-auto">
                <div class="d-flex flex-column w-100">
                    <img src="../images/mlbb.jpg" height="200" alt="" class="rounded" />
                    <button style="background-color:hsl(286, 61%, 92%)"  class="btn mt-3" onclick="openFileInput()">Change Picture</button>
                    <input type="file" id="fileInput" style="display: none;">
                </div>
            </div>

            <div class="col-md-7 presonlInformation-wrapper mt-5 ">
                <div class="personalInformation w-100 form m-auto p-5">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-4">Game Detail</h3>
                        <a href="#" id="editBtn" class="text-decoration-none text-light">Edit<i class="fa-regular fa-pen-to-square ms-2"></i></a>
                    </div>

                    <form action="#" method="POST" >

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Game Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="name"  readonly class="form-control-plaintext text-light BOX" value="Mobile Legend">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Game ID</label>
                            <div class="col-sm-9">
                              <input type="number" name="id" readonly class="form-control-plaintext text-light" id="gameid" value="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">Unit Name</label>
                            <div class="col-sm-9">
                            <input type="text" name="unitName" readonly class="form-control-plaintext text-light BOX" value="Diamond">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-light">About Game</label>
                            <div class="col-sm-9">
                            <textarea  name="aboutGame" readonly class="form-control-plaintext text-light BOX" rows="5" >5 vs 5</textarea>
                            </div>
                        </div>

                        <button type="submit" hidden name="submit" style="background-color:hsl(286, 61%, 92%)" id="btn"  class="btn mt-3 w-100 updateBtn">UPDATE</button>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <?php
    //  include('../footer.php') 
     ?> 
</body>
<script>

    var editBtn=document.getElementById("editBtn");
    var fileInput=document.getElementById('fileInput');
    var id=document.getElementById('gameid');
    var Fkey ="844b04819129e83a6436901198bddfe7";
    var gameid = id.value;

    editBtn.addEventListener("click",edit=>{
        
        const Box=document.querySelectorAll(".BOX");
        const updateBtn=document.querySelector(".updateBtn");

        for (let i=0 ; i<Box.length ; i++){

            Box[i].toggleAttribute("readonly");
            Box[i].classList.toggle("form-control-plaintext");
            Box[i].classList.toggle("text-light");
            Box[i].classList.toggle("form-control");

        }

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
        formData.append('tableName','game');
        formData.append('img', image);
        formData.append('id',gameid);
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