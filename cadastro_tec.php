<?php

session_start();

?>





<!DOCTYPE html>

<html lang="en">

<head>

    <title> Cadastro de usuários </title>

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

            <form action="save_tec.php" id="cad" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Novo Tecnico</legend>

                <h4>Por favor preencha o formulário.</h4>
                <div class="row">

                    <div class="col-xs-6 col-md-6">

                        <input type="text" name="nome" value="" class="form-control input-lg" placeholder="Nome"  />

                    </div>

                    <div class="col-xs-6 col-md-6">

                        <input type="text" name="sobrenome" value="" class="form-control input-lg" placeholder="Sobrenome"  />

                    </div>

                </div>

                <input type="text" name="email" value="" class="form-control input-lg" placeholder="E-mail"  />

                <input type="password" name="pass" value="" class="form-control input-lg" placeholder="Senha"  />

                <input type="password" name="pass2" value="" class="form-control input-lg" placeholder="Confirme a senha"  />

                <input type="text" name="cpf" value="" class="form-control input-lg" placeholder="CPF"  />



                <div class="row">

                    <div class="col-xs-8 col-md-4">

                        <input id="cep"  onblur="pesquisacep(this.value);"  type="text" name="cep" value="" class="form-control input-lg" placeholder="CEP"/>

                    </div>

                    <div class="col-xs-8 col-md-8">

                        <input id="rua" type="text" name="rua" value="" class="form-control input-lg" placeholder="Rua"  />

                    </div>



                </div>

                <input id="bairro" type="text" name="bairro" value="" class="form-control input-lg" placeholder="Bairro"  />

                <input name="uf" type="text" id="uf"  value="" class="form-control input-lg" placeholder="Rua"  />

                <input name="cidade" type="text" id="cidade" value="" class="form-control input-lg" placeholder="Cidade"  />

                <input name="complemento_end" type="text" value="" class="form-control input-lg" placeholder="Complemento do endereço"  />

                <input type="text" name="telefone" value="" class="form-control input-lg" placeholder="Telefone"  />



                <span class="help-block">

                            É importante que todos os dados acima estejam corretos para que seja possível o atendimento do serviço contratado

                 </span>

                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Criar conta</button>

            </form>

        </div>

    </div>

</div>

</div>



</body>

</html>



<?php

session_reset();



?>



