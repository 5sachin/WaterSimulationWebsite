<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./././node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script type="text/javascript">
    function do_login()
    {
        var email=$("#inputEmail").val();
        var pass=$("#inputPassword").val();
     
        if(email!="" && pass!="")
        {
            $("#loading_spinner").css({"display":"block"});
            $.ajax
            ({
                type:'post',
                url:'LoginValidation.php',
                data:{
                do_login:"do_login",
                email:email,
                password:pass
                },
                success:function(response) {
                    if(response=="success")
                    { 
                        console.log(response);
                        window.location.href="UserPage.php";
                    }
                    else
                    {
                        $("#loading_spinner").css({"display":"none"});
                        document.getElementById("error").innerHTML = response;
                        document.getElementById("error").style.color = 'red';
                    }
                }
            });
        }
        else
        {
            $('#error').text("Fill All The Details").css({"color":"red"});
            $("#loading_spinner").css({"display":"none"});
        }
        return false;
    }
    </script>
        <title>Smart Tank System</title>
</head>

<body>
    <nav class="navbar navbar-light bg-primary navbar-expand-sm fixed-top text-dark">
        <div class="container text-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto text-dark">
                <li class="nav-item active"><a href="#" class="nav-link text-white"><span class="fa fa-home fa-lg text-white"></span> Home</a></li>

                <li class="nav-item"><a href="./aboutus.php" class="nav-link"><span class="fa fa-info fa-lg text-dark"></span> About</a></li>
                
                <li class="nav-item"><a href="./contactus.php" class="nav-link"><span class="fa fa-address-card fa-lg text-dark"></span> Contact</a></li>
            </ul>
            <span class="navbar-text">
                <a id="loginButton" role="modal">
                    <span class="fa fa-sigin text-dark"></span>Login
                </a>
            </span>
        </div>
        </div>
    </nav>

    <div id="loginModal" class="modal fade justify-content-center" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <span id="sucess_message"></span>
                    <form method="post" action="do_login.php" onsubmit="return do_login();">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-sm-8 text-center">
                                <label class="sr-only" for="inputEmail">Email Id:</label>
                                <input type="text" name="email" class="form-control form-control-sm mr-1" id="inputEmail" placeholder="Enter Email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-sm-8 text-center">
                                <label class="sr-only" for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm mr-1" id="inputPassword" placeholder="Enter Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                            </div>
                        </div>
                        
                        <div class="form-row justify-content-center">
                            <div class="form-group col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="1" />
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                    <span id="error" class="ml-auto"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <button type="button" class="btn btn-secondary col-sm-8 form-control" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="submit" id="loginSubmitButton" value="Login" class="btn btn-primary col-sm-8 form-control mt-2">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 sol-sm-8 text-center">
                                <p id="loading_spinner" style="display: none;"><img src="images/loading2.gif"></p>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-8">
                    <h1 style="font-size: 1.5em; color: black;">Smart Tank System</h1>
                    <p class="text-dark" style="font-size: 1.3em;">IOT based Water Level Monitoring system is an innovative system which will inform the users about the level of liquid and will prevent it from overflowing. ... The LCD screen is used to display the status of the level of liquid in the containers.</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="images/carousel1.jpg" class="d-block img-fluid"
                            alt="carousel1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carousel2.png" class="d-block img-fluid".jpg
                            alt="carousel2">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="images/carousel3.jpg" class="d-block img-fluid".jpg
                            alt="carousel3">
                            
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <button class="btn btn-danger btn-sm" id="carouselButton">
                    <span class="fa fa-pause" id="carousel-button-icon"></span>
                    </button>
                        
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="col-md-12 col-sm-4">
                <h1 style="font-size: 1.5em;">Water Tank Level Monitoring</h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <p style="font-size: 1.3em;">
                    Our Solution provides you with the real-time insights into your available water inside your tanks, with just a sensor installed on the water tank. Intellia IoT solution ensures that you won’t face any issue such as water getting spilled out from overhead water tanks etc. You will get alerted when your tank is about to get empty or full. The solution also allows users to change the threshold limits.
                </p>              
            </div>
            <img src="images/info.jpg" class="col-md-4 col-sm-4  d-sm-none d-md-block">
        </div>
               
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      31-40-43, TE(I.T)<br>
                      Don Bosco, Kurla<br>
                      MUMBAI 400030<br>
                      <i class="fa fa-phone fa-lg"></i>   +123 4567 8903<br>
                      <i class="fa fa-fax fa-lg"></i>   +987 6543 3210<br>
                      <i class="fa fa-envelope fa-lg"></i>   <a href="mailto:confusion@food.net">TE(I.T)@314043.net</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon-icon btn-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">         
                <div class="col-auto ">
                    <p>© Copyright 2020 Sachin Manas Arham</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>


</html>