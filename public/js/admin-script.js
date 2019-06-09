/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
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

app.controller("LoginCtrl", function($scope, $firebaseAuth ) {

	var auth = $firebaseAuth();

	$scope.createUser = function() {
		$scope.message = null;
		$scope.error = null;


		// Create a new user
		auth.$createUserWithEmailAndPassword($scope.email, $scope.password)
			.then(function(firebaseUser) {
				//	alert("foi");
				//	$scope.message = "User created with uid: " + firebaseUser.uid;
				//	localStorage.setItem("photo", firebaseUser.user.photoURL);
				localStorage.setItem("nome", $scope.nome);
				//	localStorage.setItem("email", firebaseUser[0].user.email);
				localStorage.setItem("email", $scope.email);
				//	console.log(firebaseUser);

				window.location.href = "/uber/home"
			}).catch(function(error) {
				$scope.error = error;
				alert(error);
			});
	};

	   $scope.logar_app = function() {
        $.post('/airportzoom/company-logar',{'cnpj':$scope.cnpj,'password':$scope.password},function(data){
          if(data.status==1){
            localStorage.setItem("nome", data.nome);
            localStorage.setItem("company_id", data.user_id);
            window.location.href = "/uber/company"
          }
        });
      };


	
});


    app.controller("CompanyProfileCtrl", function($scope, $firebaseAuth, $http) {
        var auth = $firebaseAuth();
      
      
        $scope.photo = localStorage.getItem("photo");
        $scope.nome =    localStorage.getItem("nome");
        $scope.email =    localStorage.getItem("email");
        $scope.latitude =    localStorage.getItem("latitude");
        $scope.longitude =    localStorage.getItem("longitude");

        $scope.company_id =    localStorage.getItem("company_id");  

        $scope.carrega_companias = function() {
         $http.get('/airportzoom/admin/companys')
		    .then(function(response) {
		      console.log(response);
		      $scope.companhias = response.data;
		    },
		    function(err){
		      console.log(err);
		    });
		   }; 


        $scope.carrega_motoristas = function() {
         $http.get('/airportzoom/admin/drivers')
		    .then(function(response) {
		      console.log(response);
		      $scope.motoristas = response.data;
		    },
		    function(err){
		      console.log(err);
		    });
		   }; 

		$scope.carrega_carros = function() {
         $http.get('/airportzoom/admin/cars')
		    .then(function(response) {
		      console.log(response);
		      $scope.carros = response.data;
		    },
		    function(err){
		      console.log(err);
		    });
		   };    

        $scope.deslogar = function() {
          /*   
          auth.signOut().then(function() {
            // Sign-out successful.
          }, function(error) {
            // An error happened.
          });*/
          console.log(auth);
          auth.$signOut();
          // alert("logoff");
          window.location.href = "/";
        };

        $scope.createCompany = function() {
			$scope.message = null;
			$scope.error = null;
			var company = {'name':$scope.name_companhia, 'email':$scope.email_companhia, 'cnpj':$scope.cnpj_companhia, 'fantasia':$scope.fantasia_companhia, 'juridica':$scope.juridica_companhia, 'telefone':$scope.telefone_companhia};
			$.post('/airportzoom/company/save', company).done(function(response){
				if(response.status == 1){
					alert("criando uma companhia, aguarde confirmação");
					$scope.carrega_companias();
				}
			});
		};

        $scope.createDriver = function() {
			$scope.message = null;
			$scope.error = null;
			var driver = {'name':$scope.nome_motorista,'company_id':$scope.company_id, 'email':$scope.email_motorista, 'cnh':$scope.cnh_motorista};
			$.post('/airportzoom/driver/save', driver).done(function(response){
				if(response.status == 1){
					alert("criando seu motorista, aguarde confirmação");
					$scope.carrega_motoristas();
				}
			});
		};

		 $scope.createCar = function() {
			$scope.message = null;
			$scope.error = null;
			var car = {'name':$scope.nome_carro,'company_id':$scope.company_id, 'placa':$scope.placa_carro, 'ano':$scope.ano_carro, 'modelo':$scope.modelo_carro, 'cor':$scope.cor_carro, 'lotacao':$scope.lotacao_carro, 'marca':$scope.marca_carro};
			$.post('/airportzoom/car/save', car).done(function(response){
				if(response.status == 1){
					alert("criando seu carro, aguarde confirmação");
					$scope.carrega_carros();
				}
		});	
	};
      
   $scope.carrega_companias();
   $scope.carrega_motoristas();
   $scope.carrega_carros();
      
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
