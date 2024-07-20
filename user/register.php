<?php 

//to connect database
include ('../db/connection.php');

//functions link
include ('../function/function.php');

//add user to database
if(isset($_POST['registerBtn']))
{

   addregister();

    header("location:../login.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">  <meta name="viewport" content="width=device-width, initial-scale=1.0">  <title>Document</title>
    <!-- css link -->
    <link href="../css/sheetDesign.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/loginSytle.css">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
        
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
       
    <!-- MDB css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
        
    <title>Register Form</title>

</head>
<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
<?php include("./header.php")
?>
  

    <!-- Registerion input form -->
    <div class="d-flex justify-content-center m-2 p-5 mt-5" > 
        <div class="wrapper form m-2 p-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username" class="form-label text-light">User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="Please Enter User Name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" name="email"  class="form-control" placeholder="Please Enter Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label text-light">Phone</label>
                    <input type="phone" name="phone"  class="form-control" placeholder="Please Enter Phone" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="password" required>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label text-light">Confirm Password</label>
                    <input type="password" name="cpassword"  class="form-control" placeholder="confirm password" required>
                </div>
                <div class="mb-3">
                    <label for="nrcNumber" class="form-label text-light">NRC Number</label>
                    <input type="text" name="nrcNumber"  class="form-control" placeholder="Nrc Number" required>
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label text-light">Date Of Birth</label>
                    <input type="date" name="dateOfBirth"  class="form-control" placeholder="date of birth" required>
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label text-light">Profile Picture</label>
                    <input type="file" name="photo"  class="form-control" placeholder="date of birth" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label text-light">Address</label>
                    <textarea name="address"  cols="30" rows="10" class="form-control" placeholder="Enter your address" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-outline-info" name="registerBtn">Register</button>
                </div>                    
            </form>
        </div>
    </div>

    <?php
     include("../footer.php")
    ?>
</body>
</html>