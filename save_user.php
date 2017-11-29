<?php

session_start();
require("bd.php");
// Cria uma variável que terá os dados do erro
$erro = false;

// Verifica se o POST tem algum valor
if ( !isset( $_POST ) || empty( $_POST ) ) {
    $erro = 'Nada foi postado.';
}

// Cria as variáveis dinamicamente
foreach ( $_POST as $chave => $valor ) {
    // Remove todas as tags HTML
    // Remove os espaços em branco do valor
    $$chave = trim( strip_tags( $valor ) );

    // Verifica se tem algum valor nulo
    if ( empty ( $valor ) && $chave != 'complemento_end' ) {
        $erro = 'Preencha o campo: ' . $chave;
    }
}

// Verifica se $idade realmente existe e se é um número.
// Também verifica se não existe nenhum erro anterior
/*if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
    $erro = 'A idade deve ser um valor número.';
}*/

// Verifica se $site realmente existe e se é uma URL.
// Também verifica se não existe nenhum erro anterior
/*if ( ( ! isset( $site ) || ! filter_var( $site, FILTER_VALIDATE_URL ) ) && !$erro ) {
    $erro = 'Envie um site válido.';
}
*/

// Verifica se $email realmente existe e se é um email.
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) ) {
    $erro = 'Envie um email válido.';
}

if($_POST['pass'] != $_POST['pass2'] && !$erro  ){
    $erro = "senhas não são iguais";
}

// Se existir algum erro, mostra o erro
if ( $erro ) {
    $_SESSION['erro'] = $erro;
    header("Location:cad_user.php");
} else {
    $senha = md5($pass);

    $sql = "INSERT INTO usuario (NOME, SOBRENOME, EMAIL, SENHA, TELEFONE, RUA, CEP, BAIRRO, UF, CIDADE, COMPLEMENTO, PERMISSAO)
            VALUES ('$nome', '$sobrenome', '$email', '$senha', '$telefone', '$rua', '$cep', '$bairro', '$uf','$cidade','$complemento_end', 'PADRAO')";
    $resp = DBExecute($sql);

    $sql = "SELECT * FROM usuario WHERE EMAIL = '$email' AND SENHA = '$senha'";
    $resp = DBExecute($sql);
    $dados = @mysqli_fetch_array($resp);
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

    $_SESSION["PERMISSAO"] = $dados["PERMISSAO"];
    header("Location:home.php");
}