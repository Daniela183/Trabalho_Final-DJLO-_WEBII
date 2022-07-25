<?php 
?>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Coopercred Implementos Rodoviários</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
  <script src='js/bootstrap.bundle.js'></script>
</head>

<body>

  <header class="mb-5">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top "  style="background-color:#1d1d1b;">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../img/ifglogo.jpeg" width="20%" height="15%" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="background-color:#1d1d1b;">
            <ul class="navbar-nav d-flex justify-content-end flex-grow-1 pe-5  ">
              <li class="nav-item ">
                <a class="nav-link active px-3 fw-bold" aria-current="page" href="../index.php">INÍCIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active px-3 fw-bold" href="?secao=evento">ALTERAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active px-3 fw-bold" href="?secao=formEvento">CADASTRAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active px-3 fw-bold  " href="../logout.php">LOGOUT</a>
              </li>
  
            </ul>

          </div>
        </div>
      </div>
    </nav>
  </header>


</body>