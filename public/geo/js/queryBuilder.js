(function() {
  // Initialize the Firebase SDK
  firebase.initializeApp({
    apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
    databaseURL: "https://chatsocket-2626b.firebaseio.com"
  });

  // Generate a random Firebase location
  var firebaseRef = firebase.database().ref('motoristas');

  // Create a new GeoFire instance at the random Firebase location
  var geoFire = new GeoFire(firebaseRef);
  var geoQuery;


   var lat = parseFloat($("#addlat").val());
  var lon = parseFloat($("#addlon").val());
  var radius = 20000000000;
  var operation;

 
    operation = "Criando ";

    geoQuery = geoFire.query({
      center: [lat, lon],
      radius: radius
    });

    geoQuery.on("key_entered", function(key, location, distance) {
      log(key + " esta na posicao [" + location + "] que esta a  (" + distance.toFixed(2) + " km do centro da busca)");
    });

    geoQuery.on("key_exited", function(key, location, distance) {
      console.log(key, location, distance);
      log(key + " esta na posicao [" + location + "] ja nao esta mais no alcance (" + distance.toFixed(2) + " km do centro da busca)");
    });

  $("#addfish").on("submit", function() {
    var lat = parseFloat($("#addlat").val());
    var lon = parseFloat($("#addlon").val());
    var myID = "motorista-" + firebaseRef.push().key;

    geoFire.set(myID, [lat, lon]).then(function() {
      log(myID + ": na posicao [" + lat + "," + lon + "]");
    });

    return false;
  });

  $("#queryfish").on("submit", function() {
    var lat = parseFloat($("#querylat").val());
    var lon = parseFloat($("#querylon").val());
    var radius = parseFloat($("#queryradius").val());
    var operation;

    if (typeof geoQuery !== "undefined") {
      operation = "Atualizando ";

      geoQuery.updateCriteria({
        center: [lat, lon],
        radius: radius
      });

    } else {
      operation = "Criando ";

      geoQuery = geoFire.query({
        center: [lat, lon],
        radius: radius
      });

      geoQuery.on("key_entered", function(key, location, distance) {
        log(key + " esta na posicao [" + location + "] que esta a  (" + distance.toFixed(2) + " km do centro da busca)");
      });

      geoQuery.on("key_exited", function(key, location, distance) {
        console.log(key, location, distance);
        log(key + " esta na posicao [" + location + "] ja nao esta mais no alcance (" + distance.toFixed(2) + " km do centro da busca)");
      });

      geoQuery.on("key_moved", function(key, location, distance) {
      log(key + " moved within query to " + location + " (" + distance + " km from center)");
});
    }

    log(operation + " a busca esta centralizada [" + lat + "," + lon + "] com o raio de  " + radius + "km")

    return false;
  });

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
})();
