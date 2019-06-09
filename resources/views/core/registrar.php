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
  <title>Cadastro | AiportZoom</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" method="POST" action="/uber/registrar_usuario">
          <div class="row">
            <div class="input-field col s12 center">
              <h4>Registrar</h4>
              <p class="center">Faça sua conta agora</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="name" type="text" name="name" ng-model="nome">
              <label for="name" class="center-align">Nome</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">email</i>
              <input id="email" type="email" ng-model="email" name="email">
              <label for="email" class="center-align">Email</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password" type="password" ng-model="password" name="password">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password-again" type="password" name="repeat_password">
              <label for="password-again">confirmar Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input href="#" ng-click="createUser()" class="btn waves-effect waves-light col s12" type="button" value="Registrar">
            </div>
            <div class="input-field col s12">
              <p class="margin center medium-small sign-up">Vocẽ já tem uma conta? <a href="/">Login</a></p>
              {{message}}
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
  <script type="text/javascript" src="/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="/js/custom-script.js"></script>

</body>

</html>
