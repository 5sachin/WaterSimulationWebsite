<?php
session_start();
?>

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
    <link rel="stylesheet" type="text/css" href="./css/mainpage.css">
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
                <li class="nav-item active"><a href="index.php" class="nav-link"><span class="fa fa-home fa-lg text-dark"></span> Home</a></li>

                <li class="nav-item"><a href="./aboutus.html" class="nav-link"><span class="fa fa-info fa-lg text-dark"></span> About</a></li>
                
                <li class="nav-item"><a href="./contactus.html" class="nav-link"><span class="fa fa-address-card fa-lg text-dark"></span> Contact</a></li>
                <li class="nav-item"><a href="Logout.php" class="nav-link" id="logout"><span class="fa fa-sign-out fa-lg text-dark"></span> Log Out</a></li>
            </ul>
            <span class="navbar-text">
                <a>
                    <span class="fa fa-sigin text-white" id="username"><?php echo $_SESSION['email']; ?></span>
                </a>
            </span>
        </div>
        </div>
    </nav>

    <!-- <div id="ErrorModal" class="modal fade justify-content-center" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Error</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body justify-content-center">
                    <span id="error"></span>
                </div>
            </div>
        </div>
    </div> -->
    

    <div class="container bg-light">
        <div class="row mt-5 justify-content-center">
            <div class="align-self-center gauge col-12">
                    <div class="gauge_body">
                        <div class="gauge_fill">  
                        </div>
                        <div class="gauge_cover">0%
                        </div>
                    </div>
            </div>       
        </div>
        <div class="row mt-5" style="font-size: 1.2rem;">
            <label class="col-md-3 col-9 font-weight-bold">Current Percentage of Water: </label>
            <span class="col-md-3 col-3" id="percentageshow">--</span>
            <label class="col-md-3 col-9 font-weight-bold">Total Percentage of Water: </label>
            <span class="col-md-3 col-3">100%</span>
            <label class="col-md-3 col-9 font-weight-bold">Current Water Level: </label>
            <span class="col-md-3 col-3" id="currentheightshow">--</span>
            <label class="col-md-3 col-9 font-weight-bold">Total Height of Tank: </label>
            <span class="col-md-3 col-3" id="totalheightshow"></span>
            <label class="col-md-3 col-9 font-weight-bold">Last Updated At: </label>
            <span class="col-md-3 col-3" id="lastupdated">--/--/--</span>
            <span class="col-md-3 col-9" id="error"></span>
        </div>
        <div class="row row-content justify-content-center">
            <div class="col-12 col-sm-12">
                <div class="form-group">
                <div class="input-group">
                    <input type="text" name="search_text" id="search_text" placeholder="Search By Date" class="form-control">
                </div>
            </div>

            </div>
            <div class="table-wrapper-scroll-y col-12 col-sm-12 my-custom-scrollbar" style="height: 600px; overflow-y: scroll;">
                <table class="table table-striped table-fixed">
                            <thead>
                                <tr>
                                    <th scope="col" >Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Current Level</th>
                                    <th scope="col">Total Level</th>
                                </tr>
                            </thead>
                            <tbody class="tableIndiactor">
                                
                            </tbody>
                        </table>
            </div>
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
                        <li><a href="./contactus.html">Contact</a></li>
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
                    <p>© Copyright 2020</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/mainpage.js"></script>
</body>


</html>