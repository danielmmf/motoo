<!DOCTYPE html>
<html>
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

        
      
      footer.page-footer {
          background-color: #333333;
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

<body onload="initialize()">


<div class="card-panel hoverable" id="modal_endereco" style="border-radius: 25px;
    height: 0px;
    width: 255px;
    margin-inline-start: 25px;
    margin: 20px; margin-block-start: 150px;">
  <form action="javascript: void(0);" onSubmit="calcRoute()" style="margin-top: -22px;">
    <div>
        <input type="text" size="50" value="Qual é o seu destino?" id="endereco" style="    border-bottom: white; height: 43px; margin: inherit;"/>
        <input type="hidden"  id="latlong" />
    </div>

<!--    <button style="margin-top: 30px;" type="submit" class="btn waves-effect waves-light red">Pesquisar<i class="material-icons right">send</i> <?php //echo $nome; ?></button> -->
</form></div>
    </div>

 
<div id="mapview" style="display: none;width:100%; height:100%">
    <div id="map_canvas" style="float: left; width: 65%; height: 100%;"></div>
    <div class="direcao" style="float: left; width: 35%; height: 70%;overflow: scroll;">
        <div id="directionsPanel" style="height 100px"></div>
    </div>
</div>

<div style="width:100%;" id="map"></div>
 <div class="fixed-action-btn vertical click-to-toggle" id="menu_locais">
    <a class="btn-floating btn-large red">
      <i class="material-icons">add</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">star</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">access_time</i></a></li>
      <li><a class="btn-floating red" href="/uber/profile"><i class="material-icons">person</i></a></li>
    </ul>
  </div>
      <div class="row" style="margin: unset;">
    <div class="col s12 m5">
      <div class="card-panel" style="margin: 10px; padding: inherit;">
        <span class="text">Seus créditos:
        </span>
        <h4 style="text-align: center;">R$ 100 ,00</h4>
        <button class="btn waves-effect waves-light red" style="margin: 5px;">Recarregar</button>
      </div>
    </div>
  </div>
  <div class="row" style="margin: unset;">
    <div class="col s12 m5">
      <div class="card-panel" style="margin: 10px; padding: inherit;">
        <span class="text">Numero de usuario
        </span>
        <h4 style="text-align: center;">1349711-95</h4>
      </div>
    </div>
  </div>
  <div class="row" style="margin: unset;">
    <div class="col s12 m5">
      <div class="card-panel" style="margin: 10px; padding: inherit;">
        <span class="text">
        </span>
        <h4 style="text-align: center;">Pagar via  NFC</h4>
      </div>
    </div>
  </div>

  <div class="card" id="motorista" style="display: none;width:100%; height:80%">
   
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><h2 id="nome_selecionado">Motorista Zezinho</h2> <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Marea Turbo - vermelho</a></p>
         <p>Seu motorista está chegando em xxx minutos</p>
         <p>aqui irão aparecer informações da corrida</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Motorista Zezinho<i class="material-icons right">close</i></span>
      <p><img class="activator" src="https://imganuncios.mitula.net/fiat_marea_2002_fiat_marea_turbo_2_0_20v_4020035502124231869.jpg"></p>
    </div>
  </div>
            
   <footer class="page-footer" id="page-footer" style="display: none;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" id="distancia"></h5>
                <p class="grey-text text-lighten-4"  id="duracao" ></p>
                <h2 class="white-text" id="total"></h2>
                <div>Obs e desvios<textarea id="obs_desvios"></textarea></div>
                <div>Remedios e Itens<textarea id="remedios_itens"></textarea></div>
                <div>Acompanhante<textarea id="Acompanhante"></textarea></div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Obs</h5>{{markers}}
                <div id="log"  style="display: none"></div>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><button type="button" class="waves-effect waves-light btn" id="solicitar_1">Pedir</button></a>
                  <a class="grey-text text-lighten-3" href="#!"><button type="button" class="waves-effect waves-light btn" id="solicitar_2">Pedir</button></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 devinhas@sp
            <a class="grey-text text-lighten-4 right" href="#!" id="cancelar">Cancelar solicitação</a>
            </div>
          </div>
        </footer>
</body>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>


  <script src="https://cdn.firebase.com/libs/geofire/4.1.0/geofire.min.js"></script>

   <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCZsJEv3FWv3GEDWsXDulUtD5NjtY0eEtM&language=pt-BR&mode=transit"></script>
      <script type="text/javascript"> 


         firebase.initializeApp({
          apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
          databaseURL: "https://chatsocket-2626b.firebaseio.com"
        });

        // Generate a random Firebase location
        var firebaseRef = firebase.database().ref('motoristas');

        // Create a new GeoFire instance at the random Firebase location
        var geoFire = new GeoFire(firebaseRef);
        var geoQuery;

      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        localStorage.setItem("longitude",longitude);
        localStorage.setItem("latitude",latitude);
       
        //$("#endereco").val(latitude+","+longitude);
        $("#endereco").val("Meu Local");
        $("#latlong").val(latitude+","+longitude);

        });
        
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
        map.on('locationfound', onLocationFound);
    }else {
        alert("Geolocation API is not supported in your browser. :(");
    }

      //aqui vamos fazer o status dele no app , quando ele entrar , colocamos ele como online no status
      var logged_user = JSON.parse(localStorage.getItem("logged_user"));
      var foto = localStorage.getItem("foto");
      var latitude = localStorage.getItem("latitude");
      var longitude = localStorage.getItem("longitude");
      var uid = logged_user.providerData[0].uid;
      firebase.database().ref('/riders/' + uid).set({ status: "1",   cliente_uid : uid ,   cliente_foto : foto , latlong:latitude+","+longitude , lat:latitude, long:longitude });


    // document.getElementById('mapview').style.visibility = 'hidden';
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;
 
        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var myLatlng = new google.maps.LatLng();
             
            var myOptions = {
                zoom:7,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: myLatlng
            }
 
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        }
 

