
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
    <link href="/Content/bootstrap.css" rel="stylesheet" />

    <link href="/Content/css/main.css" rel="stylesheet" />
    <title>Login</title>

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
            Faça seu Login
        </h2>
        <div class="login-inputs">
            <form action="/" class="m-t" method="post">
             <div class="form-group pos-rel">
                    <div class="lixeira"></div>
                    <input class="form-control txt-input" data-val="true" data-val-regex="E-mail em formato inválido." data-val-regex-pattern="^([\w\-]+\.)*[\w\- ]+@([\w\- ]+\.)+([\w\-]{2,3})$" data-val-required="Informe o E-mail" id="Email" name="Email" placeholder="cpf" required="true" type="text" value="">
           
                </div>
                <div class="form-group pos-rel">
                    <div class="lock"></div>
                    <input class="form-control txt-input password" data-val="true" data-val-length="Minimo de 5 e máximo de 20 caracteres" data-val-length-max="20" data-val-length-min="5" data-val-required="Informe a senha" id="Password" name="Password" placeholder="senha" required="true" type="password" value="">
       
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-login">Acessar</button>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <a href="/del-valle/fale" class="btn-verde-b pull-right">Fale conosco</a>

                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <a href="/del-valle/recuperar" class="btn-verde-b pull-left">Esqueci senha</a>
                    </div>
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
