<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{ 
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>

    <link rel="stylesheet" href="../css/request.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">
    <link rel="stylesheet" href="../css/popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        <!-- Brand/logo -->
        <h1 class="logo">
            <span class="word1">Movie</span>
            <span class="word2">Universe</span>

        </h1>

        <!-- Links -->
        <ul class="navbar-nav mr-auto ">
        </ul>
        <!-- Links -->
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="browse.php">Browse Movies</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active" href="#">Request</a>
            </li>
            <li class="nav-item dropdown dropleft">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"></a>
                    <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>

    

    <header>
        <div class="container req-box" >
            <form action="../controller/req.php" method="post">
                <div class="row">
                    <div class="col-md-6 box1">
                        <h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #22A7F0">Share you thoughts</span></h3>
                        
                        
                        <label for="message">Your feedback :</label><br>
                        <textarea name="msg" cols="30" rows="5" class="input"></textarea>
                        <input type="submit" class="btn" value="Send Request">
                    </div>
                    <div class="col-md-6 box2 hidden-sm">
                       
                        <p class="content" style="margin-top:30px;">Here you can report any bugs on our website and help us improve MovieUniverse even more.</p> 
                        <p class="content" style="margin-top:30px;">Thank you. </p>
                    </div>
                </div>   
            </form>
        </div>
    </header>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Success</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Your request submitted successfully.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Copyright Developed by SEEU Student.</p>
    </div>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>