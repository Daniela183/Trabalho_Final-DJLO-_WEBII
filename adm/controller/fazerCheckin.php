
<br><br><br><br><br><br>
<?php
include_once("../../classes/manipuladados.php");
$dado = $_POST["txtCheckin"];
$idevento = $_POST["txtId"];
$busca = new manipuladados();

#$eventos = $busca->getIdAlunoByCPFouMatricula($dado, $idevento);
#$ideventoaluno = $eventos["ida"];
$idMat = $busca->getIdAlunoByMatricula($dado);
$matricula = $idMat["id"];
$busca->setTable("tb_evento_aluno");
$busca->setFields("id_aluno,id_evento,checkin");
$busca->setDados("$matricula,$idevento,sysdate()");

$busca->insert();
echo '<script> alert("'.$busca->getStatus().'");</script>';
echo "<script> location = '../principal.php?secao=menuPresenca';</script>";
?>