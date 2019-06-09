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

<body>



    </div>

 


<div style="width:100%;" id="map"></div>
 <div class="fixed-action-btn vertical click-to-toggle" id="menu_locais">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
          <ul>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">directions_car</i></a></li>
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
            
   <footer class="page-footer" id="page-footer" style="display: none;">
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
            © 2017 devinhas@sp
            <a class="grey-text text-lighten-4 right" href="#!" id="cancelar">Cancelar solicitação</a>
            </div>
          </div>
        </footer>
</body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


 <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCZsJEv3FWv3GEDWsXDulUtD5NjtY0eEtM&language=pt-BR&mode=transit"></script>
    <script type="text/javascript"> 



      if (navigator.geolocation) {

          navigator.geolocation.getCurrentPosition(function(position){
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            localStorage.setItem("longitude",longitude);
            localStorage.setItem("latitude",latitude);
            alert(localStorage.getItem("cnh"));
           
            $("#endereco").val(latitude+","+longitude);
           // $("#endereco").val("Meu Local");
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
            L.marker(e.latlng).addTo(map).bindPopup("Voce esta aqui , ou em ate " + radius.toFixed(2) + " metros desse ponto").openPopup();
            L.circle(e.latlng, radius).addTo(map);
          }
          map.on('locationfound', onLocationFound);
      }else {
          alert("Geolocation API is not supported in your browser. :(");
      }




      
    </script>

</html>