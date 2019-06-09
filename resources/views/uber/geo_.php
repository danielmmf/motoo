<!DOCTYPE html>
<html ng-app="demoapp">
  <head>
    <title>.:: Uber Like devinhas @ sp ::.</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }


       * {  margin: 0px; padding: 0px }
        form input{
             
        }


         

          body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        
      
     .page-footer {
          background-color: #333333;
          height: 40%;
      }


      #modal_endereco{
       float: left;
    position: absolute;
    z-index: 10000;
        
      }


    </style>
 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>

  <!-- Compiled and minified JavaScript -->

<body  ng-controller="MarkersAngularTemplateController">

 


<div style="width:100%;" id="map" ></div>
<div   class="page-footer" style="width:100%;height:50%, background-color:grey" id="solicitado" ng-show="marker.status == 1">Solicitado : {{marker.cliente}}  <br><a ng-href="geo:{{marker.location}}" class="button btn">ir waze</a><a ng-href="https://maps.apple.com/maps?q={{marker.location}}&navigate=yes" class="button btn">ir maps</a><br>
<a ng-href="https://maps.apple.com/maps?q={{marker.location}}&navigate=yes" class="button btn">ir maps</a>
</div>
 <div class="fixed-action-btn vertical click-to-toggle" id="menu_locais">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
          <ul>
      <li ng-hide="habilitado"><a class="btn-floating green darken-1" ng-click="habilitar()"><i class="material-icons">directions_car</i></a></li><li ng-show="habilitado"><a class="btn-floating yellow darken-1" ng-click="desabilitar()"><i class="material-icons">directions_car</i></a></li>
      <li><a class="btn-floating blue" href="/airportzoom/driver-profile"><i class="material-icons">person</i></a>
    </ul>
  </div>

  <div class="card" id="motorista" style="display: none;width:100%; height:80%">
   
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><h2>Motorista Zezinho</h2> <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Marea Turbo - vermelho</a></p>
         <p>Seu motorista está chegando em xxx minutos</p>
         <p>aqui irão aparecer informações da corrida</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Motorista Zezinho<i class="material-icons right">close</i></span>
      <p><img class="activator" src="https://imganuncios.mitula.net/fiat_marea_2002_fiat_marea_turbo_2_0_20v_4020035502124231869.jpg"></p>
    </div>
  </div>
            
   <footer class="page-footer" id="page-footer" style="display: none;" ng-show="marker.status == 1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" id="distancia"></h5>
                <p class="grey-text text-lighten-4"  id="duracao" ></p>
                <h2 class="white-text" id="total"></h2>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Obs</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">desvios</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><button type="button" class="waves-effect waves-light btn" id="solicitar">Pedir</button></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 devinhas@sp {{location}} --{{marker.status}}
            <a class="grey-text text-lighten-4 right" href="#!" id="cancelar">Cancelar solicitação</a>
            </div>
          </div>
        </footer>
