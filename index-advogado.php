<?php session_start();
include_once "./cdns/links.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        .navbar-nav .nav-link {
    transition: color 0.3s; /* Transição suave da cor */
}

.navbar-nav .nav-link:hover {
    border-bottom: 2px solid black;
}
  .cor-card{
    background-color: black;
  }
  .botao-cor{
    background-color: black;
  }
    </style>
    <header>

        <nav class="navbar navbar-expand-lg shadow p-3">
            <div class="container-fluid">
          <a class="navbar-brand " href="#">rp advogacia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
            <ul class="navbar-nav  d-flex justify-content-center align-items-center ">
                <li class="nav-item  ">
                    <a class="nav-link active " aria-current="page" href="index-clientes.php">clientes</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="index-reuniao.html">reuniões</a>
                </li>
              <li class="nav-item ">
                <a class="nav-link active" href="index-processo.php">Processos</a>
            </li> 
            <li class="nav-item ">
                <a class="nav-link active" href="index.php">sair</a>
            </li>   
        </ul>
    </div>
</div>
</nav>
</header>
<div class="container p-2 ">
    <div class="cor-fundo ">
      <div class="col-12 ">
        <div class="d-flex justify-content-center p-5 ">

          <div class="mx-3"></div>          
          <div class="card text-center mb-3 lolo" style="width: 18rem; ">
            <div class="card-body">
            <h5 class="card-title"><i class="bi bi-person " style="font-size: 2.5rem;"></i></h5>
            <p class="card-text">cadastrar cliente</p>
            <a href="form-cliente.php"  class="btn btn-outline-dark m-5">Acessar</a>
          </div>
          </div>            
          <div class="mx-3"></div>
          <div class="card text-center mb-3 cor-card" style="width: 18rem;">
            <div class="card-body text-white">
            <h5 class="card-title"><i class="bi bi-bank " style="font-size: 2.5rem;"></i></h5>
            <p class="card-text">cadastrar processo</p>
            <a href="form-processo.php"  class="btn btn-outline-light m-5">Acessar</a>
            </div>
          </div>            
        </div>
      </div>
    </div>
  </div>
</body>
</html>