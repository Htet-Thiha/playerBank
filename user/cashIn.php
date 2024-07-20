<?php
    session_start();

    include('../function/function.php');
    include('../db/connection.php'); 
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
    <title>Cash In</title>
</head>
<body>
<?php include('./header.php')?>


    <div class="d-flex justify-content-center m-5 p-5"> 
    
            <div class="form shadow-lg" >
                <p class="h3 text-center p-3 fw-bolder" style="color: #475569;">CASH IN</p>
            
                <div class="fw-bold m-2 p-2" method="POST" enctype="multipart/form-data" action="">
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['userid'];?>">
                    <label for="amount">Amount</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" name="amount" id="amount" class="form-control text-light" required/>
                        <p class="form-label text-white-50" for="form2Example1">fill your amount<p>
                    </div>

                    <label for="transcionId">Transcion ID</label>
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" name="transcionId" id="transcionId" class="form-control text-light" required/>
                        <p class="form-label text-white-50" for="form2Example1">fll from transcion<p>
                    </div>

                    <label for="screenshot">Screenshot</label>
                    <div data-mdb-input-init class="form-outline text-light">
                        <input type="file" name="screenshot" id="screenshot" class="form-control text-white-50" required/>
                    </div>
                    
                    <div class="m-2 p-2">
                        <button type="submit" name="submit" id="btn" class="btn btn-dark btn-block text-dark"  data-mdb-ripple-init
                        style="background-color:hsl(286, 61%, 92%)">Cash In</button>
                    </div>

                </div>

            </div>
                          
    </div>

    <div class="container my-5">
        <div class="d-flex mb-3 align-items-center">
            <h2 class="me-3">Cash In Process</h2>
        </div>
            
        <div class="table-responsive rounded" style="height:500px;overflow-y: auto;">
            <table class="table table-striped">
                <thead class="fs-5 fw-bold" style="position: sticky;top: 0;z-index: 1;">
                    <tr>
                        <th>Amount</th>
                        <th>Transcion Id</th>
                        <th>Sending Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $userid = $_SESSION['userid'];
                    $query = "SELECT * from `cashin` WHERE `userid`=$userid order by `created_at` DESC";
                    $go_query = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($go_query)){

                        $amount = $row['amount'];
                        $transcionId = $row['transcionId'];
                        $date = $row['created_at'];
                        $status = $row['status'];
                        if($status == "APPROVE"){
                            $color="success";
                        }else if($status == "DENINE"){
                            $color="danger";
                        }

                        echo "
                            <tr>
                                <td>{$amount}</td>
                                <td>{$transcionId}</td>
                                <td>{$date}</td>
                                <td class='text-{$color}'>{$status}</td>
                            </tr>
                        ";

                    }

                ?>
                
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    
    var Fkey ="844b04819129e83a6436901198bddfe7";
    var btn = document.getElementById('btn');   
    var screenshot = document.getElementById('screenshot');
    var transcionId = document.getElementById('transcionId');
    var amount = document.getElementById('amount');
    var id = document.getElementById('id');

    btn.addEventListener("click",e=>{
        console.log(" lick")
        fetchImg();
    })



    //Fetch img and admin register upload
    async function fetchImg() {
        var formdata = new FormData();
        formdata.append('key', Fkey);
        formdata.append('image', screenshot.files[0]);
        await fetch("https://api.imgbb.com/1/upload", {
            method: "post",
            body: formdata
        }).then(response => response.json()).then(data => {
            img = data.data.display_url;
            uploadPhp(img);
            console.log(img);
        });
    }

    async function uploadPhp(img) {
        let formData = new FormData();
        formData.append("img", img);
        formData.append("transcionId", transcionId.value);
        formData.append("amount", amount.value);
        formData.append("id",id.value);

        await fetch("./cashInReceive.php", {
            method: "post",
            body: formData
        }).then(response => response.json()).then(data => {
            if (data.error == "") {
                window.alert(data.success);
                window.history.back();
            } else{
                window.alert(data.error);
            }

        });
    }
</script>
</html>