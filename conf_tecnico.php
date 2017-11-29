<!DOCTYPE html>
<html lang="en">
<head>
    <title> Confirmaçao de atendimento </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cad_user.css.css">
    <!-- Adicionando Javascript -->
    <script src="js/cadastro.js"></script>
</head>
<body>

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="confirmado_tecnico.php" id="cad" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Novo usuário</legend>
                <h4>Por favor informe a senha.</h4>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="senha" value="" class="form-control input-lg" placeholder="Senha"  />
                    </div>
                        <span class="help-block">
                            É importante que você confirme a senha enviada para o seu email
                        </span>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</div>
</div>

</body>
</html>
