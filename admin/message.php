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
    
    <title>Message</title>
</head>
<body>
   

    <?php include('./adminHeader.php') ?>

    <div class="d-flex flex-column p-5 m-5"> 
            

           
            <div class="dataFlow" style="max-height: 500px;">
                <p class="h3 text-center p-3 text-light">Messages</p>
                <div class="container">
                <table class="roboto-serif-regular justify-content-center table-sm text-light align-middle mb-2" style="width:100%;height:100vh" >
                        <thead>
                            <tr>
                            <th style="width:400px ;height:20px ;overflow:hidden">User</th>
                            <th class="text-center" style="width:400px ;height:20px ;overflow:hidden">Message</th>
                            <th style="width:200px ;height:20px ;overflow:hidden">Date</th> 
                            <th style="width:100px ;height:20px ;overflow:hidden">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                            
                            <td><a class="nav-link" href="chatbox.php" >
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                                </a>
                            </td>
                            
                            
                            <td class="text-justify">
                            <a class="nav-link" href="chatbox.php">
                                Give me back my money!</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                          
                            </tr>
                         
                            <tr >
                            </a>
                            <td>
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                           
                           
                            <td class="text-justify">Buy two diamonds</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                            </tr >

                            <tr >
                            <td>
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:red;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            
                           
                            <td class="text-justify">Buy two diamonds</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                            </tr>

                            <tr >
                            <td >
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            
                           
                            <td class="text-justify">Buy two diamonds</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                            </tr>

                            <tr >
                            <td >
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            
                           
                            <td class="text-justify">Buy two diamonds</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                            </tr>

                            <tr >
                            <td data-href="mainpage.php">
                            <div class="d-flex align-items-center bg-image hover-zoom" style="position: relative;">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                    <span style="width: 10px; height:10px; border-radius:50% ; background-color:greenyellow;
                                    position:absolute; top:3px ; left:40px "></span>
                                <div class="ms-3 text">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-white-50 mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            
                           
                            <td>Buy two diamonds</td>
                            <td>
                               1st March(10A.M)
                            </td>
                            <td>
                            <a data-mdb-ripple-init type="button" class="btn"
                            href="chatbox.php"
                            style="background-color:hsl(286, 61%, 92%) ; margin-left:20px">Reply</a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                
       
            </div>
    </div>
            <?php include('../footer.php') ?>
          
   
    
</body>
</html>