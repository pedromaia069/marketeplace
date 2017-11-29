<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 26/07/2017
 * Time: 14:57
 */
session_start();

if(isset($_SESSION["nome_usuario"]) && !empty($_SESSION["nome_usuario"])) {
    require("bd.php");
    if(isset($_SESSION["produto"])){

    }
}
