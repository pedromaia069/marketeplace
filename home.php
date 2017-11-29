<?php session_start();
if(!isset($_SESSION["nome_usuario"]) && empty($_SESSION["nome_usuario"])) {
    header("Location:auntenticar.php");
}else{
    require("bd.php");
    if ($_SESSION["PERMISSAO"] == "ADMIN") {
        header("Location:home_admin.php");
    }else if ($_SESSION["PERMISSAO"] == "TECNICO") {
        header("Location:home_tecnico.php");
    }else if ($_SESSION["PERMISSAO"] == "PADRAO") {

        if(isset($_SESSION["produto"])){
            $_SESSION["produto"] = null;
            $_SESSION["TEM_SERVICO"] = false;
        }

?>

<!DOCTYPE html>
<html lang="pt">
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
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Ecomp - Muito Além de TI</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                                <li><a href="servicos.php" class="">Solicitar Serviço</a></li>

                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <li class="active dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["nome_usuario"]; ?>  <span class="caret"></span></a>
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
        <br><br>
        <div class="container  os_table">
            <table id="center_table" class="table table-hover table-bordered">
                <thead>
                <tr class="tr_os">

                    <th>Status</th>
                    <th>Serviço</th>
                    <th>Andamento</th>
                    <th>Valor</th>
                    <th>Data de solicitação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $user = $_SESSION["id_usuario"];

                $serv = DBExecute("SELECT * FROM os WHERE ID_CLIENTE = '$user' ");

                foreach ($serv as $val) {
                    //$value = @mysqli_fetch_array($val);
                    $id_serv = $val["ID_SERVICO"];

                    $ID_OS = $val["ID"];

                    $servico = DBExecute("SELECT * FROM servicos WHERE ID = '$id_serv' ");

                    $servico = @mysqli_fetch_array($servico);


                    $nome_serv = $servico["NOME"];
                    $preco_serv = $servico["PRECO"];
                    $obs = $val["OBS"];
                    $status = $val["STATUS"];
                    $dt = $val["DT_CADASTRO"];

                    $andamento = DBExecute("SELECT * FROM andamentos WHERE ID_OS = '$ID_OS' ORDER BY ID DESC LIMIT 1");
                    $total = @mysqli_num_rows($andamento);
                    if($total>=1){
                        $andamento = @mysqli_fetch_array($andamento);
                        $andamento = $andamento["TEXTO"];
                    }else{
                        $andamento = "Sem novidades";
                    }

                    echo "<tr>";
                    echo "<td>$status</td>";
                    echo "<td>$nome_serv</td>";
                    echo "<td>$andamento</td>";
                    echo "<td>R$$preco_serv</td>";
                    echo "<td>$dt</td>";
                    echo "</tr>";
                }

                ?>

                </tbody>
            </table>
        </div>


        </body>
        </html>


        <?php
    }
}
?>