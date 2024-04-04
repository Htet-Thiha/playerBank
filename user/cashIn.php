<?php


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
    <title>Add Product</title>
</head>
<body>
<?php include('./header.php')?>


    <div class="d-flex justify-content-center m-5 p-5"> 
    
            <div class="form " >
                <p class="h3 text-center p-3 text-light">Cash In</p>
            
                <form class="text-light m-2 p-2" method="POST" enctype="multipart/form-data">
                    <!-- PointName input -->
                    <label for="form2Example1">Amount</label>
                    <div data-mdb-input-init class="form-outline">
                        
                        <input type="text" name="gameName" id="form2Example1" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">fill your amount<p>
                    </div>

                    <label for="form2Example1">Transcion ID</label>
                    <div data-mdb-input-init class="form-outline">
                        
                        <input type="text" name="unitName" id="form2Example1" class="form-control text-light" require/>
                        <p class="form-label text-white-50" for="form2Example1">fll from transcion<p>
                    </div>

                      <!-- GameTitle input -->
                    <label for="form2Example3">Screenshot</label>
                    <div data-mdb-input-init class="form-outline text-light">
                        <input type="file" name="photo" id="form2Example3" class="form-control text-white-50" />
                       
                    </div>
                
                        <!-- Submit button -->
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Cash In</button>
                    </div>
                </form>
                    

            </div>
                          
    </div>
</body>
</html>