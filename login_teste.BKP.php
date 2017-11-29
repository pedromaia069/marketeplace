<?php
// Inicia sessões
session_start();
require('bd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera o login
    $login = isset($_POST["email"]) ? $_POST["email"]: FALSE;
    // Recupera a senha, a criptografando em MD5
    $senha = isset($_POST["senha"])? $_POST["senha"]: FALSE;

    // Usuário não forneceu a senha ou o login
    if(!$login || !$senha){
        $_SESSION["err_blank"] = "Você deve digitar seu login e senha!";
        header("Location:auntenticar.php");
        exit;
    }

    /**
     * Executa a consulta no banco de dados.
     * Caso o número de linhas retornadas seja 1 o login é válido,

     * caso 0, inválido.
     */

    $senha = md5($_POST["senha"]);
    $SQL = "SELECT * FROM usuario WHERE EMAIL ='$login'";

    $resp = DBExecute($SQL);
    $total = @mysqli_num_rows($resp);
    // Caso o usuário tenha digitado um login válido o número de linhas será 1..
    if($total) {
        // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
        $dados = @mysqli_fetch_array($resp);
        // Agora verifica a senha
        if($senha==$dados["SENHA"]) {
            // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário

            $_SESSION["id_usuario"] = $dados["ID"];

            $_SESSION["nome_usuario"] = stripslashes($dados["NOME"]);

            $_SESSION["SOBRENOME"] = stripslashes($dados["SOBRENOME"]);

            $_SESSION["email"] = $dados["EMAIL"];

            $_SESSION["telefone"] = $dados["TELEFONE"];

            $_SESSION["RUA"] = $dados["RUA"];

            $_SESSION["CEP"] = $dados["CEP"];

            $_SESSION["BAIRRO"] = $dados["BAIRRO"];

            $_SESSION["UF"] = $dados["UF"];

            $_SESSION["CIDADE"] = $dados["CIDADE"];

            $_SESSION["COMPLEMENTO"] = $dados["COMPLEMENTO"];


            if(isset($_SESSION["produto"])){
                header("Location:confirmacao.php");
            }else{
                header("Location:home.php");
            }

            exit;
        }
        // Senha inválida
        else {
            $_SESSION["err_senha"] = "erro na senha";
            header("Location:auntenticar.php");

            exit;
        }
    }// Login inválido
    else
    {
        $_SESSION["err_login"] = "Login inexistente!";
        header("Location:auntenticar.php");
        exit;
    }

}
?>