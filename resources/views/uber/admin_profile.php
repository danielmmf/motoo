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
  <meta name="description" content="Aplicativo para chamar veiculos estilo uber costumizada esta é a visão do administrativo">
  <meta name="keywords" content="Aplicativo para chamar veiculos estilo uber costumizada esta é a visão do administrativo">
  <title>Minha Conta de Admin | AiportZoom</title>

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

<body class="grey" ng-controller="CompanyProfileCtrl">
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
                  <div class="row pt-12">
                    <div class="col s12 m12 offset-m12">
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
                  <p>Sua conta é de companhia</p>
                  <p>
                    <i class="material-icons black-text text-darken-2">perm_phone_msg</i> +155 (11) 92222 8989</p>
                  <p>
                    <i class="material-icons black-text text-darken-2">email</i> {{email}}</p>
                 
                  <p>
                    <i class="material-icons black-text text-darken-2">card_travel</i> Cartão</p>
                </div>
              </div>
              <!--/ profile-page-header -->


              <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                      <div class="card-content">
                      <div class="col s12 m6 right-align">
                      <div class="input-field col s12 center">
                        <h4>Companhias </h4>
                        <input type="text" ng-model="filtro" placeholder="buscar">
                      </div>
                  <table>
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">CNPJ</th>
                        <th data-field="price">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="comp in companhias | filter:filtro">
                        <td>{{comp.name}}</td>
                        <td>{{comp.cnpj}}</td>
                        <td>{{comp.desc}}</td>
                      </tr>
                    </tbody>
                  </table>
                      
                </div>
                      </div>
                      
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">perm_identity</i>
                        </a>
                       
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Nova Companhia 
                          <i class="material-icons right">navigation_close</i>
                        
                        </span>
                        <form class="login-form" method="POST" action="/uber/registrar_usuario">
                         <input id="company_id" type="hidden" name="company_id" ng-model="company_id">
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">person_outline</i>
                              <input id="name_companhia" type="text" name="name_companhia" ng-model="name_companhia">
                              <label for="name_companhia" class="center-align">Nome</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">email</i>
                              <input id="email" type="email" ng-model="email_companhia" name="email_companhia">
                              <label for="email_companhia" class="center-align">Email</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">telefone</i>
                              <input id="telefone" type="text" ng-model="telefone_companhia" name="telefone_companhia">
                              <label for="telefone_companhia" class="center-align">Telefone</label>
                            </div>
                          </div>
                        
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="cnpj_companhia" type="text" name="cnpj_companhia" ng-model="cnpj_companhia">
                              <label for="cnpj_companhia">CNPJ</label>
                            </div>
                          </div>
                           <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="fantasia_companhia" type="text" name="fantasia_companhia" ng-model="fantasia_companhia">
                              <label for="fantasia_companhia">Nome Fantasia</label>
                            </div>
                          </div>
                           <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="juridica_companhia" type="text" name="juridica_companhia" ng-model="juridica_companhia">
                              <label for="juridica_companhia">Nome Juridico</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="cep" type="text" name="juridica_companhia" ng-model="cep"><input id="numero" type="text" name="numero_companhia" ng-model="numero">
                              <label for="juridica_companhia">Cep - numero</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input href="#" ng-click="createCompany()" class="btn waves-effect waves-light col s12 activator" type="button" value="Registrar">
                            </div>
                          
                          </div>
                        </form> 
                      </div>
                    </div>
                  </div>


              <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                      <div class="card-content">
                      <div class="col s12 m6 right-align">
                      <div class="input-field col s12 center">
                        <h4>Motoristas</h4>
                      </div>
                  <table>
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">CNH</th>
                        <th data-field="price">Saldo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="motorista in motoristas">
                        <td>{{motorista.name}}</td>
                        <td>{{motorista.cnh}}</td>
                        <td>$0.87</td>
                      </tr>
                    </tbody>
                  </table>
                      
                </div>
                      </div>
                      
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">perm_identity</i>
                        </a>
                       
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Novo Motorista 
                          <i class="material-icons right">navigation_close</i>
                        
                        </span>
                        <form class="login-form" method="POST" action="/uber/registrar_usuario">
                         <input id="company_id" type="hidden" name="company_id" ng-model="company_id">
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">person_outline</i>
                              <input id="name_motorista" type="text" name="name_motorista" ng-model="nome_motorista">
                              <label for="name_motorista" class="center-align">Nome</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">email</i>
                              <input id="email" type="email" ng-model="email_motorista" name="email_motorista">
                              <label for="email_motorista" class="center-align">Email</label>
                            </div>
                          </div>
                        
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="cnh_motorista" type="text" name="cnh_motorista" ng-model="cnh_motorista">
                              <label for="cnh_motorista">CNH</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input href="#" ng-click="createDriver()" class="btn waves-effect waves-light col s12 activator" type="button" value="Registrar">
                            </div>
                          
                          </div>
                        </form> 
                      </div>
                    </div>
                  </div>

                   <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                      <div class="card-content">
                      <div class="col s12 m6 right-align">
                      <div class="input-field col s12 center">
                        <h4>Carros</h4>
                      </div>
                  <table>
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Placa</th>
                        <th data-field="price">Ano</th>
                        <th data-field="price">Cor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="carro in carros">
                        <td>{{carro.name}}</td>
                        <td>{{carro.cnh}}</td>
                        <td>{{carro.ano}}</td>
                        <td>{{carro.cor}}</td>
                      </tr>
                    </tbody>
                  </table>
                      
                </div>
                      </div>
                      
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">directions_car</i>
                        </a>
                       
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Novo Carro 
                          <i class="material-icons right">navigation_close</i>
                        
                        </span>
                        <form class="login-form" method="POST" action="/uber/registrar_usuario">
                         <input id="company_id" type="hidden" name="company_id" ng-model="company_id">
                          
                           <div class="row margin">
                            <div class="input-field col s6">
                              <i class="material-icons prefix pt-5"></i>
                              <input id="placa_carro" type="text" ng-model="placa_carro" name="placa_carro">
                              <label for="placa_carro" class="center-align">Placa</label>
                            </div>
                         
                            <div class="input-field col s6">
                              <i class="material-icons prefix pt-5"></i>
                              <input id="modelo_carro" type="text" ng-model="modelo_carro" name="modelo_carro">
                              <label for="modelo_carro" class="center-align">Modelo</label>
                            </div>
                          </div>
                        
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="marca_carro" type="text" name="marca_carro" ng-model="marca_carro">
                              <label for="marca_carro">Marca</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s12">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="cor_carro" type="text" name="cor_carro" ng-model="cor_carro">
                              <label for="cor_carro">Cor</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <div class="input-field col s6">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="ano_carro" type="text" name="ano_carro" ng-model="ano_carro">
                              <label for="ano_carro">Ano</label>
                            </div>
                          
                            <div class="input-field col s6">
                              <i class="material-icons prefix pt-5">directions_car</i>
                              <input id="lotacao_carro" type="text" name="lotacao_carro" ng-model="lotacao_carro">
                              <label for="lotacao_carro">Lotacao</label>
                            </div>
                          </div>
                          <div class="row margin">
                            <ul id="task-card" class="collection ">
                 
                              <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                  <input type="checkbox" id="task1">
                                  <label for="task1" style="text-decoration: none;"><a href="#" class="secondary-content"><span class="ultra-small">RTNRC</span></a>
                                  </label>
                                  <span class="task-cat teal">Nacional</span>
                              </li>
                              <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                  <input type="checkbox" id="task2">
                                  <label for="task2" style="text-decoration: none;"><a href="#" class="secondary-content"><span class="ultra-small">RTNRC</span></a>
                                  </label>
                                  <span class="task-cat purple">Regional</span>
                              </li>
                              <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                  <input type="checkbox" id="task3">
                                  <label for="task3" style="text-decoration: none;"><a href="#" class="secondary-content"><span class="ultra-small">RTNRC</span></a>
                                  </label>
                                  <span class="task-cat pink">Interno</span>
                              </li>
                              
                            </ul>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input href="#" ng-click="createCar()" class="btn waves-effect waves-light col s12 activator" type="button" value="Cadastrar">
                            </div>
                          
                          </div>
                        </form> 
                      </div>
                    </div>
                  </div>

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
                  

                  <!--/ Profile About Details  -->
                  <!-- Profile About  -->
                 
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
   
 
                </div>
                <!-- profile-page-sidebar-->
        
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
   
    <script type="text/javascript" src="/js/admin-script.js"></script>

</body>

</html>
    




               
   
            