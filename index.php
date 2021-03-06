<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIXIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>
<body data-spy="scroll" data-target=".navbar">
    <!-- Navbar -->
    <nav role="navigation" class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logo" src="img/LOGO.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <button class="btn btn-outline-success" data-target="#loginModal" data-toggle="modal">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-success" data-target="#signUpModal" data-toggle="modal">Register</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- SignUp Form -->
    <form method="post" id="signUpForm">
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5" id="signUpMessage"></div>
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label>Re-Enter Password</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="submit" id="signup" class="btn btn-primary">Sign Up</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Login Form -->
    <form method="post" id="loginForm">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Log In</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body mx-3">
                            <div class="md-form mb-5" id="loginMessage"></div>
                            <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <label>Email</label>
                                <input type="email" name="loginemail" class="form-control">
                            </div>
                            <div class="md-form mb-5">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <label>Password</label>
                                <input type="password" name="loginpassword" class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" id="login" class="btn btn-danger">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- header -->
    <div class="jumbotron" id="home">
        <div class="container">
            <h1>Welcome To FIXIT</h1>
            <h2>An Initiative To Make World A Better Place</h2>
        </div>
    </div>
    <div id="about">
        <h1><u>What Are We After All?</u></h1>
        <p>Since waste management is an important environment issue ,why not deal with it in a more systematic way.<br> In Fixit, we provide you waste management services. <br>Spreaded throughout Ahmedabad city Fixit serves municipal, commercial, industrial and residential customers</p>
        <h1><u>Steps To Follow</u></h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/clickhere.png" class="aboutImage">
                    <h2>Click On Get Waste</h2>
                </div>
                <div class="col-md-4">
                    <img src="img/location.png"
                    class="aboutImage">
                    <h2>Give Your Location</h2>
                </div>
                <div class="col-md-4">
                    <img src="img/helper.png" 
                    class="aboutImage">
                    <h2>We Will Come To Collect</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="container-fluid">
        <h1><u>Our Services</u></h1>
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/recycling.png" >
                    <div class="carousel-caption">
                        <h2>Recycling</h2>
                        <p>We ensure to pass the waste through different streams of recycling and resource recovery</p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="img/disposal.png">
                    <div class="carousel-caption">
                        <h2>Disposal</h2>
                        <p>We ensure that final waste residue is deposited scientifically in sanitary landfills</p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="img/collection.jpg">
                    <div class="carousel-caption">
                        <h2>Waste Collection</h2>
                        <p>We ensure proper segregation of waste at source</p>
                    </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Main Js -->
  <script type="text/javascript" src="index.js"></script>

</body>
</html>