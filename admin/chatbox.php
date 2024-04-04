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
    <title>Chatbox</title>
</head>
<body>
<?php include('./adminHeader.php') ?>

    <div class="d-flex flex-column mt-5" style="height: 620px;  position:relative"> 
            
           
            <div class="chatback text-center mt-5" style="height: 100vh; position:relative">
                <p class="h3 text-center p-3 text-light" style="margin-bottom: 20px;">Chatbox</p>
                
                    <div class="history d-flex flex-column justify-content-between">
                        <div class="d-flex text-left bg-light" style="width: 400px;  padding:10px ;
                        border-radius:10px ; border:solid 2px black">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px; margin-right:20px"
                                    class="rounded-circle"
                                    />
                                <div>
                                    <p>Give me back my money!</p>
                                </div>
                        </div>

                        <div class="d-flex ms-auto text-left bg-light" style="width: 400px; 
                         padding:10px ; border:solid 2px black;
                        border-radius:10px">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px ;margin-right:20px"
                                    />
                                <div>
                                    <p>Shit Shit!!!</p>
                                </div>
                        </div>
                        <div class="d-flex text-left bg-light" style="width: 400px; 
                         padding:10px ;border:solid 2px black;
                        border-radius:10px ;">
                              <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px; margin-right:20px"
                                    class="rounded-circle"
                                    />
                                <div>
                                    <p>Take this...</p>
                                </div>
                        </div>
                        
                        <div class="d-flex ms-auto text-left bg-light" style="width: 400px; 
                        padding:10px ; border:solid 2px black;
                        border-radius:10px">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px ;margin-right:20px"
                                    />
                                <div>
                                    <p>Shit Shit!!!</p>
                                </div>
                        </div>


                    </div>
                   
                    <div class="chatbox" style="position:absolute; bottom:-80px; left:20% ;">
                        <form class="d-flex align-items-center justify-content-around">
                            <div data-mdb-input-init class="form-outline" >
                            
                                <input type="text" id="form2Example1" class="replytext form-control text-light p-2" style="height: 20px;"/>
                                <p class="form-label text-white-50" for="form2Example1">Reply<p>
                            </div>
                           
                            <button data-mdb-ripple-init type="button" class="btn"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Send</button>
                           
                           
                        </form>
                    </div>
                
            
                   
                   
                   
            </div>
               <?php include('../footer.php') ?>        

                
        
</body>
</html>