<?php

include_once("validarcookie.php");
include_once("verurl.php");


?>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Área do Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/logo-ifg-vertical.png">
    <script src='js/bootstrap.bundle.js'></script>
</head>

    
<body style="background-color: rgba(150, 150, 150, 0.192);">

    <header>
        <?php include "includes/topo.php"; ?>
    </header>


    <section>
        <article>
            <?php
            $red = new verURL();
            $red->trocarUrl(@$_GET['secao']);

            ?>
            
        </article>
    </section>
    <footer>
        <?php include "includes/rodape.php"; ?>
    </footer>



</body>

</html>