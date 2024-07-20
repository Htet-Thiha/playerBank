<?php
//to connect database
include("../db/connection.php");
//functions
include("../function/function.php");

// if(isset($_POST['submit'])){

//         $gameName = $_POST['gameName'];
//         $unitName = $_POST['unitName'];
//         $aboutGame = $_POST['aboutGame'];
//         $photo = $_FILES['photo']['name'];
//         $tmpName = $_FILES['photo']['tmp_name'];

//         $targetFile = "../images/".$photo;
//         move_uploaded_file($tmpName,$targetFile);

//         $query="SELECT * from game WHERE gameName='$gameName'";
//         $go_query=mysqli_query($conn,$query);
//         $check = mysqli_num_rows($go_query);

//         if($check>0){
//             echo"<script>window.alert('This Game is already exist')</script>";
//         }else{
//             $query = "INSERT into game(gameName,unitName,photo,aboutGame) VALUES('$gameName','$unitName','$photo','$aboutGame')";
//             $go_query = mysqli_query($conn,$query);
//             if(!$go_query)
//                 {
//                     die("QUERY FAILED".mysqli_error());
//                 }
//             //  header("location:gamelist.php");
//             echo"<script>window.alert('Game added')</script>";
//         }
        

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
                <p class="h3 text-center p-3 text-light">Add Unit</p>
                <div class="text-light m-2 p-2" method="POST" enctype="multipart/form-data">
                    <!-- PointName input -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose Game</label>
                        <select class="form-control" id="gameid" name="gameid">
                        <?php
                            
                            $dataList = datalist('game','gameName');
                            
                            while ( $row = mysqli_fetch_array($dataList) ) {
                                $gameName = $row['gameName'];
                                $gameid = $row['gameid'];
                                ?>
                                <option value="<?php echo $gameid;?>"><?php echo $gameName;?></option>
                                <?php
                            }
                        ?>
                        </select>
                    </div>
                    <input type="hidden" name="adminid" id="adminid" value="<?php echo $_SESSION['adminid']?>">

                    <label for="form2Example1">Product</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="product" id="product" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">please fill the product<p>
                    </div>

                    <label for="form2Example1">Price</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="price" id="price" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">please fill the price<p>
                    </div>

                    <!-- GameTitle input -->
                    <label for="form2Example3">Thumbnail</label>
                    <div data-mdb-input-init class="form-outline text-light">
                        <input type="file" name="photo" id="photo" class="form-control text-white-50" />
                       
                    </div>

                   
                    
                    <!-- Submit button -->
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)" id="btn">Insert</button>
                    </div>
                </div>
                    
            </div>
                          
    </div>
    <?php
    //  include('../footer.php') 
     ?> 
</body>
    <!-- function from script -->
    <script src="../script/addUnit.js"></script>

    <script>

    // get element
    var Fkey ="844b04819129e83a6436901198bddfe7";
    var Fgameid = document.getElementById('gameid');
    var Fproduct = document.getElementById('product');
    var Fprice = document.getElementById('price');
    var Fphoto = document.getElementById('photo');
    var btn = document.getElementById('btn');
    var Fadminid = document.getElementById('adminid').value;

    let img;
                            
        // event
        btn.addEventListener("click",e=>{
            fetchImg();
        });

    </script>
</html>