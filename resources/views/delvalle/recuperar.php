


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

    <title>Esqueci minha Senha</title>
    <link href="/Content/bootstrap.css" rel="stylesheet" />
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


        <h2 class="esqueci-title">
            Digite seu CPF que enviaremos sua nova senha através do nosso sistema.
        </h2>
        <div class="login-inputs">
            <form method="post">

                <div class="form-group pos-rel">
                    <div class="lixeira"></div>
                    <input class="form-control txt-input" data-val="true" data-val-regex="CPF Invalido." data-val-required="Informe o E-mail" id="Email" name="Email" placeholder="cpf" required="true" type="text" value="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-login">Enviar</button>
                </div>
            </form>


        </div>

    </div>



    <button type="button" class="btn-login" data-toggle="modal" data-target="#senhaenviada">modal senha enviada</button>


    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="senhaenviada">
        <div class="modal-dialog modal-sm modal-padrao" role="document">
            <div class="modal-content modal-dell">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>


                <p>Senha enviada com sucesso!</p>
                <span class="span1">Acesse seu email cadastrado e verifique na caixa de entrada ou spam/lixo eletrônico</span>
                <div class="form-group">

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <a href="Login.html" class="btn btn-login">Voltar para o login</a>
                    </div>
                </div>
            </div>
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

