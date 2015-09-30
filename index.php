<?php
if(isset($_POST["submit"])){

$to = "ahmad_rafique@yahoo.com";

$name = $_POST['fname'];

$email = $_POST['femail'];

$message = $_POST['fmsg'];


// Message lines should not exceed 70 characters (PHP rule), so wrap it

$message = wordwrap($message, 70);

// Send Mail By PHP Mail Function
$ok = mail($to, $name, $message, $email);

 if($ok)
         {
            echo "File Sent Successfully.";
            unlink($attachment); // delete a file after attachment sent.
         }
         
         else
         {
            die("Sorry but the email could not be sent. Please go back and try again!");
         }
      }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    @font-face{
        font-family: Bougan;
        
        src: url(./BouganSSi.ttf);
    }
    @font-face{
        font-family: Roissy;
        src: url(./Roissy.ttf);
    }
          .p{
              font-family: Bougan;
              font-size:23.13px
          }
          .col-md-6{
              font-family: Bougan;
              font-size:27.13px
          }

    .page-scroll{
        font-family: Bougan;
    }
    .txt1{
        font-family: Bougan;
    }
    .txt2{
        font-family: Bougan;
    }
    .txt3{
        font-family: Bougan;
    }
    
    


    </style>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebDealer-Solution</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    





  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  class = "page-scroll" href="#tf-home"><img id = "logoid" src = "LOGO.png"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="margin-top:10px">
            <li><a href="#tf-home" class="page-scroll"></a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>

            <li><a href="#tf-services" class="page-scroll">Services</a></li>
              <li><a href="#tf-team" class="page-scroll">Team</a></li>

            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-right">
        <div class="overlay">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <img style="height:400px ; color:black ; text-align: left " src="img/mobile.png" />
                    </div>
                    <div class="col-md-6" style="text-align:left">
                        <p id="intialhead"><span class="txt1">It's a beautiful Day</span><br /><strong><span class="color">Go out and enjoy it</span></strong></p>
                        <p id="intialhead1"><br /><strong><span class="txt2">We'll handle</span></strong><br /><strong><span class="txt3">your Customers</span></strong></p>
                    </div>
                    </div>
                <center><a href="#tf-about" class="fa fa-angle-down page-scroll"></a></center>
            </div>
        </div>
    </div>

      <!-- About Us Page
    ==========================================-->
      <div id="tf-about">
          <div class="container" style="margin-left:0px ; width:100% ; padding-right:0px">
              <h1 class="text-center" style="margin-bottom:30px">Engage  |  Qualify  |  Convert</h1>
              <div class="line">
                  <hr>
              </div>
              <div class="clearfix"></div>
              <div class="row">
                  <div class="col-md-6" style="padding-right:0px">
                      <a class="pull-left" style="color:black ; text-align: right ; padding-left : 33px ">CHAT TRANSCRIPTS SENT TO YOU IN REAL TIME</a><br /><small class="pull-left" style="text-align: right; font-size:20px; padding-left : 225px ">Every chat, that needs your attention,<br />is sent over to you within seconds once it <br />is complete so you can take necessary action.</small>
                      <img class="pull-right" style="height:100px ; color:black ; text-align: right" src="img/copy.png">
                  </div>



                  <div class="col-md-6" style="padding-right:0px">
                      <img class="pull-left" style="height:70px; width:100px ; color:black ; text-align: right ; margin-top:60px" src="img/laptop.png">
                      <a class="pull-right" style="color:black ; text-align: left; padding-right:92px ">CUSTOMIZED TO MATCH YOUR NEEDS</a><br /><small class="pull-right" style="text-align: left ; padding-right:38px">From chat windows to greetings and responses, <br />everything is customized according to your requirements.<br />is complete so you can take necessary action.</small>

                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6" style="padding-right:0px">
                      <a class="pull-left" style="color:black ; text-align: right ; padding-left : 227px ">24/7/365 MANAGED SUPPORT</a><br /><small class="pull-left" style="text-align: right; padding-left : 45px ">Be it off hours, weekends or even Holidays,<br />we make sure no customer leaves your website, unattended.</small>
                      <img class="pull-right" style="height:80px ; color:black ; text-align: right" src="img/clock.png">
                  </div>



                  <div class="col-md-6" style="padding-right:0px">
                      <img class="pull-left" style="height:100px ; color:black ; text-align: right ; margin-top:10px; margin-left:20px" src="img/page.png">
                      <a class="pull-right" style="color:black ; text-align: left; padding-right:315px ">MONTHLY REPORTS</a><br /><small class="pull-right" style="text-align: left ; padding-right:58px">Detailed reports are sent to you every month to<br />keep you updated so you can judge our performance.</small>

                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6" style="padding-right:0px">
                      <a class="pull-left" style="color:black ; text-align: right ; padding-left : 277px ">TRAINED REPRESENTATIVES</a><br /><small class="pull-left" style="text-align: right; padding-left : 109px ">Every representative that is assigned to your website<br /> is thoroughly trained and tested before going online.</small>
                      <img class="pull-right" style="height:80px ; color:black ; text-align: left; padding-right:20px" src="img/mobile-small.png">
                  </div>



                  <div class="col-md-6" style="padding-right:0px">
                      <img class="pull-left" style="height:100px ; color:black ; text-align: right ; margin-top:10px" src="img/knife.png">
                      <a class="pull-right" style="color:black ; text-align: left; padding-right:373px ">MULTIPURPOSE</a><br /><small class="pull-right" style="text-align: left ; padding-right:90px">Our chat service can be customized to be used as<br /> tool for sales, lead generation or customer service<br />for your website.</small>

                  </div>
              </div>


          </div>





      </div>

      <!--                 Servicesssssss
        -------------------------------------->
      <div id="tf-services" class="text-center" style="background-color:#F0F0F0">
          <div class="container">
              <div class="section-title center">
                  <h2>Take a look at <strong>our services</strong></h2>
                  <div class="line">
                      <hr>
                  </div>
                  <div class="clearfix"></div>

              </div>
              <div class="space"></div>
              <div class="row">
                  <div class="col-md-4 col-sm-6 service">
                      <img class="center" style="height:200px ; color:black ; text-align: right ; margin-top:10px" src="img/house.png">
                      <h4><strong>Retailers</strong></h4>
                      <p>Enter some text here</p>
                  </div>
                  <div class="col-md-4 col-sm-6 service">
                      <img class="center" style="height:200px ; color:black ; text-align: right ; margin-top:10px" src="img/car.png">
                      <h4><strong>Retailers</strong></h4>
                      <p>Enter some text here</p>
                  </div>
                  <div class="col-md-4 col-sm-6 service">
                      <img class="center" style="height:200px ; color:black ; text-align: right ; margin-top:10px" src="img/printer.png">
                      <h4><strong>Retailers</strong></h4>
                      <p>Enter some text here</p>
                  </div>

              </div>
          </div>
      </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>







    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                     <form method="post" name="contact_form"  action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="femail" name="femail" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" id="fmsg" name="fmsg" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" name="submit" class="btn tf-btn btn-default">Send</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. Contact at info@webdealersolutions.com</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
	
	<script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email");
	frmvalidator.addValidation("email","email",
	  "Please enter a valid email address");
	  
</script>


  </body>
</html>
