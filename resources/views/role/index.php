 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	 body {
		    display: flex;
		    min-height: 100vh;
		    flex-direction: column;
		  }

		  main {
		    flex: 1 0 auto;
		  }
		     
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     <!-- Dropdown Structure -->
		
		<nav>
		  <div class="nav-wrapper">
		    <a href="#!" class="brand-logo">Logo</a>
		    <ul class="right hide-on-med-and-down">
		      <li><a href="sass.html">Sass</a></li>
		      <li><a href="badges.html">Components</a></li>
		      <!-- Dropdown Trigger -->
		      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
		    </ul>
		  </div>
		</nav>
	  <div class="section no-pad-bot" id="index-banner">
	    <div class="container">
	      <div id="maps"></div>

	    </div>
	  </div>

		<ul id="dropdown1" class="dropdown-content">
		  <li><a href="#!">one</a></li>
		  <li><a href="#!">two</a></li>
		  <li class="divider"></li>
		  <li><a href="#!">three</a></li>
		</ul>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript">
      	
      	(function($){
		  $(function(){

		    $('.sidenav').sidenav();
		    $(".dropdown-trigger").dropdown();

		  }); // end of document ready
		})(jQuery); // end of jQuery name space

      </script>
    </body>
  </html>
