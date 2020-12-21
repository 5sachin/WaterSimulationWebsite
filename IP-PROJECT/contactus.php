<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Tank System</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript">
        function Feedback()
        {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            var areacode = $('#areacode').val();
            var telnum = $('#telnum').val();
            var emailid = $('#emailid').val();
            var feedback = $('#feedback').val();
            var contactvia = $( "#ContactVia option:selected" ).text();

            if($('input[type=checkbox]').prop('checked'))
            {
                var contactornot = "Yes";
            }
            else
            {
                var contactornot = "No";
            }
            

            if(firstname !="" && lastname != ""  && feedback != "" && emailid != "")
            {
                $("#loading_spinner").css({"display":"block"});
                $.ajax
                ({
                    type:'post',
                    url:'FeedBackSubmit.php',
                    data:{
                    Feedback:"Feedback",
                    firstname:firstname,
                    lastname:lastname,
                    areacode:areacode,
                    telnum:telnum,
                    emailid:emailid,
                    contactornot : contactornot,
                    contactvia:contactvia,
                    feedback:feedback,
                    },
                    success:function(response) {
                        if(response=="success")
                        { 
                            console.log("Feedback Form Submiited Successfully");
                            document.getElementById("error").innerHTML = response;
                            document.getElementById("error").style.color = 'green';
                            $("#loading_spinner").css({"display":"none"});
                        }
                        else if(response == "Fail")
                        {
                            console.log("Error in Submitting Feedback Form")
                            $("#loading_spinner").css({"display":"none"});
                            document.getElementById("error").innerHTML = response;
                            document.getElementById("error").style.color = 'red';
                        }
                        else
                        {
                            console.log("Unknown Error");
                            $("#loading_spinner").css({"display":"none"});
                            document.getElementById("error").innerHTML = "Unknown Error Contact Admin";
                            document.getElementById("error").style.color = 'red';
                        }
                    }
                });
            }
            else
            {
                document.getElementById("error").innerHTML = "Fill All The Details";
                document.getElementById("error").style.color = 'red';
                $("#loading_spinner").css({"display":"none"});
            }
            return false;
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-light bg-primary navbar-expand-sm fixed-top text-dark">
        <div class="container text-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto text-dark">
                    <li class="nav-item active"><a href="./index.php" class="nav-link"><span class="fa fa-home fa-lg text-dark"></span> Home</a></li>

                    <li class="nav-item"><a href="./aboutus.php" class="nav-link"><span class="fa fa-info fa-lg text-dark"></span> About</a></li>
                
                    <li class="nav-item"><a href="./contactus.php" class="nav-link text-white"><span class="fa fa-address-card fa-lg text-white"></span> Contact</a></li>
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
                <div class="col-12 col-sm-6">
                    <h1 style="color: black; font-size: 1.5em;">Smart Tank System</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
              <h3>Location Information</h3>
            </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                <h5>Our Address</h5>
                <address style="font-size: 100%">
		            31, Don Bosco College<br>
		            Kurla, Mumbai<br>
		            421306<br>
		            <i class="fa fa-phone"></i>: +123 456 7890<br>
		            <i class="fa fa-fax"></i>: +987 654 3210<br>
		            <i class="fa fa-envelope"></i>:
                    <a href="mailto:confusion@food.net">314043batchC@gmail.com</a>
		        </address>
            </div>
            <!-- <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
                <div></div>
            </div> -->
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel: +8692028365"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="mailto: sachinmishra10072000@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
                <h3>Send us your Feedback</h3>
            </div>
            <div class="col-12 col-md-9">
                <form method="post" onsubmit="return Feedback();">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">
                            <b>First Name:</b>
                        </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">
                            <b>Last Name:</b>
                        </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">
                            <b>Contact Tel. :</b>
                        </label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel Num.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">
                            <b>Email Id:</b>
                        </label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" name="approve" class="form-check-input checkbox" id="approve" value="Yes">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you ?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control" id="ContactVia">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">
                            <b>Your Feedback:</b>
                        </label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="12" placeholder="Your feedback"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-4">
                            <input type="submit" name="submit" class="btn btn-primary form-control" value="Submit">
                        </div>
                        <div class="col-md-2">
                            <p id="loading_spinner" style="display: none;"><img src="images/loading2.gif"></p>
                        </div>
                        <div class="col-md-2 ml-auto">
                            <span id="error" class="ml-auto"></span>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
                
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
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
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
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
