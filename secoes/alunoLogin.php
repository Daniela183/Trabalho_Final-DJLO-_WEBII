<?php
?>

<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
  
  <div class="container">
    
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <!-- Pills navs -->
              <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link text-dark" id="tab-login" data-mdb-toggle="pill" href="?secao=alunoLogin" role="tab"
                    aria-controls="pills-login" aria-selected="true">ENTRAR</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link text-dark " id="tab-register" data-mdb-toggle="pill" href="?secao=aluno" role="tab"
                    aria-controls="pills-register" aria-selected="false">CADASTRAR</a>
                </li>
                </ul>

            <form method="post" action="login.php" class="login">
              <div class="form-floating mb-3">
              <input type="text" name="txtNome" placeholder="Informe o Nome" class="form-control" required>
                <label for="floatingInput">Nome</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="txtSenha" placeholder="Informe a senha" class="form-control" required>
                <label for="floatingPassword">Senha</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Lembrar senha
                </label>
              </div>
              <div class="d-grid">
                 <input type="submit" value="Entrar" class="btn  text-light bg-dark btn-login text-uppercase fw-bold" type="submit"> <br>
                  <input type="reset" value="Limpar" class="btn  text-light bg-dark btn-login text-uppercase fw-bold" type="submit"><br>
           
              </div>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</body>