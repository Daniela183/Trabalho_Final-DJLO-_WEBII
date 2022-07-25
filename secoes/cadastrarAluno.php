<?php

include_once("../classes/manipuladados.php");

function converte ($Strings){
    return iconv("UTF-8", "ISO8859-1", $Strings);

}

$nome = $_POST["txtNome"];
$matricula = $_POST["txtMatricula"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];

/*$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "img/".$nomearquivosalvo;
$urllocalsalvo = "../../img/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
*/
echo '<script> alert("Você foi cadastrado com sucesso");</script>';

$cadastra = new manipuladados();
$cadastra->setTable("tb_aluno");
$cadastra->setFields("nome, senha, matricula, cpf, email");
$cadastra->setDados("'$nome','$senha', '$matricula','$cpf', '$email' ");
$cadastra->insert();

echo '<script> alert("'.$cadastra->getStatus().'");</script>';
echo "<script> location = '../index.php';</script>";

//echo "Título: " . $titulo . "<br/> Descricao: " . $descricao . "<br/>URL:" . $urlbanco;