<?php

include_once("../../classes/manipuladados.php");

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}


$id = $_POST["id"];
$titulo = $_POST["txtTitulo"];
$descricao = $_POST["txtDescricao"];
$diaEvento = $_POST["diaEvento"];
$hrInicio = $_POST["hrInicio"];
$hrFim = $_POST["hrFim"];
$numVagas = $_POST["numVagas"];
$hrHoras = $_POST["numHoras"];


$alterar = new manipuladados();
$alterar->setTable("tb_evento");
$alterar->setFields("titulo= '$titulo', descricao='$descricao', dia='$diaEvento', horarioI='$hrInicio', horarioF='$hrFim', vagas=$numVagas, horas=$hrHoras");
$alterar->setFieldId('id');
$alterar->setValueId($id);

$alterar->update();

echo '<script> alert("' . $alterar->getStatus() . '");</script>';
echo "<script> location = '../principal.php';</script>";
