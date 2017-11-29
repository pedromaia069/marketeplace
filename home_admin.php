<?php session_start();
if(isset($_SESSION["produto"])){
    $_SESSION["produto"] = null;
    $_SESSION["TEM_SERVICO"] = false;
}
if(!isset($_SESSION["nome_usuario"]) && empty($_SESSION["nome_usuario"])) {
        header("Location:auntenticar.php");
}else {
    require("bd.php");
    if ($_SESSION["PERMISSAO"] == "PADRAO") {
        header("Location:home.php");
    } else if ($_SESSION["PERMISSAO"] == "TECNICO") {
        header("Location:home_tecnico.php");
    } else if ($_SESSION["PERMISSAO"] == "ADMIN") {


        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Bem vindo <?php echo $_SESSION["nome_usuario"]; ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/menu_vert.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
            <script src="js/home.js"></script>
            <script src="js/tabelas.js"></script>
            <link rel="stylesheet" type="text/css" href="css/home.css">
        </head>
        <body>

        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Logo</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class=""><a href="index.php" class="">Home</a></li>
                                <li class=""><a href="cadastro_tec.php" class="">Cadastro de Tecnicos</a></li>

                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <li class="dropdown active"><a href="#" class="dropdown-toggle active"
                                                               data-toggle="dropdown" role="button" aria-haspopup="true"
                                                               aria-expanded="false"><?php echo $_SESSION["nome_usuario"]; ?>
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Mudar Senha</a></li>
                                        <li><a href="#">Meus Dados</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="close.php">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <br><br>
        <br><br>
        <br><br>
        <div class="container os_table">
            <table id="center_table" class="table table-hover table-bordered" cellspacing="0">
                <thead>
                <tr class="tr_os">
                    <th>OS</th>
                    <th>Cliente</th>
                    <th>Técnico Responsável</th>
                    <th>Status</th>
                    <th>Serviço</th>
                    <th>Observações</th>
                    <th>Andamento</th>
                    <th>Valor</th>
                    <th>Data de solicitação</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $user = $_SESSION["id_usuario"];

                $serv = DBExecute("SELECT * FROM os");

                $modal_ID = 0;
                foreach ($serv as $val) {
                    //$value = @mysqli_fetch_array($val);
                    $id_os = $val["ID"];
                    $id_serv = $val["ID_SERVICO"];
                    $id_cliente = $val["ID_CLIENTE"];
                    $id_tecnico = $val["ID_TECNICO"];
                    $ID_OS = $val["ID"];
                    $servico = DBExecute("SELECT * FROM servicos WHERE ID = '$id_serv' ");

                    $servico = @mysqli_fetch_array($servico);

                    $desc_serv = $servico["DESCRICAO"];
                    $nome_serv = $servico["NOME"];
                    $preco_serv = $servico["PRECO"];
                    $obs = $val["OBS"];
                    $status = $val["STATUS"];
                    $dt = $val["DT_CADASTRO"];

                    $servico = DBExecute("SELECT * FROM usuario WHERE ID = '$id_cliente' ");

                    $servico = @mysqli_fetch_array($servico);

                    $cliente_os = $servico["NOME"] . " " . $servico["SOBRENOME"];

                    $dados_cliente = "Email:" . $servico["EMAIL"] . "\n\r" . "Telefone:" . $servico["TELEFONE"];

                    $servico = DBExecute("SELECT * FROM tecnicos WHERE ID = '$id_tecnico' ");

                    $servico = @mysqli_fetch_array($servico);

                    $tecnico_os = $servico["NOME"];

                    $dados_tecnico = "Email:" . $servico["EMAIL"] . "\n\r" . "Telefone: " . $servico["TELEFONE"];

                    $andamento = DBExecute("SELECT * FROM andamentos WHERE ID_OS = '$ID_OS' ORDER BY ID DESC LIMIT 1");
                    $total = @mysqli_num_rows($andamento);
                    if ($total >= 1) {
                        $andamento = @mysqli_fetch_array($andamento);
                        $andamento = $andamento["TEXTO"];
                    } else {
                        $andamento = "Sem novidades";
                    }

                    $modal_ID += 1;
                    $modal = "#myModal" . $modal_ID;

                    echo "<tr>";
                    //Aqui vai exibir as informações do cliente com o bootstrap popover
                    echo "<td>$id_os</td>";
                    echo "<td><a href='#' title='Informações do cliente' data-toggle='popover' data-trigger='focus' data-placement='bottom' data-content='$dados_cliente'>$cliente_os</a></td>";
                    echo "<td><a href='#' title='Informações do cliente' data-toggle='popover' data-trigger='focus' data-placement='bottom' data-content='$dados_tecnico'>$tecnico_os</a></td>";
                    echo "<td>$status</td>";
                    echo "<td>$nome_serv</td>";
                    echo "<td>$obs</td>";
                    echo "<td>$andamento</td>";
                    echo "<td>R$$preco_serv</td>";
                    echo "<td>$dt</td>";
                    echo "<td> <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target='$modal'>Editar</button></td>";
                    echo "</tr>";

                    ?>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo 'myModal' . $modal_ID ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="edit_os.php" method="post">
                                        teste:<input type="text" >
                                        <button type="submit">OK</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php

                } //fim do foreach
                ?>


        </tbody>
        </table>
        </div>


        </body>
        </html>

        <?php

    }// FIM DO ELSE PARA AAS PERMISSOES
}
?>


