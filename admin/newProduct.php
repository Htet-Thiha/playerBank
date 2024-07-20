<?php
//to connect database
include("../db/connection.php");
//functions
include("../function/function.php");

// if(isset($_POST['submit'])){

//         $gameName = $_POST['gameName'];
//         $unitName = $_POST['unitName'];
//         $aboutGame = $_POST['aboutGame'];
//         $link = $_POST['link'];
//         $photo = $_FILES['photo']['name'];
//         $icon = $_FILES['icon']['name'];

        // $photoTmpName = $_FILES['photo']['tmp_name'];
        // $iconTmpName = $_FILES['icon']['tmp_name'];


        // $targetFile = "../images/".$photo;
        // move_uploaded_file($photoTmpNamempName,$targetFile);

        // $targetFile = "../images/game/".$icon;
        // move_uploaded_file($iconTmpNamempName,$targetFile);

        // $query="SELECT * from game WHERE gameName='$gameName'";
        // $go_query=mysqli_query($conn,$query);
        // $check = mysqli_num_rows($go_query);

        // if($check>0){
        //     echo"<script>window.alert('This Game is already exist')</script>";
        // }else{
        //     $query = "INSERT into game(gameName,unitName,photo,icon,aboutGame,link) VALUES('$gameName','$unitName','$photo','$icon','$aboutGame','$link')";
        //     $go_query = mysqli_query($conn,$query);
        //     if(!$go_query)
        //         {
        //             die("QUERY FAILED".mysqli_error());
        //         }
        //     else{
        //             $query = "INSERT INTO adminwallet(`name`,`pointName`,`amount`) VALUES($gameName,'$unitName',0)";
        //             $queryResult = mysqli_query($conn,$query);
        //         }
        //     echo"<script>window.alert('Game added')</script>";
        // }
        

// }
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
    <title>Add Product</title>
</head>
<body>
    
<?php include('./adminHeader.php')?>

    <div class="d-flex justify-content-center m-5 p-5"> 
           
           
            <div class="form " >
                <input type="hidden" id="adminid" name="adminid" value="<?php echo $_SESSION['adminid']; ?>">
                <p class="h3 text-center p-3 text-light">Add Product</p>
            
                <div class="text-light m-2 p-2" method="POST" enctype="multipart/form-data">
                    <!-- PointName input -->
                    <label for="form2Example1">Product Name</label>
                    <div data-mdb-input-init class="form-outline">
                        
                        <input type="text" name="gameName" id="gameName" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Hit & Run<p>
                    </div>

                    <label for="form2Example1">Unit Name</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="unitName" id="unitName" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">Hit & Run<p>
                    </div>

                    <!-- Qty input -->
                    <label for="form2Example2">About Game</label>
                    <div data-mdb-input-init class="form-outline">
                        <textarea class="form-control text-light" name="aboutGame" id="aboutGame" rows="4"></textarea>
                        <p class="form-label text-white-50" for="form2Example2">
                            To play this game....
                        </p>
                    </div>

                    <label for="form2Example1">Official Website Link</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="link" id="link" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">link...<p>
                    </div>

                      <!-- GameTitle input -->
                      <label for="form2Example3">Wallpaper</label>
                      <div data-mdb-input-init class="form-outline text-light">
                        <input type="file" name="photo" id="photo" class="form-control text-white-50" />
                       
                    </div>
                    
                    <label for="form2Example3">Icon</label>
                          <div data-mdb-input-init class="form-outline text-light">
                            <input type="file" name="icon" id="icon" class="form-control text-white-50" />
                       
                    </div>
                   
                    
                        <!-- Submit button -->
                        <div class="m-2 p-2">
                        <button type="submit" name="submit" id="btn" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Insert</button>
                        </div>
                </div>
                    

            </div>
                          
    </div>
    <?php
    //  include('../footer.php') 
     ?> 
</body>
<script src="../script/newProduct.js"></script>
<script>

// get element
var Fkey ="844b04819129e83a6436901198bddfe7";
var FgameName = document.getElementById('gameName');
var FunitName = document.getElementById('unitName');
var FaboutGame = document.getElementById('aboutGame');
var Flink = document.getElementById('link');
var Fphoto = document.getElementById('photo');
var Ficon = document.getElementById('icon');
var Fadminid = document.getElementById('adminid').value;

var btn = document.getElementById('btn');



let img;
let icon;

    // event
    btn.addEventListener("click",e=>{
        fetchImg();
    });

</script>

</html>