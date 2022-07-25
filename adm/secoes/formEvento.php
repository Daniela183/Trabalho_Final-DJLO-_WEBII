<?php
include_once("../classes/manipuladados.php");
?>
<html>

<body>
    <div class="container">
        <div class="row">
            <div class=" mt-5 col-sm-9 col-md-7 col-lg-9 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h3 class="card-title text-center">Cadastrar Eventos</h3>
                        <div class="cont">


                            <form method="post" enctype="multipart/form-data" action="controller/cadastrarEvento.php">
                                <div class="form-floating mb-3">

                                    <p><label for="titulo">Informe o titulo do evento</label></p>
                                    <p><input class="form-control " type="text" name="txtTitulo" required/></p>

                                    <p><label for="titulo">Informe a descrição do evento</label></p>
                                    <p><input class="form-control" type="text" name="txtDescricao" required/></p>

                                    <p><label>Informe a data do evento</label></p>
                                    <p>
                                        <input class="form-control" type="date" name="diaEvento" required/>
                                    </p>
                                    </p>
                                    <p><label>Informe o horário de início</label></p>
                                    <p>
                                        <input class="form-control" type="time" name="hrInicio" required/>
                                    </p>
                                    </p>
                                    <p><label>Informe o horário de fim</label></p>
                                    <p>
                                        <input class="form-control" type="time" name="hrFim" required/>
                                    </p>
                                    </p>

                                    <p><label>Informe o número de vagas</label></p>
                                    <p>
                                        <input  class="form-control" type="number" name="numVagas" required/>
                                    </p>
                                    </p>
                                    <p><label>Informe a quantidade de horas</label></p>
                                    <p>
                                        <input class="form-control" type="number" name="numHoras" required/>
                                    </p>
                                    </p>
                                        <input class="btn btn-dark" type="submit" value="Enviar" />
                                        <input class="btn btn-dark" type="reset" value="Limpar" />
                                    </p>
                                    </br>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



</body>

</html>