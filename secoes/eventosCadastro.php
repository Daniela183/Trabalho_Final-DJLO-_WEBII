
<br><br><br><br><br><br>
<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$idnome=0;
$nome = $_POST['aluno'];
$evento = $_POST['evento'];
$eventos = $busca->getIdAlunoByName($nome);
foreach ($eventos as $dados) {
    $idnome = $dados["id"];
}

$atual = new manipuladados();
$atual->setTable('tb_evento');
$atual->setFields('vagas = vagas-1');
$atual->setFieldId('id');
$atual->setValueId($evento);
$atual->update();

$cadastrar = new manipuladados();

echo 'aluno '.$idnome.' evento '.$evento;
?>