<?php
include_once("../classes/manipuladados.php");
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Área do Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
    <script src='js/bootstrap.bundle.js'></script>
</head>

<section class="container shadow p-3 mb-5 bg-body rounded" style="margin-top: 8.6%;">
<table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Dia</th>
                <th>Horário Inicio</th>
                <th>Horário Fim</th>
                <th>Vagas</th>
                <th>Horas</th>
                <th>Registrar Presença</th>
                <th>Alterar</th>
                <th>Excluir</th>
                
            </tr>

            <?php

            $busca = new manipuladados();
            $busca->setTable("tb_evento");
            $resultado = $busca->getAllDataTable();
            $eventos = $busca->getAllDataTable();
            foreach ($eventos as $dados) {
            ?>


                <form action="controller/verificarEvento.php" method="post" name="formulario">
                    <tr>
                        <td><?= $dados["id"]; ?></td>
                        <td><?= $dados["titulo"]; ?></td>
                        <td><?= $dados["descricao"]; ?></td>
                        <td><?= $dados["dia"]; ?></td>
                        <td><?= $dados["horarioI"]; ?></td>
                        <td><?= $dados["horarioF"]; ?></td>
                        <td><?= $dados["vagas"]; ?></td>
                        <td><?= $dados["horas"]; ?></td>

    
                        <input type="hidden" name="id" value="<?= $dados["id"]; ?>" />
                        <input type="hidden" name="txtTitulo" value="<?= $dados["titulo"]; ?>" />
                        <input type="hidden" name="txtDescricao" value="<?= $dados["descricao"]; ?>" />
                        <input type="hidden" name="diaEvento" value="<?= $dados["dia"]; ?>" />
                        <input type="hidden" name="hrInicio" value="<?= $dados["horarioI"]; ?>" />
                        <input type="hidden" name="hrFim" value="<?= $dados["horarioF"]; ?>" />
                        <input type="hidden" name="numVagas" value="<?= $dados["vagas"]; ?>" />
                        <input type="hidden" name="numHoras" value="<?= $dados["horas"]; ?>" />
                        <td><button type="submit" name="botao" value="presenca" class="btn btn-primary">Registrar presença</button></td>
                        <td><button type="submit" name="botao" value="editar" class="btn btn-success">Alterar</button></td>
                        <td><button type="submit" name="botao" value="excluir" class="btn btn-danger">Excluir</button></td>
                    </tr>


                </form>



            <?php }  ?>
        </table>
</section>