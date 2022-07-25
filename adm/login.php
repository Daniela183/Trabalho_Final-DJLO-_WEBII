<?php


session_start();


$login = $_POST['txtNome'];
$senha = $_POST['txtSenha'];


if ($login != "Admin" or $senha != 936) {
    echo '<script>alert("Nome ou senha do Admin não cadastrada ou incorreta")</script>';
    echo "<script>location = 'index.php';</script>";
} else {
    setcookie("nome_usuario", $login);
    setcookie("senha_usuario", $senha);
    header("location: principal.php");
}

?>