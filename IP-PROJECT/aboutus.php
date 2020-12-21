<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./././node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="./css/styles.css">
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
                    <li class="nav-item active">
                        <a href="./index.php" class="nav-link">
                            <span class="fa fa-home fa-lg text-dark"></span> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./aboutus.html" class="nav-link text-white">
                            <span class="fa fa-info fa-lg text-white"></span> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./contactus.php" class="nav-link">
                            <span class="fa fa-address-card fa-lg text-dark"></span> Contact
                        </a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a id="loginButton" role="modal">
                        <span class="fa fa-sigin text-dark"></span>Login
                    </a>
                </span>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div>
                    <h1 style="color: black; font-size: 1.5em;">Smart Tank System</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
            <div class="col-12">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-sm-12">
                <h2>Our Product</h2>
                <p>We developed a Smart Water Overhead Tank Level Monitoring Device. Nowadays, it is needed to proper maintenance of water overhead tanks in apartments, industries, and flats. From the ground, water is pumped to overhead tanks according to water level required in the tank.</p>
                <p>Our device is primarily targeted on reducing the manual efforts in checking the overhead tank level. Using Ultrasonic level sensors, it is engaged in monitoring the level of water in the tank up to 7.6 meters range. Hence the level of water will be captured and the data will be sent to the cloud platform. The user can monitor remotely and retrieve the data from the webpage. It gives notification and alarms via SMS and E-mail.</p>
            </div>
        </div>

        <div class="row row-content">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" role="tab" id="peterhead" >
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#peter" aria-expanded="true">
                                Key Info
                            </a>
                        </h3>    
                    </div>
                    <div class="collapse" id="peter" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li>Easy to install</li>
                                <li>Low maintenance cost</li>
                                <li>Compact elegant design</li>
                                <li>Ensures no overflows or dry running of pumps, thus saves electricity and water</li>
                                <li>Reduces man power</li>
                                <li>Consumes low energy though operating continuously</li>
                                <li>Accurate and clear indication of water level is provided</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="dannyhead">
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#danny" aria-expanded="true">Product Info</a>
                        </h3>
                    </div>
                    <div class="collapse" id="danny" data-parent="#accordion" >
                        <div class="card-body">
                            <p>Because of the advantages of the directional ultrasonic transmitter, direction, strength and easy to control, and no touch with the object being measured etc., our smart water tank level monitoring is widely used in the liquid level measurement. The Ultrasonic sensors measure the water level in the tanks and the data is transferred to the IoT devices in specific time intervals. Then, the level of water is measured in the tanks and data will be stored on the cloud platform.
                            The use of ultrasonic level measurement principle can be widely used in meteorological water level measurements, large tank level measurement, level measurement system of salt, testing well water, lakes, canals level, the tank liquid level, fill water level in industrial production etc. It can be designed at different ultrasonic level meters according to different needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      31-40-43, TE(I.T)<br>
                      DOn Bosco, Kurla<br>
                      MUMBAI<br>
                      <i class="fa fa-phone fa-lg"></i>   +123 4567 8903<br>
                      <i class="fa fa-fax fa-lg"></i>   +987 6543 3210<br>
                      <i class="fa fa-envelope fa-lg"></i>   <a href="mailto:confusion@food.net">TE(I>T)@314043.net</a>
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
                <div class="col-auto">
                    <p>© Copyright 2020 Manas Arham Sachin</p>
                </div>
           </div>
        </div>
    </footer>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