var motoristas_encontrados = [];

        function calcRoute() {
          if($("#endereco").val() == "Meu Local"){
            var start = $("#latlong").val();
          }else{
            var start = document.getElementById("endereco").value;
          }

          var paradas = [];
          if($("#parada1").val() != ""){
            var p = {
                  location: $("#parada1").val(),
                  stopover: true
                }
            paradas.push(p);
          }

          if($("#parada2").val() != ""){
            var p = {
                  location: $("#parada2").val(),
                  stopover: true
                }
            paradas.push(p);
          }


            var end = document.getElementById("destino").value;
            var request = {
                origin:start, 
                destination:end,
                waypoints: paradas ,
              provideRouteAlternatives: true,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
             
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    console.log(response.routes["0"].legs["0"]);
                    console.log(response.routes["0"].legs["0"].distance.text);
                    $("#distancia").html("Seu destino esta a "+response.routes["0"].legs["0"].distance.text+" de distancia");
                    console.log(response.routes["0"].legs["0"].duration.text);
                    $("#duracao").html("Sua viagem ira demorar aproximadamente "+response.routes["0"].legs["0"].duration.text +" minutos");
                    var calculado = ((response.routes["0"].legs["0"].distance.value*0.0012)+4); 
                    $("#total").html("Total: R$ "+calculado.toFixed(2));

                        directionsDisplay.setDirections(response);
                        var lat = parseFloat($("#querylat").val());
                        var lon = parseFloat($("#querylon").val());
                        var radius = 1;
                        var operation;

                                   var res = start.split(',');
                         // alert(res);
                          console.log(res[0].substring(0, 8));
                          console.log(res[1].substring(0, 8));
                          operation = "Criando ";

                          geoQuery = geoFire.query({
                            center: [Number(res[0].substring(0, 8)),Number(res[1].substring(0, 8))],
                            radius: radius
                          });
                          
                       

                          var mais_perto = [];
                          var menor_distancia = 0.0001;

                          geoQuery.on("key_entered", function(key, location, distance) {
                            log(key + " esta na posicao [" + location + "] que esta a  (" + distance.toFixed(2) + " km do centro da busca)");
                            motoristas_encontrados.push({"key":key , "location": location , "distance":distance});
                          //  if(menor_distancia > distance){
                              menor_distancia = distance;
                              mais_perto = {"key":key , "location": location , "distancia":distance};
                            //}

                          });


                          geoQuery.on("key_exited", function(key, location, distance) {
                            console.log(key, location, distance);
                            log(key + " esta na posicao [" + location + "] ja nao esta mais no alcance (" + distance.toFixed(2) + " km do centro da busca)");
                          });
                       


                          console.log(motoristas_encontrados);
                          console.log(mais_perto);

                        log(operation + " a busca esta centralizada [" + lat + "," + lon + "] com o raio de  " + radius + "km")

                } else {
                    alert(status);
                }
 

                document.getElementById("mapview").style.display = "block";
                document.getElementById('map').style.display = 'none';
                document.getElementById('modal_endereco').style.display = 'none';
                document.getElementById('menu_locais').style.display = 'none';
                document.getElementById('page-footer').style.display = 'block';
                document.body.scrollTop = document.body.scrollHeight;
            });

            $( "#cancelar" ).on( "click", function() {
                console.log( $( this ).text() );

               cancelar_solicitacao();
            });

             function cancelar_solicitacao() {
                document.getElementById("mapview").style.display = "none";
                document.getElementById('map').style.display = 'block';
                document.getElementById('modal_endereco').style.display = 'block';
                document.getElementById('menu_locais').style.display = 'block';
                document.getElementById('page-footer').style.display = 'none';
                $( "#directionsPanel" ).html("");
               window.scrollTo(0, 0);
             }



             $( "#solicitar_1" ).on( "click", function() {
                console.log( $( this ).text() );
           //     document.getElementById('solicitar_1').style.visibility = 'hidden';
                document.getElementById('cancelar').style.visibility = 'hidden';

               fazer_solicitacao();


            });

             function fazer_solicitacao() {
               // document.getElementById('mapview').style.visibility = 'hidden';
               // document.getElementById("mapview").style.display = "none";
                document.getElementById('motorista').style.display = 'block';
                $( "#directionsPanel" ).html("");
                var distancia = 2;
                var motorista = [];
                console.log(motoristas_encontrados);
                for (var i = motoristas_encontrados.length - 1; i >= 0; i--) {
                  if(motoristas_encontrados[i].distance < distancia){
                    console.log(motoristas_encontrados[i].distance);
                    distancia = motoristas_encontrados[i].distance;
                    motorista = motoristas_encontrados[i];
                  }
                }
               // alert("vai chamar agora");
                var highest = Math.min.apply(this,$.map(motoristas_encontrados, function(o){ return o.distance; }));
                console.log(highest);
                console.log(motorista);
                var marker_id = motorista.key.replace("motorista-","");
                if($("#endereco").val() == "Meu Local"){
                  var start = $("#latlong").val();
                }else{
                  var start = document.getElementById("endereco").value;
                }

                var cliente = localStorage.getItem("nome");
                var foto = localStorage.getItem("foto");
                var logged_user = JSON.parse(localStorage.getItem("logged_user"));
                var uid = logged_user.providerData[0].uid;
                console.log(uid);
                
                

              $.post("/uber/acha_motorista", {"nome":motorista.key}).done(function(response){
                  console.log(response);

                  
                var infos = {obs_desvios:$("#obs_desvios").val(),remedios_itens:$("#remedios_itens").val(),Acompanhante:$("#Acompanhante").val()};
                  var corrida = {motorista:response.nome ,full_motorista:motorista , carro : "Marea turbo vermelho" , motorista_key:marker_id , infos : infos};

                  firebase.database().ref().child('/markers/' + marker_id)
                 .update({ status: "1", location: start , cliente : cliente ,  cliente_uid : uid , foto : foto , corrida:corrida });

                   firebase.database().ref('/riders/' + uid).update({ status: "2",  latlong:latitude+","+longitude , lat:latitude, long:longitude , corrida:corrida });

                    $("#nome_selecionado").html(response.nome);
                })

                var request = {
                  origin:motorista.location.latitude+","+motorista.location.longitude, 
                  destination:start,
                  travelMode: google.maps.DirectionsTravelMode.DRIVING
                };
             
                directionsService.route(request, function(response, status) {
                  console.log(status);
                  console.log(response);
                  if (status == google.maps.DirectionsStatus.OK) {
                    console.log(response.distance);
                    console.log(response.routes["0"].legs["0"].distance.text);
                    $("#distancia").html("Seu motorista esta a "+response.routes["0"].legs["0"].distance.text+" de distancia");
                    
                    

                     new google.maps.DirectionsRenderer({
                      map: map,
                      directions: response
                    });
                    directionsDisplay.setDirections(response);

                 }
                 window.scrollTo(0, 0);
                alert("motorista a caminho , aguarde no local solicitado");
                window.location.href = "/<?php echo $nome_app;?>/solicitado"
              });
        }


              function log(message) {
                var childDiv = document.createElement("div");
                var textNode = document.createTextNode(message);
                childDiv.appendChild(textNode);
                document.getElementById("log").appendChild(childDiv);
              }
          
        }
    </script>

</html>