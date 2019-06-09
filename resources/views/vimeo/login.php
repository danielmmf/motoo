<!DOCTYPE html>
<html lang="en" ng-app="uberApp">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login | AiportZoom</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="grey" ng-controller="LoginCtrl">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logong" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text"><?php echo $nome_app;?></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" type="text" ng-model="email">
            <label for="username" class="center-align">email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" ng-model="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Lembrar</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="#"  class="btn waves-effect waves-light col s12" ng-click="logar_app()">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a class="waves-effect waves-light btn social facebook" ng-click="logar_face()">
            Login com facebook</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a class="waves-effect waves-light btn social twitter" ng-click="logar_twitter()">
            Login com twitter</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="/uber/registrar">Registrar!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="uber/esqueci-senha">Esqueci a senha ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->

    <script type="text/javascript">
      var config = {
        apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
        authDomain: "chatsocket-2626b.firebaseapp.com",
        databaseURL: "https://chatsocket-2626b.firebaseio.com",
        projectId: "chatsocket-2626b",
        storageBucket: "chatsocket-2626b.appspot.com",
        messagingSenderId: "1075121073644"
      };
      firebase.initializeApp(config);
  
      var app = angular.module("uberApp", ["firebase"]);
      
      app.controller("LoginCtrl", function($scope, $firebaseAuth) {
      var auth = $firebaseAuth();
      
      
      $scope.logar_face = function() {
        auth.$signInWithPopup("facebook").then(function(firebaseUser) {
        //  console.log("Signed in as:", firebaseUser.uid);
          localStorage.setItem("photo",firebaseUser.user.photoURL);
          localStorage.setItem("nome",firebaseUser.user.displayName);
          localStorage.setItem("email",firebaseUser.user.email);
          
          window.location.href = "/uber/home"
        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      };
      
      $scope.logar_twitter = function() {
        auth.$signInWithPopup("vimeo").then(function(firebaseUser) {
          console.log("Signed in as:", firebaseUser.uid);
          window.location.href = "/uber/home"
        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      };
      
      $scope.logar_app = function() {
        auth.$signInWithEmailAndPassword($scope.email, $scope.password)
  			.then(function(firebaseUser) {
  				//	alert("foi");
  				//	$scope.message = "User created with uid: " + firebaseUser.uid;
  				//	localStorage.setItem("photo", firebaseUser.user.photoURL);
  			//	localStorage.setItem("nome", $scope.nome);
  			//	localStorage.setItem("nome", $scope.nome);
  				//	localStorage.setItem("email", firebaseUser[0].user.email);
  				localStorage.setItem("email", $scope.email);
  					console.log(firebaseUser);
  					
  
  				window.location.href = "/uber/home"
  			}).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      };
      
    });
    
    
    $(document).ready(function() {
	$("form").submit(function(e) {
		e.preventDefault();
		var form = $(this).serialize();
		var action = $(this).attr("action");
		$.post(action, form, function(data) {
			if (data.request) {

			}
			else {
				alert(data.message)
			}
		});
	});
});

      
    </script>

</body>

</html>