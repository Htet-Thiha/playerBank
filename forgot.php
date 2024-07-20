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
    <title>Forgot</title>
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
    <div class="w-100 d-flex justify-content-center mt-5 border border-primary rounded-6 px-5 bg-dark">
        <form class="mt-3" action="" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" require/>
                <label class="form-label" for="form2Example1">Enter email address</label>
            </div>
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sent code</button>
        </form>
    </div>
    <div class="w-100 d-flex justify-content-center my-2 border border-primary rounded-6 px-5 bg-dark">
        <form class="mt-3" action="" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="email" id="form2Example1" class="form-control" require/>
                <label class="form-label" for="form2Example1">Enter code</label>
            </div>
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sent code</button>
        </form>
    </div>


</div>

<?php 
// include ('footerLogin.php'); 
?>
</body>
<script>
</script>
</html>