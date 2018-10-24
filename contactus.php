<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Author Meta -->
        <meta name="author" content="Aimerr SOlutions">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="utf-8">
		
		<link rel="shortcut icon" href="images/logo-f.png">

        <!-- Site Title -->
        <title>Services - Segments we specialise | 50Uniform</title>
        
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100|Poppins:300,400,700">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/custome.css">
        
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>


    
    <body>
        
        <!-----Include Header------->
        <?php include("header.php"); ?>
		<!-----Include Header ends------->

        <main id="main" class="site-content">
            <div class="page-header style-2 parallax-bg" style="background-image: url('images/contact-bg.jpg');">
                <div class="overlay dark"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="page-title text-center">
                                <h2 class="title-light">Contact us</h2>
                            </div>
                            <ul class="page-breadcrumb roboto-slab text-uppercase text-center">
                                <li><a class="text-white" href="index.php">Home</a></li>
                                <li><a class="text-white" href="services.php">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
			<section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <form id="contact-form" class="row contact-form" method="post">
                                <div class="col-xs-12">
                                    <div class="input-field">
                                        <input id="name" type="text" name="name" class="ml-input">
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-field">
                                        <input id="phoneNumber" type="text" name="phoneNumber" class="ml-input">
                                        <label for="phoneNumber">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-field">
                                        <input id="email" type="email" name="email" class="ml-input">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-field" style="margin-bottom:0px">
                                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-right">
									<p class="check-recapcha" align="left">Check re-Capcha.</p>
									<div class="g-recaptcha" data-sitekey="6Le8fF8UAAAAANtrOys7QpExTIGmbQXFFYdR4oDF"></div>
									<div class="recapcha-error">Seems like a <strong>Spammer</strong>, unable to send the message.</div>
                                    <button id="c-submit" class="btn-flat btn-default radius text-uppercase transition" type="submit">Submit</button>
                                </div>
                                <div class="col-xs-12">
                                    <div class="msg-success">Your message sent successfully!</div>
									<div class="msg-error">Something went wrong, please try again later.</div>
									<div class="msg-failed">Something went wrong, check your email id.</div>
                                </div>
                            </form> <!-- end .row -->
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-md-offset-1 col-md-3">
						<div class="contact-block mb-30 dark">
                                <h4 class="title-ls text-uppercase mb-30">location</h4>
                                <p class="text-uppercase">Sama Al Rahmaniah Readymade Gar Tr LLC. <br>P O Box: 69933, Sharjah, U.A.E</p>
                            </div>
                            <div class="contact-block mb-30 dark">
                                <h4 class="title-ls text-uppercase mb-30">cell number</h4>
                                <p class="text-uppercase">Phone: 06 7155299  <br>Phone: 050 8643676</p>
                            </div>
                            
                            <div class="contact-block dark">
                                <h4 class="title-ls text-uppercase mb-30">email support</h4>
                                <p>
                                    <a class="text-link" href="mailto:info@samagarments">info@samagarments.com</a> <br>
                                    <a class="text-link" href="mailto:sales@50uniform.com">sales@50uniform.com</a>
                                </p>
                            </div>
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section>
            <!-- //.section-full -->
            

            
        </main> <!--  .site-content  -->

        <!-- include footer -->
		<?php include("footer.php");?>
        <!-- include footer ends -->


        <!--
        JavaScripts
        ========================== -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/materialize.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/form.min.js"></script>
        <script src="js/jquery-validation.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>