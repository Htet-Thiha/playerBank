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
     <!-- MDB js -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" defer ></script>
  
        <!-- Registerion input form -->
        <div class="d-flex justify-content-center m-2 p-5" > 
            <div class="wrapper form m-2 p-2">
                <div action="" method="post" enctype="multipart/form-data">
                    <h2 class="text-light">Register</h2>
                    <div class="inputbox m-2">
                        <input type="text"  class="form-control" name="adminEmail" id="adminEmail" placeholder="Email Address"   required>
                        <i class="fas fa-envelope text-light"></i>
                    </div>
                    <div class="inputbox m-2">
                        <input type="text"  class="form-control" name="adminName" id="adminName"    placeholder="Admin Name"   required>
                        <i class="fas fa-user text-light"></i>
                    </div>
                    <div class="inputbox m-2">
                        <input type="phone"  class="form-control" name="phone" id="adminPhone"   placeholder="Phone"   required>
                        <i class="fas fa-user text-light"></i>
                    </div>
                    <div class="inputbox m-2">
                        <input type="password"  class="form-control" name="adminPassword" id="adminPassword"    placeholder="Password"   required>
                        <i class="fas fa-lock text-light"></i>
                    </div>
                    <div class="inputbox m-2">
                        <input type="password"  class="form-control" name="cPassword"  id="cPassword"   placeholder="Comfirm Password"   required>
                        <i class="fas fa-key text-light"></i>
                    </div>
                    <div class="inputbox m-2">
                        <input type="file"  class="form-control" name="photo"  id="adminPhoto"  placeholder="profile picture"   required>
                        <i class="fas fa-file text-light"></i>
                    </div>
                    <div class="remember-forget text-light m-2">
                        <label for=""><input type="checkbox">Save Login</label>
                    </div>
                    
                    <button type="submit" name="submit" style="background-color:hsl(286, 61%, 92%)" id="btn"  class="btn m-2">SIGN UP</button>
                    <div class="register-link text-light">
                        <p>Already Have an Account? <a href="./login.php" class="btn btn-primary">Login</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- dull background for modal box -->
        <div class="backdrop"></div>

        <!-- modal box -->
        <div class="modalBox"  id="modalBox">
            <div class="bg-white p-4 border rounded-6">
                <h4 class="key"><</h4>
                <p>!!!!!!!!!This is your admin key and save it!!!!!!!!</p>
                <a href="./mainpage.php" class="btn btn-primary">GO</a>
            </div>

        </div>
    </body>
<!-- function from script -->
<script src="../script/adminRegister.js"></script>

<script>

// get element
var Fkey ="844b04819129e83a6436901198bddfe7";
var Femail = document.getElementById('adminEmail');
var Fname = document.getElementById('adminName');
var Fphone = document.getElementById('adminPhone');
var Fpassword = document.getElementById('adminPassword');
var Fcpassword = document.getElementById('cPassword');
var Fimage = document.getElementById('adminPhoto');
var btn = document.getElementById('btn');
var backdrop=document.querySelector('.backdrop');
var modalBox=document.querySelector('#modalBox');
var key=document.querySelector('.key');

let img;

    // event
    btn.addEventListener("click",e=>{
        
        fetchImg();

    });

</script>
</html>