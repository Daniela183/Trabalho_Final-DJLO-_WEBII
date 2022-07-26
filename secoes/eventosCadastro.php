
<br><br><br><br><br><br>
<?php
include_once("classes/manipuladados.php");

$busca = new manipuladados();
$idaluno=0;
$nome = $_POST['aluno'];
$idevento = $_POST['evento'];

$eventos = $busca->getIdAlunoByName($nome);
$idaluno = $eventos["id"];

$retvagas = $busca->verificarVagas($idevento);
$qtdvagas = $retvagas["vagas"];

$linhas = $busca->verificarCadastro($idevento,$idaluno);

if ($linhas != 0) {
    echo '<script>alert("Você já está inscrito nesse evento")</script>';
    echo "<script>location = 'index.php?secao=eventos';</script>";
}else{
    if($qtdvagas==0)
    {
        echo '<script>alert("Não há mais vagas disponíveis para esse evento")</script>';
        echo "<script>location = 'index.php?secao=eventos';</script>";
    }
    else
    {
        $atual = new manipuladados();
        $atual->setTable('tb_evento');
        $atual->setFields('vagas = vagas-1');
        $atual->setFieldId('id');
        $atual->setValueId($idevento);
        $atual->update();

        $cadastrar = new manipuladados();
        $cadastrar->setTable("tb_evento_aluno");
        $cadastrar->setFields("id_evento, id_aluno, status");
        $cadastrar->setDados("$idevento,$idaluno,0");
        $cadastrar->insert();

    }

}


   
echo 'aluno '.$idaluno.' idevento '.$idevento.' vagas '.$qtdvagas;
?>