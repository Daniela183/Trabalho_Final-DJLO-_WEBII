<?php

include_once("../../classes/manipuladados.php");

function converte ($Strings){
    return iconv("UTF-8", "ISO8859-1", $Strings);

}

$titulo = $_POST["txtTitulo"];
$descricao = $_POST["txtDescricao"];
$dia = $_POST["diaEvento"];
$hrInicio = $_POST["hrInicio"];
$hrFim = $_POST["hrFim"];
$numVagas = $_POST["numVagas"];
$numHoras = $_POST["numHoras"];

/*$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "img/".$nomearquivosalvo;
$urllocalsalvo = "../../img/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
*/
echo '<script> alert("Seu evento foi enviado");</script>';

$cadastra = new manipuladados();
$cadastra->setTable("tb_evento");
$cadastra->setFields("titulo,descricao,dia,horarioI,horarioF,vagas,horas");
$cadastra->setDados("'$titulo','$descricao','$dia','$hrInicio','$hrFim',$numVagas,$numHoras");
$cadastra->insert();

echo '<script> alert("'.$cadastra->getStatus().'");</script>';
echo "<script> location = '../principal.php';</script>";

//echo "Título: " . $titulo . "<br/> Descricao: " . $descricao . "<br/>URL:" . $urlbanco;