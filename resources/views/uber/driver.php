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

      /* Uses the HTML5 geolocation API to get the current user's location */
      var getLocation = function() {
         // alert(nome);
        if (typeof navigator !== "undefined" && typeof navigator.geolocation !== "undefined") {
          log("Asking user to get their location");
          navigator.geolocation.getCurrentPosition(geolocationCallback, errorHandler);
        } else {
          log("Your browser does not support the HTML5 Geolocation API, so this demo will not work.")
        }
      };
    
      /* Callback method from the geolocation API which receives the current user's location */
      var geolocationCallback = function(location) {
        var latitude = location.coords.latitude;
        var longitude = location.coords.longitude;
        log("Retrieved user's location: [" + latitude + ", " + longitude + "]");
    
        var username = localStorage.getItem("nome_motorista");
        geoFire.set(username, [latitude, longitude]).then(function() {
          log("Current user " + username + "'s location has been added to GeoFire");
          
   /*       
          var map = L.map('map')
        L.tileLayer('http://{s}.tile.cloudmade.com/1cc75fcc8e2243d1b2f6aab1e5850be1/998/256/{z}/{x}/{y}.png', {
        attribution: 'Devinhas@sp',
        maxZoom: 18
        }).addTo(map);
        
        map.locate({setView: true, maxZoom: 16});
        function onLocationFound(e) {
          var radius = e.accuracy / 2;
          L.marker(e.latlng).addTo(map)
              .bindPopup("Voce esta aqui , ou em ate " + radius.toFixed(2) + " metros desse ponto").openPopup();
          L.circle(e.latlng, radius).addTo(map);
        }
        map.on('locationfound', onLocationFound);*/
    
          // When the user disconnects from Firebase (e.g. closes the app, exits the browser),
          // remove their GeoFire entry
          firebaseRef.child(username).onDisconnect().remove();
    
          log("Added handler to remove user " + username + " from GeoFire when you leave this page.");
         // getLocation();
        }).catch(function(error) {
          log("Error adding user " + username + "'s location to GeoFire");
        });
      }
    
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
      
      //if(username != null){
        var nome = prompt("Por favor insira seu nome");
        if (nome != null) {
           // alert("Hello " + nome + "! How are you today?");
            localStorage.setItem("nome_motorista",nome);
            getLocation();
        } 
     // }
      
    
      /*************/
      /*  HELPERS  */
      /*************/
      /* Logs to the page instead of the console */
      function log(message) {
        var childDiv = document.createElement("div");
        var textNode = document.createTextNode(message);
        childDiv.appendChild(textNode);
        document.getElementById("log").appendChild(childDiv);
    }
      
    });
      
    </script>

</body>

</html>




