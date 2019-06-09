
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

    <title>Primeiro Acesso</title>
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


        <h2 class="login-title">
            Primeiro Acesso
        </h2>
        <div class="login-inputs">
            <form method='POST' action="validar_cpf">
                <div class="form-group pos-rel">
                    <div class="lixeira"></div>
                    <label for="cpf">cpf</label>
                    <input class="form-control txt-input text-box single-line cpf" data-val="true" name="cpf" data-val-regex="CPF Invalido." data-val-required="Informe o CPF" id="cpf" placeholder="cpf" required="true" type="text">
                </div>
                <div class="form-group">
                    <button type="submit" id="registrar" class="btn btn-login">Enviar</button>
                </div>
            </form>
            <div id="resposta"></div>
        </div>
    </div>
    <footer class="footer">

        <p>
            Del Valle - Todos direitos reservados
            <img src="/Content/images/icons/logo-footer.png" />
        </p>

    </footer>
    <script src="/Content/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.mask.min.js"></script> 
    <script src="/Content/js/bootstrap.min.js"></script>
    <script src="/Content/js/main.js"></script>

</body>
</html>


