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
	<title>Finalizar Cadastro</title>
	<link href="/Content/bootstrap.css" rel="stylesheet">
	<link href="/Content/css/main.css" rel="stylesheet">
	
</head>
<body class="gray-circular">
	<div class="login">
		<a href="window.history.back();"><img class="bt-voltar" src="/Content/images/icons/btn_voltar.png"></a>
		<div class="tarja"></div>
		<div class="pixels pullDown"></div><img alt="Royal Canin" class="login-logo pulse" src="/Content/images/login-logo.png">
		<div class="login-inputs">
			<form method="post" action="registrar-terceiro">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="sub-tit">Outras Informações</h3>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<div class="form-group pos-rel">
							<select class="form-control txt-input select" name="time_coracao" id="select-beast">
								<option value="">
									Time do Coração
								</option>
								<option value="4">
									São Paulo
								</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h4 class="sub-tit">Tamanho de camiseta</h4>
					</div>
					<div class="form-group pos-rel">
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
							<input id="p" name='tamanho_camiseta' type='radio' value='p'><label for="p"><span>P</span></label>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
							<input id="m" name='tamanho_camiseta' type='radio' value='m'><label for="m"><span>M</span></label>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
							<input id="g" name='tamanho_camiseta' type='radio' value='g'><label for="g"><span>G</span></label>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
							<input id="gg" name='tamanho_camiseta' type='radio' value='gg'><label for="gg"><span>GG</span></label>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h4 class="sub-tit">Possui passaporte</h4>
					</div>
					<div class="form-group pos-rel">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
							<input id="Sim" name='passaporte' type='radio' value='1'><label for="Sim"><span>Sim</span></label>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
							<input id="Nao" name='passaporte' type='radio' value='0'><label for="Nao"><span>Não</span></label>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<div class="form-group pos-rel">
							<input class="form-control txt-input" name="conjuge" placeholder="Nome Conjugue" type="text">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" name="nascimento_conjuge" id="nascimento" placeholder="Data Aniversário Conjugue" type="text">
					</div>
				</div>
				<div class="painel-numb">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3 class="sub-tit">Tem Filhos</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group pos-rel filhos-camp">
							<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
								<input id="Sim-filhos" name='filhos' type='radio' value='1'><label for="Sim-filhos"><span>Sim</span></label>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
								<input id="Nao-filhos" name='filhos' type='radio' value='0'><label for="Nao-filhos"><span>Não</span></label>
							</div>
							<h3 class="sub-tit">Quantos?</h3>
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 padd-right-0 padd-left-0 text-center pull-left">
								<div class="input-group number-spinner">
									<span class="input-group-btn"><a data-dir="dwn"><img src="/Content/images/icons/left.png"></a></span> <input class="form-control text-center txt-input" type="text" name="qtd_filhos"> <span class="input-group-btn"><a data-dir="up"><img src="/Content/images/icons/right.png"></a></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3 class="sub-tit">Tem Pet?</h3>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group pos-rel">
							<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
								<input id="pet-Sim" name='pet' type='radio' value='1'><label for="pet-Sim"><span>Sim</span></label>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
								<input id="pet-Nao" name='pet' type='radio' value='0'><label for="pet-Nao"><span>Não</span></label>
							</div>
							<h3 class="sub-tit">Quantos?</h3>
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 padd-right-0 padd-left-0 text-center pull-left">
								<div class="input-group number-spinner">
									<span class="input-group-btn"><a data-dir="dwn"><img src="/Content/images/icons/left.png"></a></span> <input class="form-control text-center txt-input" type="text" name="qtd_pets"> <span class="input-group-btn"><a data-dir="up"><img src="/Content/images/icons/right.png"></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="sub-tit">Qual?</h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="form-group pos-rel">
						<input class="form-control txt-input" name="tipo_pet" placeholder="Cachorro" type="text">
					</div>
				</div>
				
						<input class="form-control txt-input" id="vaiporra" type="submit" style="display:none">
				
				<div class="form-group">
					<a class="bt-next" href="#" id="validar_form_terceira"><img src="/Content/images/icons/arrow_proxima_pagina.png"></a>
				</div>
			</form>
		</div>
	</div><button class="btn-login" data-target="#cadastro100" data-toggle="modal" type="button">modal 100%</button>
	<div aria-labelledby="mySmallModalLabel" class="modal fade bs-example-modal-sm" id="cadastro100" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-sm modal-padrao" role="document">
			<div class="modal-content modal-dell">
				<img class="top-modal" src="/Content/images/icons/top-modal.png"> <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				<div class="container-bar">
					<img src="/Content/images/icons/v.png">
					<div class="progress vertical">
						<div aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-info bar-cadastro" data-values="100" role="progressbar">
							<span>0</span>
						</div>
					</div>
				</div>
				<p>Cadastro realizado com sucesso!</p>
			</div>
		</div>
	</div>
	<footer class="footer">
		<p>Del Valle - Todos direitos reservados <img src="/Content/images/icons/logo-footer.png"></p>
	</footer>
	<script src="/Content/js/jquery-3.1.1.min.js">
	</script> 
	<script src="/Content/js/bootstrap.min.js">
	</script> 
	<script src="/js/jquery.mask.min.js"></script> 
	<script src="/Content/js/main.js">
	</script>
</body>
</html>