<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 26/07/2017
 * Time: 16:18
 */

session_start();
if(isset($_SESSION["produto"])){
    $_SESSION["produto"] = null;
}
if(isset($_SESSION["nome_usuario"]) && !empty($_SESSION["nome_usuario"])){
    require("bd.php");

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Bem vindo <?php echo $_SESSION["nome_usuario"]; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>

    <ul class="nav nav-tabs">
        <br>
        <li class="active"><a href="home.php">Ordens de Serviço</a></li>
        <li><a href="servicos.php">Solicitar Serviços</a></li>
        <li><a href="#">Perfil</a></li>
    </ul>
    <div id="info"> <H3>Essas são suas ordens de serviços</H3></div>

    <div class="container">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>

                <th>Status</th>
                <th>Serviço</th>
                <th>Descrição</th>
                <th>Observações</th>
                <th>Valor</th>
                <th>Data de solicitação</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $user = $_SESSION["id_usuario"];

                $serv = DBExecute("SELECT * FROM os WHERE ID_CLIENTE = '$user' ");

                foreach ($serv as $val){
                    //$value = @mysqli_fetch_array($val);
                    $id_serv = $val["ID_SERVICO"];

                    $servico = DBExecute("SELECT * FROM servicos WHERE ID = '$id_serv' ");

                    $servico = @mysqli_fetch_array($servico);

                    $desc_serv = $servico["DESCRICAO"];
                    $nome_serv = $servico["NOME"];
                    $preco_serv = $servico["PRECO"];
                    $obs = $val["OBS"];
                    $status = $val["STATUS"];
                    $dt = $val["DT_CADASTRO"];

                    echo "<tr>";
                    echo "<td>$status</td>";
                    echo "<td>$nome_serv</td>";
                    echo "<td>$desc_serv</td>";
                    echo "<td>$obs</td>";
                    echo "<td>R$$preco_serv</td>";
                    echo "<td>$dt</td>";
                    echo "</tr>";
                }

            ?>

            </tbody>
        </table>
    </div>

    <div id="sair">
        <ul class="pagination">
            <li><a href="index.php">Página inicial</a></li>
            <li><a href="close.php">Sair</a></li>
        </ul>

    </div>

    </body>
    </html>




    <?php
}else{

    sleep(3);
    echo "Efetue o login";
   header("Location:auntenticar.php");
}

function sair(){
    echo "tentou sair";
}
?>