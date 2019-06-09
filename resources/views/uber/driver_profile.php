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
  <title>Minha Conta de motorista | AiportZoom</title>

  <!-- Favicons-->
  <link rel="icon" href="/images/favicon/favicon-32x32.png" sizes="32x32">
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


  <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->

        <section id="content">
          <!--start container-->
          <div class="container">
            <div id="profile-page" class="section">
              <!-- profile-page-header -->
              <div id="profile-page-header" class="card" style="overflow: hidden;">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../../images/gallary/23.png" alt="user background">
                </div>
                <figure class="card-profile-image">
                  <img ng-src="{{photo}}" alt="profile image" class="circle z-depth-2 responsive-img activator gradient-45deg-light-blue-black gradient-shadow">
                </figure>
                <div class="card-content">
                  <div class="row pt-2">
                    <div class="col s12 m3 offset-m2">
                      <h4 class="card-title grey-text text-darken-4">{{nome}}</h4>
                      <p class="medium-small grey-text">Usuario</p>
                    </div>
                    <div class="col s12 m2 center-align">
                      <h4 class="card-title grey-text text-darken-4">10+</h4>
                      <p class="medium-small grey-text">Ranking</p>
                    </div>
                    <div class="col s12 m2 center-align">
                      <h4 class="card-title grey-text text-darken-4">6</h4>
                      <p class="medium-small grey-text">Corridas</p>
                    </div>
                    <div class="col s12 m2 center-align">
                      <h4 class="card-title grey-text text-darken-4">R$ 28,00</h4>
                      <p class="medium-small grey-text">ticket medio</p>
                    </div>
                    <div class="col s12 m1 right-align">
                      <a class="btn-floating activator waves-effect waves-light rec accent-2 right">
                        <i class="material-icons">perm_identity</i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-reveal" style="display: block; transform: translateY(-100%);">
                  <p>
                    <span class="card-title grey-text text-darken-4"> {{nome}}
                      <i class="material-icons right">fechar</i>
                    </span>
                    <span>
                      <i class="material-icons black-text text-darken-2">perm_identity</i> </span>
                  </p>
                  <p>Sua conta é de motorista</p>
                  <p>
                    <i class="material-icons black-text text-darken-2">perm_phone_msg</i> +155 (11) 92222 8989</p>
                  <p>
                    <i class="material-icons black-text text-darken-2">email</i> {{email}}</p>
                 
                  <p>
                    <i class="material-icons black-text text-darken-2">card_travel</i> Cartão</p>
                </div>
              </div>
              <!--/ profile-page-header -->
              <!-- profile-page-content -->
              <div id="profile-page-content" class="row">
                <!-- profile-page-sidebar-->
                <div id="profile-page-sidebar" class="col s12 m4">
                  <!-- Profile About  -->
                  <div class="card black">
                    <div class="card-content white-text">
                      <span class="card-title">Desconectar</span>
                      <p> <a class="waves-effect waves-light btn" ng-click="logoff()">
                              <i class="material-icons left">rate_review</i> Logoff</a></p>
                              <button ng-click="deslogar()">LogOut</button>
                    </div>
                  </div>
                  <!-- Profile About  -->
                  <!-- Profile About Details  -->
                  <ul id="profile-page-about-details" class="collection z-depth-1">
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s5">
                          <i class="material-icons left">card_travel</i> Cartao</div>
                        <div class="col s7 right-align">Master 0123</div>
                      </div>
                    </li>
                   
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s5">
                           <i class="material-icons left">card_travel</i> Cartao</div>
                        <div class="col s7 right-align">Master 0124</div>
                      </div>
                    </li>
                  </ul>
                  <!--/ Profile About Details  -->
                  <!-- Profile About  -->
                  <div class="card red accent-2">
                    <div class="card-content white-text center-align">
                      <p class="card-title">
                        <i class="material-icons">group_add</i> 6 </p>
                      <p>indicacoes</p>
                    </div>
                  </div>
                  <!-- Profile About  -->
                  <!-- Profile feed  -->
                  <!--ul id="profile-page-about-feed" class="collection z-depth-1">
                    <li class="collection-item avatar">
                      <img src="/images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="title">Project Title</span>
                      <p>Task assigned to new changes.
                        <br>
                        <span class="ultra-small">Second Line</span>
                      </p>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle teal accent-4">folder</i>
                      <span class="title">New Project</span>
                      <p>First Line of Project Work
                        <br>
                        <span class="ultra-small">Second Line</span>
                      </p>
                      <a href="#!" class="secondary-content">
                        <i class="material-icons">domain</i>
                      </a>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle black">assessment</i>
                      <span class="title">New Payment</span>
                      <p>Last UK Project Payment
                        <br>
                        <span class="ultra-small">$ 3,684.00</span>
                      </p>
                      <a href="#!" class="secondary-content">
                        <i class="material-icons">attach_money</i>
                      </a>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle red accent-2">play_arrow</i>
                      <span class="title">Latest News</span>
                      <p>company management news
                        <br>
                        <span class="ultra-small">Second Line</span>
                      </p>
                      <a href="#!" class="secondary-content">
                        <i class="material-icons">track_changes</i>
                      </a>
                    </li>
                  </ul>
                  <!-- Profile feed  --
                  <!-- task-card --
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header gradient-45deg-light-blue-black">
                      <h4 class="task-card-title">My Task</h4>
                      <p class="task-card-date">March 26, 2015</p>
                    </li>
                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                      <input id="task1" type="checkbox">
                      <label for="task1" style="text-decoration: none;">Create Mobile App UI.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Today</span>
                        </a>
                      </label>
                      <span class="task-cat teal accent-4">Mobile App</span>
                    </li>
                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                      <input id="task2" type="checkbox">
                      <label for="task2" style="text-decoration: none;">Check the new API standerds.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Monday</span>
                        </a>
                      </label>
                      <span class="task-cat red accent-2">Web API</span>
                    </li>
                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                      <input id="task3" checked="checked" type="checkbox">
                      <label for="task3" style="text-decoration: line-through;">Check the new Mockup of ABC.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Wednesday</span>
                        </a>
                      </label>
                      <span class="task-cat deep-orange accent-2">Mockup</span>
                    </li>
                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                      <input id="task4" checked="checked" disabled="disabled" type="checkbox">
                      <label for="task4" style="text-decoration: line-through;">I did it !</label>
                      <span class="task-cat black">Mobile App</span>
                    </li>
                  </ul>
                  <!-- task-card -->
                  <!-- Profile Total sell -->
                  <div class="card center-align">
                    <div class="card-content teal accent-4 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">attach_money</i>Saldo na conta</p>
                      <h4 class="card-stats-number">R$899.63</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 70%
                        <span class="teal-text text-lighten-5">ultimo mes</span>
                      </p>
                    </div>
                    <div class="card-action teal darken-1">
                      <div id="sales-compositebar"><canvas style="display: inline-block; width: 227px; height: 25px; vertical-align: top;" width="227" height="25"></canvas></div>
                    </div>
                  </div>
                  <!-- flight-card -->
                  <div id="flight-card" class="card">
                    <div class="card-header pink darken-4">
                      <div class="card-title">
                        <h4 class="flight-card-title">Sua proxima corrida</h4>
                        <p class="flight-card-date">Janeiro 18, ter 04:50</p>
                      </div>
                    </div>
                    <div class="card-content-bg white-text">
                      <div class="card-content">
                        <div class="row flight-state-wrapper">
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">GUA</h4>
                              <p class="ultra-small">São Paulo</p>
                            </div>
                          </div>
                          <div class="col s2 m2 l2 center-align">
                            <i class="material-icons flight-icon">local_airport</i>
                          </div>
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">CTBA</h4>
                              <p class="ultra-small">Curitiba</p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s6 m6 l6 center-align">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Inicio:</span> 04.50</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Embarques:</span> IB 5786</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Terminal:</span> B</p>
                            </div>
                          </div>
                          <div class="col s6 m6 l6 center-align flight-state-two">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Entrega:</span> 08.50</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Desembarques:</span> IB 5786</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Terminal:</span> C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- flight-card -->
                  <!-- Map Card -->
                  <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div id="map-canvas" data-lat="{{latitude}}" data-lng="{{longitude}}" class="loading" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;" tabindex="0"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: -3px; top: -173px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -3px; top: 83px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 253px; top: -173px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 253px; top: 83px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -3px; top: -173px;"><canvas draggable="false" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" height="256" width="256"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -3px; top: 83px;"><canvas draggable="false" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" height="256" width="256"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 253px; top: -173px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 253px; top: 83px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: -3px; top: -173px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i384!4i256!2m3!1e0!2sm!3i405104714!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=93155"></div><div style="position: absolute; left: -3px; top: 83px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i385!4i256!2m3!1e0!2sm!3i405104714!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=44958"></div><div style="position: absolute; left: 253px; top: -173px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i384!4i256!2m3!1e0!2sm!3i405104678!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=34199"></div><div style="position: absolute; left: 253px; top: 83px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i385!4i256!2m3!1e0!2sm!3i405104689!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=67835"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=40.67,-73.94&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 22px; top: 35px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2018 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 161px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2018 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2018 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 92px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; -moz-user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;" draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button"><img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control"></button><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@40.67,-73.94,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;" draggable="false" controlwidth="28" controlheight="93"><div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;" controlwidth="28" controlheight="55"><div draggable="false" style="-moz-user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;" draggable="false" title="Zoom in" aria-label="Zoom in" type="button"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;" draggable="false" title="Zoom out" aria-label="Zoom out" type="button"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></button></div></div><div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Pegman is on top of the Map"><img style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;" title="Rotate map 90 degrees"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;" class="gm-tilt"><img style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div></div></div></div>
                      </div>
                      <div class="card-content">
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">pin_drop</i>
                        </a>
                        <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Seu endereço</a>
                        </h4>
                        <p class="blog-post-content">Informações atuais</p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Sua Casa
                          <i class="material-icons right">navigation_close</i>
                        </span>
                        <p>Alguma informação ou referencia sobre a sua casa ou local que você mais frequenta</p>
                        <p>
                          <i class="material-icons black-text text-darken-2">perm_identity</i> zona Oeste</p>
                        <p>
                          <i class="material-icons black-text text-darken-2">business</i> 125, ABC</p>
                        <p>
                          <i class="material-icons black-text text-darken-2">perm_phone_msg</i> +1 (612) 222 8989</p>
                        <p>
                          <i class="material-icons black-text text-darken-2">email</i> {{email}}</p>
                      </div>
                    </div>
                  </div>
                  <!-- Map Card -->
                </div>
                <!-- profile-page-sidebar-->
                <!-- profile-page-wall -->
                <div id="profile-page-wall" class="col s12 m8">
                  <!-- profile-page-wall-share -->
                  <div id="profile-page-wall-share" class="row">
                    <div class="col s12">
                      <ul class="tabs tab-profile z-depth-1 deep-orange accent-2">
                        <li class="tab col s3">
                          <a class="white-text waves-effect waves-light active" href="#UpdateStatus" style="">
                            <i class="material-icons flight-icon">local_airport</i> Corridas antigas</a>
                        </li>
                        <li class="tab col s3">
                          <a class="white-text waves-effect waves-light" href="#AddPhotos">
                           <i class="material-icons flight-icon">local_airport</i> Corridas canceladas</a>
                        </li>
                        <li class="tab col s3">
                          <a class="white-text waves-effect waves-light" href="#CreateAlbum">
                            <i class="material-icons flight-icon">local_airport</i> Corridas agendadas</a>
                        </li>
                      <li class="indicator" style="right: 533px; left: 0px;"></li></ul>
                      <!-- UpdateStatus-->
                      <div id="UpdateStatus" class="tab-content col s12 grey lighten-4 active">
                        <div class="row">
                          <div class="col s2">
                            <img src="/images/avatar/avatar-7.png" alt="" class="circle z-depth-2 responsive-img activator gradient-45deg-light-blue-black">
                          </div>
                          <div class="input-field col s10">
                            <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                            <label for="textarea" class="">Nenhuma corrida registrada</label>
                          </div>
                        </div>
                        <div class="row">
                          <a href="#">
                          </a><div class="col s12 m6 right-align"><a href="#">
                            <!-- Dropdown Trigger -->
                            </a><a class="dropdown-button btn" href="#" data-activates="profliePost">
                              <i class="material-icons left">airplanemode_active</i></a>
                              <ul id="profliePost" class="dropdown-content">
                              <li>
                                <a href="#!">
                                  <i class="material-icons">language</i> Publico</a>
                              </li>
                              <li>
                                <a href="#!">
                                  <i class="material-icons">face</i> Amigos</a>
                              </li>
                              <li>
                                <a href="#!">
                                  <i class="material-icons">lock_outline</i>So eu</a>
                              </li>
                            </ul>
                            <!-- Dropdown Structure -->
                            
                            
                          </div>
                        </div>
                      </div>
                      <!-- AddPhotos -->
                      
                    </div>
                  </div>
                  <!--/ profile-page-wall-share -->
                  <!-- profile-page-wall-posts -->
                  
                  <!--/ profile-page-wall-posts -->
                </div>
                <!--/ profile-page-wall -->
              </div>
            </div>
          </div>
      </section></div>
      <!--end container-->
      


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
      
      
        $scope.photo = localStorage.getItem("photo");
        $scope.nome =    localStorage.getItem("nome");
        $scope.email =    localStorage.getItem("email");
        $scope.latitude =    localStorage.getItem("latitude");
        $scope.longitude =    localStorage.getItem("longitude");
      

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
      
   
      
    });
    
    
    
      
    </script>

</body>

</html>
    