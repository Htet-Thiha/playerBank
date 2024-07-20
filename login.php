<?php

$a=true;
//to connect database
include("./db/connection.php");
//functions
include("./function/function.php");

if(isset($_POST['submit'])){

  $email=$_POST['email'];

  $check =adminOrUser($email);
  if($check=="admin"){
    adminLogin($_POST);
    
  }else{
    userLogin($_POST);
  }
}

if(!($a)){
  $open = "open";
  $show = "show";
}else{
  $open ="";
  $show ="";
}

if(isset($_POST['keySubmit'])){
  $email=$_POST['email'];
  $key=$_POST['key'];
  $data=detail($email,'admin','email');
  $keyCheck = $data['keycode'];


  // echo($keyCheck)."dbkey";
  if($key == $keyCheck){
    $a=true;
    header("Location:./admin/adminDashboard.php");
  }else{
    echo"<script>window.alert('Admin Key is wrong!!!')</script>";
    $a=true;
    // header("Location:login.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css link -->
    <link rel="stylesheet" href="./css/loginSytle.css">
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

<link rel="stylesheet" href="css/sheetDesign.css">
</head>
<body>
<?php include("./header.php")
?>

<div class="w-50 m-auto mt-5 pt-5">
<div class="w-100 d-flex justify-content-center my-5 border border-primary rounded-6 p-5 bg-dark">
    <form class="mt-3 mb-3" action="" method="POST">
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" name="email" id="form2Example1" class="form-control" require/>
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" name="password" id="form2Example2" class="form-control" require />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
            <label class="form-check-label text-light" for="form2Example34"> Remember me </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="forgot.php">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center text-light">
        <p>Not a member? <a href="./user/register.php">Register</a></p>
        <p>or sign up with:</p>
        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <a href="http://www.google.com"><i class="fab fa-google"></i></a>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
         <a href="http://www.github.com"> <i class="fab fa-github"></i></a>
        </button>
      </div>
    </form>
    </div>
    <div class="backdrop <?php echo($show)?>"></div>

    <!-- modal box -->
    <div class="modalBox <?php echo($open)?>"  id="modalBox">
      <div class="bg-white p-4 border rounded-6">
       <!-- modal box close button -->
      <button type="button" class="btn-close position-absolute end-0 me-4" onclick=closeFunction()></button>
      <form action="" method="POST">
          <div class="form-group">
          <input type="hidden" name="email" id="" value="<?php echo($email)?>">
          <label for="key">Enter Your Key</label>
          <input type="text" name="key" class="form-control" id="key" aria-describedby="emailHelp" placeholder="Enter key">
          </div>
          <button type="submit" name="keySubmit" class="btn btn-primary mt-2 btn-block">GO</button>
        </form>
      </div>
     
  </div>
</div>


<?php 
// include ('footerLogin.php'); 
?>
</body>
<script>

  function closeFunction(){
    window.history.back();
  }
</script>
</html>