<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="Digipronto" name="author"><!-- Add Your favicon here -->
	<link href="" rel="Shortcut icon" type="image/x-icon">
	<title>Cadastro</title>
	<link href="/Content/bootstrap.css" rel="stylesheet">
	<link href="/Content/site.css" rel="stylesheet">
	<link href="/Content/css/main.css" rel="stylesheet">
</head>
<body class="gray-circular">
	<div class="login">
		<a href="window.history.back();"><img class="bt-voltar" src="/Content/images/icons/btn_voltar.png"></a>
		<div class="tarja"></div>
		<div class="pixels pullDown"></div><img alt="Royal Canin" class="login-logo pulse" src="/Content/images/login-logo.png">
		<h2 class="login-title">Primeiro Acesso</h2>
		<h3 class="sub-tit">Dados Pessoais</h3>
		<div class="login-inputs">
			<form method="post" action="registrar-segundo">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="nome" name="usuario[name]" placeholder="Nome" required="required" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="cpf" placeholder="cpf" name="usuario[cpf]" required="required" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="rg" placeholder="RG" name="usuario[rg]" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="nascimento" name="usuario[nascimento]" placeholder="Data de Nascimento" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<select class="form-control txt-input select" name="usuario[perfil]" id="perfil">
							<option value="">
								Perfil
							</option>
							<option value="g">
								Gerente
							</option>
							<option value="s">
								Supervisor
							</option>
							<option value="v">
								Vendedor
							</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<select class="form-control txt-input select" name="usuario[sexo]" id="sexo">
							<option value="">
								Sexo
							</option>
							<option value="m">
								Masculino
							</option>
							<option value="f">
								Feminino
							</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<select class="form-control txt-input select" name="usuario[estado_civil]" id="estado_civil">
							<option value="">
								Estado Cívil
							</option>
							<option value="s">
								Solteiro
							</option>
							<option value="c">
								Casado
							</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="cep" name="endereco[cep]" placeholder="CEP" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<div class="col-lg-8 col-md-8 col-xs-8 col-sm-8 padd-left-0">
							<input class="form-control txt-input" id="rua" name="endereco[rua]" placeholder="Endereço" type="text">
						</div>
						<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 padd-left-0 padd-right-0">
							<input class="form-control txt-input" placeholder="Nº" name="endereco[numero]"  type="text">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0">
							<input class="form-control txt-input" placeholder="Complemento" name="endereco[complemento]" type="text">
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0">
							<input class="form-control txt-input" id="bairro" placeholder="Bairro" name="endereco[bairro]" type="text">
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0">
							<div class="form-group pos-rel">
								<input class="form-control txt-input" id="uf" placeholder="UF" name="endereco[estado]" type="text">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0">
							<div class="form-group pos-rel">
								<input class="form-control txt-input" id="cidade" placeholder="cidade"  name="endereco[cidade]" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="sub-tit">Contato</h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" id="email" name="usuario[email]" placeholder="E-mail Pessoal" type="text">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" placeholder="E-mail Comercial" name="usuario[email_comercial]" type="text">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" placeholder="Celular" name="endereco[telefone]" type="text">
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="sub-tit">Definir senha</h3>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" placeholder="senha" name="usuario[senha]" type="text">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" placeholder="Confirmar senha" name="usuario[vsenha]" type="text">
					</div>
				</div>
				<input type="submit" style='display:none' id="cadastrar">
				<div class="form-group">
					<a class="bt-next" href="#" id="validar_form_segunda"><img src="/Content/images/icons/arrow_proxima_pagina.png"></a>
				</div>
			</form>
		</div>
	</div><!--button type="button" class="btn-login" data-toggle="modal" data-target="#cadastro50">modal 50%</button-->
	<div aria-labelledby="mySmallModalLabel" class="modal fade bs-example-modal-sm" id="cadastro50" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-sm modal-padrao" role="document">
			<div class="modal-content modal-dell">
				<img class="top-modal" src="/Content/images/icons/top-modal.png"> <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				<div class="container-bar">
					<img src="/Content/images/icons/v.png">
					<div class="progress vertical">
						<div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-info bar-cadastro" data-values="50" role="progressbar">
							<span>0</span>
						</div>
					</div>
				</div>
				<p>Cadastro realizado com sucesso!</p><span class="span1">Complete as informações pendentes e garanta pontos!</span>
				<div class="form-group">
					<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
						<a href="/del-valle/registrar-terceiro"><button class="btn btn-small" type="button">Continue<br>
						Preenchendo</button></a>
					</div><a href="/del-valle/minha-pagina">
					<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
						<button class="btn btn-small" type="submit">Prencher<br>
						depois</button>
					</div></a>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<p>Del Valle - Todos direitos reservados <img src="/Content/images/icons/logo-footer.png"></p>
	</footer>
	<script src="/Content/js/jquery-3.1.1.min.js">
	</script> 
	<script src="/js/jquery.mask.min.js"></script> 
	<script type="text/javascript">

   $(document).on('click', '.number-spinner a', function () {
       var btn = $(this),
       oldValue = btn.closest('.number-spinner').find('input').val().trim(),
       newVal = 0;

       if (btn.attr('data-dir') == 'up') {
           newVal = parseInt(oldValue) + 1;
       } else {
           if (oldValue > 1) {
               newVal = parseInt(oldValue) - 1;
           } else {
               newVal = 1;
           }
       }
       btn.closest('.number-spinner').find('input').val(newVal);
   });
	</script> 
	<script src="/Content/js/bootstrap.min.js">
	</script> 
	<script src="/Content/js/main.js">
	</script> <!-- Visual Studio Browser Link -->
	 
	<script id="__browserLink_initializationData" type="application/json">
	       {"appName":"Chrome","requestId":"3a000349fe554bec963504f7405b1bf4"}
	</script> 
	<script async="async" src="http://localhost:49340/487526c5853c421988e1a8c193488f43/browserLink" type="text/javascript">
	</script> 
	<!-- End Browser Link -->
	 
	<script type="text/javascript">
	       
	       $('#nascimento').mask('00/00/0000');
	       $('#cep').mask('00000-000');
	           function isValidDate(str) {
	               var parts = str.split('/');
	               if (parts.length < 3)
	                   return false;
	               else {
	                   var day = parseInt(parts[0]);
	                   var month = parseInt(parts[1]);
	                   var year = parseInt(parts[2]);
	                   alert(year);
	                   if(year > 1996){
	                       return false;
	                   }
	                   if (isNaN(day) || isNaN(month) || isNaN(year)) {
	                       return false;
	                   }
	                   if (day < 1 || year < 1)
	                       return false;
	                   if(month>12||month<1)
	                       return false;
	                   if ((month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) && day > 31)
	                       return false;
	                   if ((month == 4 || month == 6 || month == 9 || month == 11 ) && day > 30)
	                       return false;
	                   if (month == 2) {
	                       if (((year % 4) == 0 && (year % 100) != 0) || ((year % 400) == 0 && (year % 100) == 0)) {
	                           if (day > 29)
	                               return false;
	                       } else {
	                           if (day > 28)
	                               return false;
	                       }      
	                   }
	                   return true;
	               }
	           }
	           
	           function IsEmail(email) {
	               var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	               if(!regex.test(email)) {
	                  return false;
	               }else{
	                  return true;
	               }
	             }
	           $(document).ready(function () {
	             carrega_usuario();
	             
	         });

	</script>
</body>
</html>