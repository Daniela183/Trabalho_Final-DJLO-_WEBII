<?php
include_once("../../classes/manipuladados.php");

$op = $_POST["botao"];
$id = $_POST["id"];
$titulo = $_POST["txtTitulo"];
$descricao = $_POST["txtDescricao"];
$diaEvento = $_POST["diaEvento"];
$hrInicio = $_POST["hrInicio"];
$hrFim = $_POST["hrFim"];
$numVagas = $_POST["numVagas"];
$hrHoras = $_POST["numHoras"];




switch ($op) {
    case "editar":
        echo 
        '<form method="post" action="alterarEvento.php">
        <div class="form-floating mb-3">
                <input type="hidden" name="id" value="' . $id . '"><br><br>
            <p><label for="titulo">Informe o titulo do evento</label></p>
            <p><input class="form-control" type="text" name="txtTitulo" value="' . $titulo . '" required/></p>

            <p><label for="titulo">Informe a descrição do evento</label></p>
            <p><input class="form-control" type="text" name="txtDescricao" value="' . $descricao . '" required/></p>

            <p><label>Informe a data do evento</label></p>
            <p>
                <input class="form-control" type="date" name="diaEvento" value="' . $diaEvento. '" required/>
            </p>
            </p>
            <p><label>Informe o horário de início</label></p>
            <p>
                <input class="form-control" type="time" name="hrInicio" value="' . $hrInicio. '" required/>
            </p>
            </p>
            <p><label>Informe o horário de fim</label></p>
            <p>
                <input class="form-control" type="time" name="hrFim"  value="' . $hrFim . '" required/>
            </p>
            </p>

            <p><label>Informe o número de vagas</label></p>
            <p>
                <input  class="form-control" type="number" name="numVagas" value="' . $numVagas . '" required/>
            </p>
            </p>
            <p><label>Informe a quantidade de horas</label></p>
            <p>
                <input class="form-control" type="number" name="numHoras" value="' . $hrHoras . '" required/>
            </p>
            </p>
                <input class="btn btn-dark" type="submit" value="Enviar " />
                <input class="btn btn-dark" type="reset" value="Limpar" />
            </p>
            </br>
    </form>';
        break;


    case "excluir":
        $remove = new manipuladados();
        $remove->setTable("tb_evento");
        $remove->setFieldId("id");
        $remove->setvalueId("$id");
        $remove->delete();
        echo '<script> alert("O arquivo foi removido com sucesso");</script>';
        echo "<script> location = '../principal.php';</script>";


        break;
    default:
        exit("NÂO CONSEGUIU HEHEHEH!");

        break;
}
