<?php

include_once("classes/manipuladados.php");
session_start();
$manipula = new manipuladados();

$login = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

$linhas = $manipula->validarLogin($login, $senha);

if ($linhas == 0) {
    echo '<script>alert("Nome ou senha do Admin não cadastrada ou incorreta")</script>';
    echo "<script>location = 'index.php?secao=alunoLogin';</script>";
} else {
    $_SESSION["usuario"] = $login;
    setcookie("nome_usuario", $login);
    setcookie("senha_usuario", $senha);
    header("location: index.php?secao=eventos");
}

?>