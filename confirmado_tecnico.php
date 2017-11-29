<?php
/**
 * Created by PhpStorm.
 * User: ECOMPTEC
 * Date: 27/07/2017
 * Time: 16:50
 */

if(isset($_POST)){

    require("bd.php");
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM pass_os WHERE PASS = '$senha'";
    $resp = DBExecute($sql);

    $total = @mysqli_num_rows($resp);
    if($total == 1){
        $resp = @mysqli_fetch_array($resp);
        $id = $resp['ID'];
        $id_os = $resp['OS'];
        $id_tec = $resp['TECNICO'];
        $id_cliente = $resp['CLIENTE'];

        $sql = "SELECT * FROM tecnicos WHERE ID = '$id_tec'";
        $resp = DBExecute($sql);
        $resp = @mysqli_fetch_array($resp);

        $nome_tecnico = $resp['NOME'];
        $email_tecnico = $resp['EMAIL'];

        $sql = "SELECT * FROM usuario WHERE ID = '$id_cliente'";
        $resp = DBExecute($sql);
        $resp = @mysqli_fetch_array($resp);
        $end_cliente = "CEP: " . $resp["CEP"] . ", RUA: " . $resp["RUA"] . ", BAIRRO: " . $resp["BAIRRO"] . ", CIDADE: " . $resp["CIDADE"] . ", UF: " . $resp["UF"] . ", COPLEMENTO: " . $resp["COMPLEMENTO"];
        $nome_cliente = $resp['NOME'];
        $email_cliente = $resp['EMAIL'];

        $today = date("Y-m-d H:i:s");
        $status = "O técnico ". $nome_tecnico . " confirmou o atendimento para o seu serviço. \r\n"
                    . "data da confirmação: " . $today ;

        $sql = "INSERT INTO andamentos (ID_OS, TEXTO, DATA_ANDAMENTO) VALUES ('$id_os','$status','$today')";
        $resp = DBExecute($sql);

        $sql = "UPDATE os SET STATUS = \"AGUARDANDO ATENDIMENTO\"";
        $resp = DBExecute($sql);

        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Confirmacao de Atendimento <contato@ecomptec.com.br>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sub = "Confirmado o atendimento" ;

        $msg = " <p>O atendimento foi confirmado pelo técnico ". $nome_tecnico . "</p><br> "
            . " <p> O cliente mora em: </p>". $end_cliente . "<br>" . "O email de contato é: " . $email_cliente . "<br>";

        $to = $email_tecnico . ',' . $email_cliente;

        $envio = mail($to, $sub, $msg, $headers);

        $sql = "DELETE FROM pass_os WHERE PASS = '$senha'";
        $resp = DBExecute($sql);

        echo "<h1>Atendimento Confirmado</h1>";
        sleep(3);
        header("Location:home_tecnico.php");
    }else{
        echo "algo errado";
    }
}