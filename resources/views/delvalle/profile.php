<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />

    <meta name="author" content="Digipronto">
    <!-- Add Your favicon here -->
    <link rel="Shortcut icon" href="" type="image/x-icon" />

    <title>Editar Cadastro</title>
    <link href="/Content/bootstrap.css" rel="stylesheet" />
    <link href="/Content/site.css" rel="stylesheet" />

    <link href="/Content/css/main.css" rel="stylesheet" />

</head>
<body class="gray-circular">



    <div class="login">
        <a href="window.history.back();">
            <img src="/Content/images/icons/btn_voltar.png" class="bt-voltar" />
        </a>

        <div class="tarja"></div>

        <div class="pixels pullDown"></div>

        <img src="/Content/images/login-logo.png" alt="Royal Canin" class="login-logo pulse">


        <h2 class="login-title">
            Profile
        </h2>

        <h3 class="sub-tit">
            Dados Pessoais
        </h3>

        <div class="login-inputs">

            <form method="post">


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">

                        <input placeholder="Nome" type="text" value="Augusto Cezar" class="form-control txt-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">

                        <input placeholder="cpf" type="text" value="183.111.111.11" class="form-control txt-input" disabled>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">

                        <input placeholder="RG" type="text" class="form-control txt-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">

                        <input placeholder="Data de Nascimento" type="text" class="form-control txt-input">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <select id="select-beast" class="form-control txt-input select" placeholder="Perfil">
                            <option value="">Perfil</option>
                            <option value="4">Gerente</option>
                            <option value="1">Supervisor</option>
                            <option value="3">Vendedor</option>
                        </select>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <select id="select-beast" class="form-control txt-input select" placeholder="Sexo">
                            <option value="">Sexo</option>
                            <option value="4">Masculino</option>
                            <option value="1">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <select id="select-beast" class="form-control txt-input select" placeholder="Estado Cívil">
                            <option value="">Estado Cívil</option>
                            <option value="4">Solteiro</option>
                            <option value="1">Casado</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="CEP" type="text" class="form-control txt-input">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8 padd-left-0">
                            <input placeholder="Endereço" type="text" class="form-control txt-input">
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 padd-left-0 padd-right-0">
                            <input placeholder="Nº" type="text" class="form-control txt-input">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0">
                            <input placeholder="Complemento" type="text" class="form-control txt-input">
                        </div>

                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0">
                            <input placeholder="Bairro" type="text" class="form-control txt-input">
                        </div>
                    </div>

                </div>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 ">
                            <div class="form-group pos-rel">
                                <select id="select-beast" class="form-control txt-input select" placeholder="Estado">
                                    <option value="">Estado</option>
                                    <option value="4">SP</option>
                                    <option value="1">RJ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0">
                            <div class="form-group pos-rel">
                                <select id="select-beast" class="form-control txt-input select" placeholder="Cidade">
                                    <option value="">Cidade</option>
                                    <option value="4">São Paulo</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h3 class="sub-tit">
                        Contato
                    </h3>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="E-mail Pessoal" type="text" class="form-control txt-input">
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="E-mail Comercial" type="text" class="form-control txt-input">
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Celular" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sub-tit">
                        Alterar senha
                    </h3>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Senha Atual" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Nova senha" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Confirmar nova senha" type="text" class="form-control txt-input">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sub-tit">
                        Outras Informações
                    </h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="form-group pos-rel">
                            <select id="select-beast" class="form-control txt-input select" placeholder="Time do Coração">
                                <option value="">Time do Coração</option>
                                <option value="4">São Paulo</option>

                            </select>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="sub-tit">
                            Tamanho de camiseta
                        </h4>
                    </div>
                    <div class="form-group pos-rel">
                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
                            <input type='radio' name='tamanho' value='valuable' id="p" /><label for="p"><span>P</span></label>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
                            <input type='radio' name='tamanho' value='valuable' id="m" /><label for="m"><span>M</span></label>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
                            <input type='radio' name='tamanho' value='valuable' id="g" /><label for="g"><span>G</span></label>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 padd-left-0 padd-right-0 text-center">
                            <input type='radio' name='tamanho' value='valuable' id="gg" /><label for="gg"><span>GG</span></label>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="sub-tit">
                            Possui passaporte
                        </h4>
                    </div>


                    <div class="form-group pos-rel">
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
                            <input type='radio' name='passaporte' value='valuable' id="Sim" /><label for="Sim"><span>Sim</span></label>
                        </div>

                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
                            <input type='radio' name='passaporte' value='valuable' id="Nao" /><label for="Nao"><span>Não</span></label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="form-group pos-rel">
                            <input placeholder="Nome Conjugue" type="text" class="form-control txt-input">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                    <div class="form-group pos-rel">
                        <input placeholder="Data Aniversário Conjugue" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="painel-numb">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="sub-tit">
                            Tem Filhos
                        </h3>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group pos-rel filhos-camp">
                            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
                                <input type='radio' name='filhos' value='valuable' id="Sim-filhos" /><label for="Sim-filhos"><span>Sim</span></label>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
                                <input type='radio' name='filhos' value='valuable' id="Nao-filhos" /><label for="Nao-filhos"><span>Não</span></label>
                            </div>
                            <h3 class="sub-tit">
                                Quantos?
                            </h3>

                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 padd-right-0 padd-left-0 text-center pull-left">
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn">
                                        <a data-dir="dwn">
                                            <img src="/Content/images/icons/left.png" />
                                        </a>
                                    </span>
                                    <input type="text" class="form-control text-center txt-input" value="1">
                                    <span class="input-group-btn">
                                        <a data-dir="up">
                                            <img src="/Content/images/icons/right.png" />
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="sub-tit">
                            Tem Pet?
                        </h3>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group pos-rel">
                            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-left-0 padd-right-0 text-center">
                                <input type='radio' name='pet' value='valuable' id="pet-Sim" /><label for="pet-Sim"><span>Sim</span></label>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 padd-right-0 text-center">
                                <input type='radio' name='pet' value='valuable' id="pet-Nao" /><label for="pet-Nao"><span>Não</span></label>
                            </div>

                            <h3 class="sub-tit">
                                Quantos?
                            </h3>

                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 padd-right-0 padd-left-0 text-center pull-left">
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn">
                                        <a data-dir="dwn">
                                            <img src="/Content/images/icons/left.png" />
                                        </a>
                                    </span>
                                    <input type="text" class="form-control text-center txt-input" value="1">
                                    <span class="input-group-btn">
                                        <a data-dir="up">
                                            <img src="/Content/images/icons/right.png" />
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="sub-tit">
                        Qual?
                    </h3>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <div class="form-group pos-rel">
                            <input placeholder="Cachorro" type="text" class="form-control txt-input">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Pássaro" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group pos-rel">
                        <input placeholder="Outro" type="text" class="form-control txt-input">
                    </div>
                </div>

                <div class="form-group">
                    <a href="#" class="bt-next">
                        <img src="/Content/images/icons/arrow_proxima_pagina.png" />
                    </a>
                </div>



            </form>
        </div>
    </div>




    <footer class="footer">

        <p>
            Del Valle - Todos direitos reservados
            <img src="/Content/images/icons/logo-footer.png" />
        </p>

    </footer>


    <script src="/Content/js/jquery-3.1.1.min.js"></script>
    <script src="/Content/js/bootstrap.min.js"></script>
    <script src="/Content/js/main.js"></script>





</body>
</html>




