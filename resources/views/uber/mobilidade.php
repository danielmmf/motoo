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
  <title>Pega Local | Mobilidade</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="grey" ng-controller="LoginCtrl">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

<div style="width:100%;" id="map"></div>

<div id="log"></div>



  <!-- ================================================
    Scripts
    ================================================ -->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
  <!-- jQuery Library -->
  <script src="https://cdn.firebase.com/libs/geofire/4.1.2/geofire.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/js/plugins.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


 <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCZsJEv3FWv3GEDWsXDulUtD5NjtY0eEtM&language=pt-BR&mode=transit"></script>
   
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
      var firebaseRef = firebase.database().ref('motoristas/onlines').push();
      
      var geoFire = new GeoFire(firebaseRef);
      
      
      
      var id, target, options;
        
        function success(pos) {
          var crd = pos.coords;
        
          if (target.latitude === crd.latitude && target.longitude === crd.longitude) {
            console.log('Parabéns, você alcançou o destino');
            alert('Parabéns, você alcançou o destino');
            navigator.geolocation.clearWatch(id);
          }else{
              console.log('vai andando');
              console.log(crd);
              log("Sua posicao global é essa : [" + crd.latitude + ", " + crd.longitude + "]");
          }
        }
        
        function error(err) {
          console.warn('ERRO(' + err.code + '): ' + err.message);
        }
        
        target = {
          latitude : 0,
          longitude: 0
        };
        
        options = {
          enableHighAccuracy: false,
          timeout: 5000,
          maximumAge: 0
        };
        
        id = navigator.geolocation.watchPosition(success, error, options);
        
        
        
        

      /* Handles any errors from trying to get the user's current location */
      var errorHandler = function(error) {
        if (error.code == 1) {
          log("Error: PERMISSION_DENIED: User denied access to their location");
        } else if (error.code === 2) {
          log("Error: POSITION_UNAVAILABLE: Network is down or positioning satellites cannot be reached");
        } else if (error.code === 3) {
          log("Error: TIMEOUT: Calculating the user's location too took long");
        } else {
          log("Unexpected error code")
        }
      };
    
      // Get the current user's location
      //var username = localStorage.getItem("nome_motorista");
      
      /*if(username != null){
        var nome = prompt("Por favor insira seu nome");
        if (nome != null) {
           // alert("Hello " + nome + "! How are you today?");
            localStorage.setItem("nome_motorista",nome);
           // getLocation();
        } 
      }
      */ 
      
    
      /*************/
      /*  HELPERS  */
      /*************/
      /* Logs to the page instead of the console */
      function log(message) {
        document.getElementById("log").innerHTML =message;
    }
      
    });
      
    </script>

</body>

</html>




