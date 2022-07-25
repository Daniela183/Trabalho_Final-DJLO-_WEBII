<?php
include_once("classes/manipuladados.php");
session_start();
// Feito por DevMedia
function mostraData ($data) {   

if ($data!='') {   
  return (substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4));   
}   
else { return ''; }   
}   
?>
<!DOCTYPE html>
<html>



<body style="  background-color: rgba(150, 150, 150, 0.192);">

  <section class="container shadow p-3 mb-5 bg-body rounded" style="margin-top: 8.6%;">
    <center>
      <h1 class="">SEMANA DO MEIO AMBIENTE</h1>
    </center>
    <br><br>
    <?php
      $busca = new manipuladados();
      $busca->setTable("tb_evento");
      $eventos = $busca->getAllDataTable();
      foreach ($eventos as $dados) {
      ?>
    <div class="row justify-content-between">
   
      <article class=" pb-2 col-lg-12 col-md-6 col-sm-12 ">
        <div class=" card text-center">

          <div class="card-body">
            <h5 class="card-title"><?= $dados["titulo"]; ?></h5>
            <p class="card-text"> <?= $dados["descricao"]; ?></p>
            
          </div>
          <div class=" card-footer text-muted">
          <form action="?secao=eventosCadastro" method="post">
            Inscrições do  <?=date('d/m/Y')?> até <?= mostraData($dados["dia"]) ?>
            <input type="hidden" name="aluno" value='<?=$_SESSION["usuario"];?>'>
            <input type="hidden" name="evento" value='<?= $dados["id"];?>'>
            <input value="Cadastrar" class="btn text-light bg-dark text-uppercase fw-bold" type="submit">
      </form>
          </div>
        </div>

      </article>

    </div>
    <?php }  ?>


  </section>

</body>

</html>