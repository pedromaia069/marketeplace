<?phpsession_start();if(isset($_SESSION["id_usuario"]) && !empty($_SESSION["nome_usuario"])){    require("bd.php");    if(isset($_GET["id"]) && isset($_SESSION["TEM_SERVICO"])){        $_SESSION["produto"] = $_GET["id"];    }    if(!isset($_SESSION["produto"])){       header("Location:index.php");    }else{?><!DOCTYPE html><html lang="en"><head>    <title>Bem vindo <?php echo $_SESSION["nome_usuario"]; ?></title>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <link rel="stylesheet" href="css/menu_vert.css">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    <link rel="stylesheet" type="text/css" href="css/home.css">    <link href="css/datepicker.css" rel="stylesheet"></head><body><div id="info"> <H3>confirme sua solicitação</H3></div>        <?php            $prod = $_SESSION["produto"];            $serv = DBExecute("SELECT * FROM servicos WHERE ID = '$prod' ");            $serv = @mysqli_fetch_array($serv);            $_SESSION["SERVICO"] = $nome_serv = $serv["NOME"];            $_SESSION["DESC"] =$desc_serv = $serv["DESCRICAO"];            $_SESSION["PRECO"] = $preco_serv = $serv["PRECO"];        ?><div id="form_prod">    <form action="confirmado.php" method="post">        <span class="txt_confirmacao">Produto selecionado: </span>        <input type="text" class="form-control" name="produto" value="<?php echo $nome_serv?>" disabled>        <span class="txt_confirmacao">Descrição: </span>        <input type="text" class="form-control" name="desc" value="<?php echo $desc_serv?>" disabled>        <span class="txt_confirmacao">Preço: </span>        <input type="text" class="form-control" name="preco" value="<?php echo "R$" . $preco_serv . ",00"?>" disabled>        <span class="txt_confirmacao">Informe o seu problema: </span>        <textarea class="form-control" name="obs" placeholder="Exemplo: Meu computador não liga, não dá sinal algum de vida!"></textarea>        <span class="txt_confirmacao">Data para atendimento: </span><br>        <input id="data1" type="datetime" name="data" value="" class="form-control input-lg pagination" placeholder="Data"  style="width: 20%" />        <br>        <button type="submit"  class="btn btn-primary btn_prod">Confirmar</button>        <a href="index.php" class="btn btn-primary btn_prod">Cancelar</a>    </form></div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><!-- Referência do arquivo JS do plugin após carregar o jquery --><!-- Datepicker --><script src="js/bootstrap-datepicker.js"></script><!-- Include all compiled plugins (below), or include individual files as needed --><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><script>    $(document).ready(function () {        $('#data1').datepicker({            format: "dd/mm/yyyy",            language: "pt-BR"        });    });</script></body></html><?php    }}else{    echo "nada";}?>