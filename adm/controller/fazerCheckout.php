
<br><br><br><br><br><br>
<?php
include_once("../../classes/manipuladados.php");
$dado = $_POST['txtCheckout'];
$idevento = $_POST['txtId'];
$busca = new manipuladados();

$eventos = $busca->getIdAlunoByCPFouMatricula($dado, $idevento);
$ideventoaluno = $eventos["ida"];
echo '<script> alert("'.$ideventoaluno.'");</script>';
$busca->setTable("tb_evento_aluno");
$busca->setFields("checkout = sysdate()");
$busca->setFieldId('id');
$busca->setValueId($ideventoaluno);
$busca->update();

$busca->setFields("status=1");
$busca-> update();

echo '<script> alert("'.$busca->getStatus().'");</script>';
#echo "<script> location = '../principal.php?secao=menuPresenca';</script>";


?>