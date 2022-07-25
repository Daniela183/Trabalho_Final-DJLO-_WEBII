<?php





if (isset($_COOKIE["nome_usuario"])) {
    $nome_usuario = $_COOKIE["nome_usuario"];
}

if (isset($_COOKIE["senha_usuario"])) {
    $senha_usuario = $_COOKIE["senha_usuario"];
}

if (!(empty($nome_usuario) or empty($senha_usuario))) {

    if ($nome_usuario != "Admin" or $senha_usuario != 936) {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        header("location: index.php");
        exit;
    }
}else{
    header("location: index.php");
    exit;
}

?>