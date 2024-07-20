<?php



session_start();

    //to connect database
    include("../db/connection.php");
    //functions
    include("../function/function.php");
    $adminid = $_SESSION['adminid'];

    if(isset($_GET['action'])&& $_GET['action']=='update')
    {
        $id=$_GET['id'];
        $gameData = detail($id,'game','gameid');
        $gameName = $gameData['gameName'];
        $unitName = $gameData['unitName'];
        $photo = $gameData['photo'];
        $icon = $gameData['icon'];
        $aboutGame = $gameData['aboutGame'];
        $link = $gameData['link'];

    };

    if(isset($_GET['del'])&& $_GET['del']=='delete')
    {
        $unitId=$_GET['unitId'];
        // $unitDetail = detail($unitID,'unit','unitid');
        // $gameId= $unitDetail['gameid'];

        delete($unitId,'unit','unitid');

        $log = "deleted unit id ".$unitId." of ".$gameName; 
        adminLog($adminid,$log);

        echo '<script type="text/javascript">
            window.history.back();
        </script>';
        
    };

    if(isset($_POST['submit'])){

        $fgameName = $_POST['gameName'];
        $funitName = $_POST['unitName'];
        $faboutGame = $_POST['aboutGame'];
        $flink = $_POST['link'];
        // $adminid = $_SESSION['adminid'];
        $Fgameid = $_POST['gameid'];

        $adminWalletData = detail($gameName,'adminwallet','name');
        $adminWalletId = $adminWalletData['adminWalletid'];
    
        if(!($fgameName == $gameName)){
            edit('game','gameName',$fgameName,$id);
            edit('adminwallet','name',$fgameName,$adminWalletId);

            $log = "updated game name of game id ".$Fgameid;
            adminLog($adminid,$log);

            header("refresh:0.5");
        };
    
        if(!($funitName == $unitName)){
            edit('game','unitName',$funitName,$id);
            edit('adminwallet','pointName',$funitName,$adminWalletId);

            $query = "UPDATE `wallet` SET `pointName`='$funitName' WHERE `pointName`='$unitName'";
            $go_query = mysqli_query($conn,$query);

            $query = "UPDATE `unit` SET `unitName`='$funitName' WHERE `unitName`='$unitName'";
            $go_query = mysqli_query($conn,$query);

            $log="update unit name of ".$fgameName;
            adminLog($adminid,$log);

            header("refresh:0.5");
        };
    
        if(!($faboutGame == $aboutGame)){
            edit('game','aboutGame',$faboutGame,$id);

            $log="update aboutGame of ".$fgameName;
            adminLog($adminid,$log);

            header("refresh:0.5");

        };
    
        if(!($flink == $link)){
            edit('game','link',$flink,$id);

            $log="update link of ".$fgameName;
            adminLog($adminid,$log);

            header("refresh:0.5");

        };
    
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

    <title>Shop Detail</title>

</head>
<body>
   
    <?php include('./adminHeader.php')?>
    
    <div class="container my-5 py-5 w-100">

        <input type="hidden" id="adminid" value="<?php echo $_SESSION['adminid'] ?>">
        <div class="row">
            <div class="d-flex flex-column align-items-center col-md-6">
                <img src="<?php echo $photo ?>" height="200" alt="" class=" rounded" />
                <h3 class="text-white">Wallpaper</h3>
                <button style="background-color:hsl(286, 61%, 92%)"  class="btn" onclick="openFileInput()">Update</button>
                <input type="file" id="fileInput" style="display: none;">
                <input type ="hidden" id="gameid" value="<?php echo $id; ?>">
            </div>

            <div class="d-flex flex-column align-items-center mt-5 col-md-6">
                <img src="<?php echo $icon ?>" height="100" alt="" class=" rounded" />
                <h3 class="text-white">Icon</h3>
                <button style="background-color:hsl(286, 61%, 92%)"  class="btn" onclick="openFileInput2()">Update</button>
                <input type="file" id="fileInput2" style="display: none;">
                <input type ="hidden" id="gameid" value="<?php echo $id; ?>">
            </div>
        </div>
        

        <div class="items-wrapper mt-5 ">
            <div class="items w-100 p-4 form m-auto p-5">
                <div class="d-flex justify-content-between">
                    <h3 class="mb-5 text-white">Product Information</h3>
                    <a href="#" id="editBtn" class="text-decoration-none text-light">Edit<i class="fa-regular fa-pen-to-square ms-2"></i></a>
                </div>

                <form action="#" method="POST" >

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label text-light">Game Name</label>
                        <div class="col-sm-9">
                        <input type="text" name="gameName"  readonly class="form-control-plaintext text-light BOX" value="<?php echo $gameName; ?>">
                        </div>
                    </div>
                      
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label text-light">Unit Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="unitName" readonly class="form-control-plaintext text-light BOX" value="<?php echo $unitName; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label text-light">Game ID</label>
                        <div class="col-sm-9">
                          <input type="number" name="gameid" readonly class="form-control-plaintext text-light" id="gameid" value="<?php echo $id ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label text-light">About</label>
                        <div class="col-sm-9">
                          <input type="text" name="aboutGame" readonly class="form-control-plaintext text-light BOX" value="<?php echo $aboutGame; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label text-light">Official Link</label>
                        <div class="col-sm-9">
                          <input type="text" name="link" readonly class="form-control-plaintext text-light BOX" value="<?php echo $link; ?>">
                        </div>
                    </div>

                    <button type="submit" hidden name="submit" style="background-color:hsl(286, 61%, 92%)" id="btn"  class="btn mt-3 w-100 updateBtn">UPDATE</button>

                </form>

            </div>
        </div>

        <div class="container mt-5">
            <div class="d-flex mb-3 align-items-center">
                <h2 class="text-white me-3">Unit List</h2>
                <a href="./addUnit.php" class="btn btn-primary">Add Unit</a>
            </div>
            
            <div class="table-responsive rounded">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Unit ID</th>
                            <th>Image</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        $query = "SELECT * from `unit` WHERE `gameid`='$id' ORDER BY `price` ASC";
                        $go_query=mysqli_query($conn,$query);

                        while($row=mysqli_fetch_array($go_query)){

                            $unitID = $row['unitid'];
                            $unitPhoto = $row['photo'];
                            $amount = $row['product'];
                            $price = $row['price'];

                            echo "
                                <tr>
                                    <td>{$unitID}</td>
                                    <td><img src='{$unitPhoto}' alt='Unit Image'></td>
                                    <td>{$amount}</td>
                                    <td>{$price}</td>
                                    <td><a href='shopUpdate.php?action=update&id={$id}&del=delete&unitId={$unitID}' onclick='return confirm('Are you sure?')' class='btn btn-danger'>Delete</a></td>
                                </tr>
                            ";

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
<script>

var editBtn=document.getElementById("editBtn");
var fileInput=document.getElementById('fileInput');
var fileInput2=document.getElementById('fileInput2');
var Fkey ="844b04819129e83a6436901198bddfe7";
var id = document.getElementById('gameid');
var gameid = id.value;
var adminID=document.getElementById('adminid');
var adminid=adminID.value;

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

    fileInput2.addEventListener("change",iconChange=>{
        var icon = fileInput2.files[0];

        if(icon){
            fetchIcon(icon);
        }else{
            console.log("fail");
        }
    })

    function openFileInput(){
        fileInput.click();
    }

    function openFileInput2(){
        fileInput2.click();
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
            uploadPhp(image,gameid);
            console.log(image);
        });
    }

    async function fetchIcon(icon) {
        var formdata = new FormData();
        formdata.append('key', Fkey);
        formdata.append('image', icon);
        await fetch("https://api.imgbb.com/1/upload", {
            method: "post",
            body: formdata
        }).then(response => response.json()).then(data => {
            icon = data.data.display_url;
            iconUploadPhp(icon,gameid);
            console.log(icon);
        });
    }
    
    async function iconUploadPhp(icon,gameid) {
        var formData = new FormData();
        formData.append('Iupdate','updated icon of ');
        formData.append('adminid',adminid);
        formData.append('tableName','game');
        formData.append('icon', icon);
        formData.append('id',gameid);
        await fetch("../iconUpdate.php", {
            method: "post",
            body: formData
        }).then(response => response.json()).then(data => {
            // console.log('data', data)
            if (data.error == "" ) {
                window.alert(data.pass);
                location.reload();
            }else{
                window.alert(data.error);
            }
        });
    }

    async function uploadPhp(image,gameid) {
        var formData = new FormData();
        formData.append('Wupdate','updated wallpaper of ');
        formData.append('adminid',adminid);
        formData.append('tableName','game');
        formData.append('img', image);
        formData.append('id',gameid);
        await fetch("../imageUpdat.php", {
            method: "post",
            body: formData
        }).then(response => response.json()).then(data => {
            // console.log('data', data)
            if (data.error == "" ) {
                window.alert(data.pass);
                location.reload();
            }else{
                window.alert(data.error);
            }
        });
    }

</script>
</html>