</body>
 <script src="/js/angular.min.js"></script>
    <script src="/js/ngGeolocation.min.js"></script>
    <!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/geofire/4.1.2/geofire.min.js"></script>

    <!-- AngularFire -->
    <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


 <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCZsJEv3FWv3GEDWsXDulUtD5NjtY0eEtM&language=pt-BR&mode=transit"></script>
    <script type="text/javascript"> 

 //-23,5486. Longitude de Praça da Sé é -46,6392
        var app = angular.module("demoapp", ['ngGeolocation',"firebase"]);


        var config = {
            apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
            authDomain: "chatsocket-2626b.firebaseapp.com",
            databaseURL: "https://chatsocket-2626b.firebaseio.com",
            projectId: "chatsocket-2626b",
            storageBucket: "chatsocket-2626b.appspot.com",
            messagingSenderId: "1075121073644"
        };
        firebase.initializeApp(config);



        app.controller('MarkersAngularTemplateController', [ '$scope', '$firebaseObject', "$geolocation", function($scope, $firebaseObject, $geolocation) {
           $scope.$geolocation = $geolocation

        $scope.motora =  localStorage.getItem("cnh");
        $scope.nome =  localStorage.getItem("nome");


        $scope.habilitado = false;

                angular.extend($scope, {
                    SP: {
                        lat: -23.5486,
                        lng: -46.6392,
                        zoom: 8
                    },
                    data: {markers: {}}
                });

                 var ref = firebase.database().ref().child("markers");
                 var geoFire = new GeoFire(firebase.database().ref('motoristas'));
                  // download the data into a local object
                  var syncObject = $firebaseObject(ref);
                  // synchronize the object with a three-way data binding
                  // click on `index.html` above to see it used in the DOM!
                  syncObject.$bindTo($scope, "data.markers");
                  var myID = "motorista-" + $scope.motora;

                  geoFire.get(myID).then(function(location) {
                    if (location === null) {
                      console.log("Provided key is not in GeoFire");
                    }
                    else {
                      console.log("Provided key has a location of " + location);
                    }
                  }, function(error) {
                    console.log("Error: " + error);
                  });

               

                // basic usage
                $geolocation.getCurrentPosition().then(function(location) {
                  $scope.location = location
                  console.log($scope.location);
                });



                // regular updates
                
                $geolocation.watchPosition({
                    timeout: 6000,
                    maximumAge: 250,
                    enableHighAccuracy: true
                });
                $scope.marcador = $geolocation.position;
                $scope.coords = $geolocation.position.coords; // this is regularly updated
               // $scope.markers.m1.lat = $geolocation.position.coords.latitude;
                $scope.error = $geolocation.position.error; 



                syncObject.$loaded().then(function(items) {
                  //  this.markers = items; // populated array
                  //  $scope.markers = items; // populated array
                    console.log(items);
                    console.log($scope.location);


                    try{
                      $scope.data.markers[$scope.motora].lat = $geolocation.position.coords.latitude;
                      $scope.data.markers[$scope.motora].lng = $geolocation.position.coords.longitude;
                      $scope.data.markers[$scope.motora].cnh = $scope.motora;
                      $scope.data.markers[$scope.motora].nome = $scope.nome;
                      $scope.data.markers[$scope.motora].status = 0;  
                    }catch(err) {
                      console.log($geolocation);
                            alert("nao achamos sua cnh , fale com sua contratante");
                            $scope.data.markers[$scope.motora] = {
                                message: "Vc disse que sua cnh eh : "+$scope.motora
                            };
                    $scope.data.markers[$scope.motora].lat  = $geolocation.position.coords.latitude;
                    $scope.data.markers[$scope.motora].lng  = $geolocation.position.coords.longitude;
                    $scope.data.markers[$scope.motora].cnh  = $scope.motora; 
                    $scope.data.markers[$scope.motora].nome = $scope.nome;  
                    $scope.data.markers[$scope.motora].status = 0;  
            }
                    
                  }.bind(this));

                console.log($scope.location);


                 $scope.habilitar = function(){
                    alert("vai habilitar no sistema");
                      var myID = "motorista-" + $scope.motora;
                    
                      geoFire.set(myID, [$scope.location.coords.latitude,$scope.location.coords.longitude]).then(function() {
                        console.log(myID + ": na posicao [" + $scope.location.coords.latitude + "," + $scope.location.coords.longitude + "]");
                      });
                      $scope.habilitado = 1;

                      var url = "markers/"+$scope.motora;
                      $scope.marker = $firebaseObject(firebase.database().ref(url));
                      $scope.marker.$loaded(function() {
                        console.log($scope.marker);
                      });
                  }    

                  $scope.desabilitar = function(){
                    alert("vai desabilitar no sistema");
                    var myID = "motorista-" + $scope.motora;
                    
                      geoFire.remove(myID).then(function() {
                        console.log("Provided key has been removed from GeoFire");
                      }, function(error) {
                        console.log("Error: " + error);
                      });
                    $scope.habilitado = 0;
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
                    timeout: 2000,
                    maximumAge: 0
                  };

        navigator.geolocation.watchPosition(function () {
                     if($scope.habilitado ==1){

                     var myID = "motorista-" + $scope.motora;
                      geoFire.set(myID, [$geolocation.position.coords.latitude,$geolocation.position.coords.longitude]).then(function() {
                        console.log(myID + ": na posicao [" + $geolocation.position.coords.latitude + "," + $geolocation.position.coords.longitude + "]");
                      });    
                     }

                      
                    }, error, options); 

/*
                  $scope.$watch('marcador', function (newValue, oldValue) {
                     console.log(newValue);
                     var myID = "motorista-" + $scope.motora;
                      geoFire.set(myID, [newValue.coords.latitude,newValue.coords.longitude]).then(function() {
                        console.log(myID + ": na posicao [" + $scope.location.coords.latitude + "," + $scope.location.coords.longitude + "]");
                      });    

                      $scope.$digest();
                    }, true);

  */           
/*
                      navigator.geolocation.getCurrentPosition(function(position){
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;
                        localStorage.setItem("longitude",longitude);
                        localStorage.setItem("latitude",latitude);
                       
                       
                        $("#endereco").val(latitude+","+longitude);
                       // $("#endereco").val("Meu Local");
                        $("#latlong").val(latitude+","+longitude);
                      });
  */
                      
                      var map = L.map('map')
                      L.tileLayer('http://{s}.tile.cloudmade.com/1cc75fcc8e2243d1b2f6aab1e5850be1/998/256/{z}/{x}/{y}.png', {
                        attribution: 'Devinhas@sp',
                        maxZoom: 18
                      }).addTo(map);
                      
                      map.locate({setView: true, maxZoom: 16});
                      function onLocationFound(e) {
                        var radius = e.accuracy / 2;
                        L.marker(e.latlng).addTo(map).bindPopup(localStorage.getItem("nome") + " Voce esta aqui , ou em ate " + radius.toFixed(2) + " metros desse ponto").openPopup();
                        L.circle(e.latlng, radius).addTo(map);
                      }
                      map.on('locationfound', onLocationFound);
                  
            }]);



     




      
    </script>

</html>