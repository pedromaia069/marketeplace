<?php
// Inicia sessões
session_start();
if(isset($_SESSION["nome_usuario"]) && !empty($_SESSION["nome_usuario"])) {
    if(isset($_GET['id'])){
        $_SESSION["produto"] = $_GET['id'];
        header("Location:confirmacao.php?id=".$_GET['id']);
    }else {
        header("Location:home.php");
    }
}else{

?>
<!DOCTYPE html>

<html lang="pt-br" xmlns:email="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    

    <title>Ecomp MarketPlace</title>

    <link rel="stylesheet" type="text/css" href="css/auntenticar.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>

</head>

<body>

<div id="head">

</div>
<?php
$err = '';
if (isset($_SESSION["err_senha"])) {
    $err = $_SESSION["err_senha"];
}
if (isset($_SESSION["err_login"])) {
    $err = "<br>" . $_SESSION["err_login"];
}
if (isset($_SESSION["err_blank"])) {
    $err = $_SESSION["err_blank"];
}
?>

<div id="center_login">
    <br><span class="erro"><?php echo $err ?></span>
    <div id="login">
        <P id="log_p"> Login </P>
        <form method="post" action="login_teste.php">
            <input class="inp_log inp" type="email" name="email" placeholder=" E-mail"><br><br>
            <input class="inp_sen inp" type="password" name="senha" placeholder=" Senha"><br><br>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="http://marketplace.ecomptec.com.br/cad_user.php" class="btn btn-primary">Cadastro</a>
        </form>
    </div>
</div>

<div id="rodape">

</div>
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="plugins/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="plugins/modernizr.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

<!-- Backstretch javascript -->
<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="plugins/jquery.appear.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/index_autenticar.js"></script>
<?php

}

    if(isset($_GET["id"])){
        $_SESSION["produto"] = $_GET["id"];
    }
    ?>
</body>


</html>