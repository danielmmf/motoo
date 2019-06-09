self.addEventListener('sync', function(event) {
  if (event.tag == 'myFirstSync') {
    event.waitUntil(doSomeStuff());
  }
});


/*function myFunc(arg) {
  console.log(`arg was => ${arg}`);
}*/


function doSomeStuff(){
	console.log("teste");
	/*navigator.geolocation.getCurrentPosition(function(position) {
        processing = false;
        console.log(lat, long);
        console.log(position.coords.latitude, position.coords.longitude);

      });*/

	fetch('./hb.php', {
    method: 'post',
    headers: {
      'Content-type': 'application/json'
    },
    body: JSON.stringify({
      subscription: 'teste'
    }),
  });


setTimeout(doSomeStuff, 3000, 'funky');
}

