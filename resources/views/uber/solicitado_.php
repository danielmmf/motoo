<!DOCTYPE html>
<html ng-app="demoapp">
  <head>

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
    <script src="/maps/js/angular.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

    <!-- AngularFire -->
    <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
    <script src="/maps/js/leaflet.js"></script>
    <script src="/maps/js/angular-leaflet-directive.js"></script>
    <link rel="stylesheet" href="/maps/css/leaflet.css" />
    <style media="screen" type="text/css">
        .form-popup {
            width: 200px;
        }
    </style>
    <script>
    //-23,5486. Longitude de Praça da Sé é -46,6392
        var app = angular.module("demoapp", ["leaflet-directive","firebase"]);


        var config = {
            apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
            authDomain: "chatsocket-2626b.firebaseapp.com",
            databaseURL: "https://chatsocket-2626b.firebaseio.com",
            projectId: "chatsocket-2626b",
            storageBucket: "chatsocket-2626b.appspot.com",
            messagingSenderId: "1075121073644"
        };
        firebase.initializeApp(config);



        app.controller('MarkersAngularTemplateController', [ '$scope', '$firebaseObject', "leafletMarkerEvents", function($scope, $firebaseObject, leafletMarkerEvents) {
            angular.extend($scope, {
                SP: {
                    lat: -23.5486,
                    lng: -46.6392,
                    zoom: 8
                },
                data: {markers: {}}
            });

            $scope.cancelar = function() {
                alert("Tem certeza que deseja cancelar seu pedido ?");
            };

            $scope.alterar_destino = function() {
                alert("Tem certeza que deseja alterar o destino dessa corrida ?");
            };

            $scope.pontuar = function() {
                alert("Obrigado por usar o nosso serviço");
                window.location.href = "/uber/home"
            };

             $scope.addMarkers = function() {
                $scope.data.markers = {};
                angular.extend($scope.data, { angularInterpolatedMessage : "Angular interpolated message!"});
                angular.extend($scope.data, {
                    markers: {
                        m1: {
                            lat: -23.505,
                            lng: -46.6309,
                            compileMessage: false,
                           // focus: true,
                            message: "I'm a static marker",
                        },
                        m2: {
                            lat: -23.53,
                            lng: -46.63,
                            //focus: true,
                            message: "<div ng-include src=\"'views/template.html'\"></div>",
                            draggable: true,
                        },
                        m3: {
                            lat: -23.52,
                            lng: -46.631,
                            getMessageScope: function () { return $scope; },
                            message: "<p>{{data.angularInterpolatedMessage}}</p>",
                            compileMessage: true
                        }
                    }
                });
            };

             var logged_user = JSON.parse(localStorage.getItem("logged_user")); 
                        var uid = logged_user.providerData[0].uid;
      
          var ref_cliente = firebase.database().ref("riders/"+uid);
          console.log("riders/"+uid);
         
           // download the data into a local object
           var cliente = $firebaseObject(ref_cliente);
           // synchronize the object with a three-way data binding
           // click on `index.html` above to see it used in the DOM!
           cliente.$bindTo($scope, "data.rider");

             var ref = firebase.database().ref().child("markers");
              // download the data into a local object
              var syncObject = $firebaseObject(ref);
              // synchronize the object with a three-way data binding
              // click on `index.html` above to see it used in the DOM!
              syncObject.$bindTo($scope, "data.markers");

            $scope.events = {
                markers: {
                    enable: leafletMarkerEvents.getAvailableEvents(),
                }
            };

            $scope.eventDetected = "No events yet...";
            var markerEvents = leafletMarkerEvents.getAvailableEvents();
            for (var k in markerEvents){
                var eventName = 'leafletDirectiveMarker.' + markerEvents[k];
                $scope.$on(eventName, function(event, args){
                    if( event.name == 'leafletDirectiveMarker.dragend'){
                       // alert(event.name);
                       // console.log(event);
                       // console.log(args);
                      //  console.log(args.model);
                      //  console.log(args.modelName);
                      //  console.log(event);
                        //.leafletEvent
                        $scope.data.markers[args.modelName].lat = args.model.lat;
                        $scope.data.markers[args.modelName].lng = args.model.lng;
                    }
                    $scope.eventDetected = event.name;
                });
            }


            $scope.addMarkers();
        } ]);
        app.controller('ViewController', ['$scope', function($scope) {
            $scope.user = {}
            $scope.greet = function(user) {
              alert('Ola ' + user.name)
            }
        } ]);

         app.controller('PopController', ['$scope', function($scope) {
            $scope.atualiza = function() {
              alert('Esse aqui é  clicado no administrativo ');
            }
        } ]);
    </script>
  </head>
  <body ng-controller="MarkersAngularTemplateController">
      <leaflet event-broadcast="events" lf-center="SP" markers="data.markers" height="480px" width="100%"></leaflet>
      <h2 ng-if="data.rider.status == 2">Motorista {{data.rider.corrida.motorista}} dirigindo {{data.rider.corrida.carro}}  a caminho</h2>
      <h2 ng-if="data.rider.status == 4">Voce está sendo conduzido por {{data.rider.corrida.motorista}}</h2>
      <h2 ng-if="data.rider.status == 6">Motorista {{data.rider.corrida.motorista}} finalizou a corrida e o valor foi de R$ [conta do sistema]</h2>
      <h2 ng-if="data.rider.status == 8">Dar pontuação ao Motorista {{data.rider.corrida.motorista}} </h2>
      <a ng-if="data.rider.status == 8" ng-click="pontuar(marker.cliente_uid, marker.cliente)" class="button btn">Nota X</a>
       
    <hr>
      <div   class="page-footer teal lighten-2" style="width:100%;height:50%, background-color:grey" id="solicitado" >Solicitado : {{data.rider.corrida.motorista}}  <br>
      {{data.rider.corrida.infos}}<br>
         <a ng-if="data.rider.status == 2" ng-click="cancelar(marker.cliente_uid, marker.cliente)" class="button btn">Cancelar</a>
         <a ng-if="data.rider.status == 4" ng-click="alterar_destino(marker.cliente_uid, marker.cliente)" class="button btn">Alterar Destino</a>

      </div>
  </body>
</html>