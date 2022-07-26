<?php 
session_start();
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
<br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="controller/fazerCheckin.php" method="post">
                <input type="hidden" name="txtId" value='<?=$_SESSION["idEvento"];?>'>
                <input type="text" name="txtCheckin">
                <button type="submit" name="botao" value="checkin" class="btn btn-success">Checkin</button>
            </form>
        </div>
        <div class="col-6">
        <form action="controller/fazerCheckout.php" method="post">
            <input type="hidden" name="txtId" value='<?=$_SESSION["idEvento"];?>'>
            <input type="text" name="txtCheckout">
            <button type="submit" name="botao" value="excluir" class="btn btn-danger">Checout</button>
        </form>
        </div>
    </div>
</div>

