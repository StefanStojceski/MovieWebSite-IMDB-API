<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    } else {
        header('location: ../user/index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Universe</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/popup.css">

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        <!-- Brand/logo -->

        <h1 class="logo">
            <span class="word1">Movie</span>
            <span class="word2">Universe</span>

        </h1>


        <!-- Links -->
        <ul class="navbar-nav mr-auto">

        </ul>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="browse.php">Browse Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popup1">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popup2">Sign Up</a>
            </li>

        </ul>
    </nav>



    <!-- Pop up boxes for login and registration -->
    <div id="popup1" class="popup-overlay">
        <div class="log-popup">
            <h2>Log In</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/login.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Username" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Log In" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Sign Up</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/register.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Enter your name" name="fullname" class="log-input" required>
                    <br>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Enter your email" name="email" class="log-input" required>
                    <br>
                    <i class="fa fa-link icon"></i>
                    <input type="text" placeholder="Enter username" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="checkbox" name="chkbox" required> I agree to Terms and Conditions
                    <br>
                    <input type="submit" value="Sign Up" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Success</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Acount is created Successfully. Now you can login in your account.</p>
                <a href="#popup1" class="btn-main btn-main-primary">
                    Log In
                </a>
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Username or Email already exist, Try Again.</p>
            </div>
        </div>
    </div>
    <div id="error1" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>No Account Found, Try Again.</p>
            </div>
        </div>
    </div>
    <!-- End of Pop up boxes for login and registration -->


    <header>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../image/badboys.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../image/joker.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../image/spenser.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../image/thecall.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../image/invisibleman.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <center>
                <div class="carouselele">
                    <div class=" inner-body ">
                        <h1 class="title "><span style="color: #fff "> Welcome </span>
                            <span style="color: #22A7F0; text-transform:lowercase;"></span>
                        </h1>
                        <p style="color: white" class="content">
                            Welcome to
                            <span style="font-weight:bold; color: #22A7F0">MovieUniverse</span> | It is site where you can view information about your favourite movie. MovieUniverse
                            is best known for the excellent
                            <span style="font-weight:bold; color: #22A7F0">Information</span> for each and every released and not released movie.
                        </p>
                    </div>
                    <div class="container">
                        <a href="browse.php" class="btn btn-primary">
                            Browse Movies Now
                        </a>
                    </div>
                </div>
            </center>

        </div>
        </div>
    </header>

    <br/>

    <div id="demo" class="carousel slide container" data-ride="carousel">
        <div class="ratedMoviesHead">
            <h1><span style="color: #fff ">Top Rated Movies </span></h1>
        </div>
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="topMovies1" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies2" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies3" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies4" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies5" class="row"></div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev"  href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="footer">
        <p>&copy; Copyright Developed by SEEU student.</p>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        getTopMovies();
    </script>


</body>

</html>