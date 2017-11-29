<?php
session_start();
if(!isset($_SESSION["nome_usuario"]) && empty($_SESSION["nome_usuario"])) {
    header("Location:auntenticar.php");
}else{

    if ($_SESSION["PERMISSAO"] == "ADMIN") {
        header("Location:home_admin.php");
    }else if ($_SESSION["PERMISSAO"] == "PADRAO") {
        header("Location:home.php");
    }else if ($_SESSION["PERMISSAO"] == "TECNICO"){
        require("bd.php");

        if(isset($_POST["ANDAMENTO"]) && isset($_POST["OS"]) && !empty($_POST["ANDAMENTO"]) && isset($_POST["status"]) && isset($_POST["OBS"]) ){
            $OS_ID = $_POST["OS"];
            $andamento = $_POST["ANDAMENTO"];
            $STATUS = $_POST["status"];
            $obs = $_POST["OBS"];
            $today = date("Y-m-d H:i:s");
            $sql = "INSERT INTO andamentos (ID_OS, TEXTO, DATA_ANDAMENTO) VALUES ('$OS_ID', '$andamento','$today')";
            $andamento = DBExecute($sql);
            $sql = "UPDATE os SET STATUS = '$STATUS', OBS = '$obs' WHERE ID = '$OS_ID' ";
            $andamento = DBExecute($sql);

            header("Location:home_tecnico.php");



        }else if(!isset($_POST["OS_ID"])){
            echo $_POST["ANDAMENTO"];
            header("Location:home_tecnico.php");
        }
    }
}