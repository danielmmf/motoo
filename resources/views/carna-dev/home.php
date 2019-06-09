<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ==========================
    	META TAGS 
    =========================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- ==========================
    	TITLE 
    =========================== -->
    <title>Carna-dev</title>
    
    <!-- ==========================
    	FONTS 
    =========================== -->
  	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    
    <!-- ==========================
    	CSS 
    =========================== -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/TimeCircles.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/jquery.vegas.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"> 
    
    <!-- ==========================
    	JS 
    =========================== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!-- ==========================
    	MODAL SUBSCRIBE - START
    =========================== -->
    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribe" aria-hidden="true">
    	<div class="modal-dialog">
          	<div class="modal-body">
            	<div class="container">
                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h3>Subscribe email</h3>
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4 subscribe-image">
                        	<img src="/assets/images/icon1.png" class="img-responsive center-block" alt="">					
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-8 subscribe-text">
                        	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus rhoncus. Maecenas aliquet accumsan leo. Phasellus faucibus molestie nisl. Nullam at arcu a est.</p>					
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="email-address">Email address</label>
                                    <input type="email" class="form-control" id="email-address" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
            	</div>
        	</div>
		</div>
	</div>
    <!-- ==========================
    	MODAL SUBSCRIBE - END
    =========================== -->
      
	<!-- ==========================
    	MODAL CONTACT - START
    =========================== -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
        <div class="modal-dialog">
          	<div class="modal-body">
            	<div class="container">
                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h3>Contact</h3>
                    <div class="row">
                        <div class="col-sm-8">
                        	<div id="google-map">
                            	<div id="map-canvas"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<h4>Company Name</h4>
                        	<address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            (123) 456-7890
                          	</address>
                            <a href="mailto:#">first.last@example.com</a>
                        </div>
                    </div>
            	</div>
          	</div>
    	</div>
    </div>
	<!-- ==========================
		MODAL CONTACT  - END
	=========================== -->
	
	<!-- ==========================
    	MODAL SERVICES - START
	=========================== -->
    <div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="services" aria-hidden="true">
    	<div class="modal-dialog">
          	<div class="modal-body">
            	<div class="container">
                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h3>About our work</h3>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <img src="/assets/images/icon5.png" class="img-responsive center-block" alt="">
                            <h4>Fancy features</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/assets/images/icon3.png" class="img-responsive center-block" alt="">
                            <h4>Fully responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                        	<img src="/assets/images/icon4.png" class="img-responsive center-block" alt="">
                          	<h4>Sound</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                          	<img src="/assets/images/icon2.png" class="img-responsive center-block" alt="">
                          	<h4>Map integration</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
            	</div>
          	</div>
        </div>
	</div>
	<!-- ==========================
		MODAL SERVICES - END
	=========================== -->
    
    <!-- ==========================
    	CONTENT - START
    =========================== -->
    <section class="content">
        <div class="container"> 
            <h1>Carna-Dev</h1>
            <h2>Em breve</h2>
            <p>na loucura de <span>São paulo</span> on our new project. You can look forward to an amazing service, which completely <span>rock your world</span>. It's going to literally turn your world upside down. <span>So stay tuned</span>. For more information visit our website or you can check our <a href="#"><span><i class="fa fa-facebook-square"></i> Facebook</span></a></p>
            <a class="btn btn-primary" data-toggle="modal" data-target="#subscribe">Se Inscreva</a>
            <div class="line">
                <h3>falta quanto ?</h3>
            </div>
            <div id="countdown" data-date="2018-02-03 14:00:00"></div><!-- Circle Countdown here you can set up time to countdown just simply change atribute data-date="yyyy-mm-dd time" -->
        </div>
    </section>
    <!-- ==========================
    	CONTENT - END
    =========================== -->
    
    <!-- ==========================
    	FOOTER - START
    =========================== -->
    <footer class="navbar navbar-default navbar-fixed-bottom">
    	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
                <a class="navbar-brand visible-xs" href="#">Billboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="list-inline links navbar-left">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#subscribe">Subscribe</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#services">Our Work</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#contact">Contact</a></li>
                </ul>
            </div>
      	</div>
    </footer>
	<!-- ==========================
    	FOOTER - END
    =========================== -->
    
	<!-- ==========================
    	JS 
    =========================== -->        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOzXfh94YAJLcAkOllYd2ZY2My4Up2Fjw" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.vegas.js"></script>
    <script src="/assets/js/TimeCircles.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>
</html>