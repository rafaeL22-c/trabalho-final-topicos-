<?php
session_start();
include_once "conexao.php"; 
$clientes = true; ;
$sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($conexao, $sql);
?>
<style>     
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once "./cdns/links.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 2) : ?>
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

        <nav class="navbar navbar-expand-lg shadow p-3 bg-danger">
            <div class="container-fluid">
          <a class="navbar-brand " href="#">rp secretaria</a>
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
<?php endif ?>
    
    
    
    
    
    
    
    
    
<?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 1) : ?>
    
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
          <a class="navbar-brand " href="index-advogado.php">rp advogacia</a>
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
        </ul>
    </div>
</div>
</nav>
</header>
<?php  endif ?>
    <div class="row">
    <?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 1) : ?>
            <div class="col-md-12 ms-lg-auto m-3 ">
        <div class="table-responsive col-sm-12 table-bordered">
            <h3 class="text-center ">Clientes</h3>
            <a  href = "form-cliente.php" class="btn btn-success m-3 ">Cadastrar cliente</a><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span>
          
            <table class="table table-hover  "> <!-- tabela -->
            <thead class="table-dark text-center"> <!--cabecalho-->
            <tr> <!--linha-->
        <th class="cabeca">Nome</th>
        <th>Idade</th>
        <th>E-mail</th>
        <th>nome social</th> 
        <th colspan="1">Ver mais</th>
    </tr>
</thead>
<?php  while ($dados = mysqli_fetch_assoc($resultado)) :?>
<tbody class="text-center">
        <td><?php  echo $dados['nome_cliente'] ?></td>
        <td> <?php  echo $dados['idade'] ?> </td>
        <td> <?php  echo $dados['email'] ?></td>
        <td> <?php  echo $dados['nome_social'] ?></td>
        <td><a href='form-cliente.php?id_cliente=<?php echo $dados['id_cliente']; ?>'>Acessar detalhes</a></td>       
            </tbody>
            <?php endwhile ?>
        </div>     
        </table>
    </div>
    <?php endif ?>
    </div>
    <?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 2) : ?>
        <div class="table-responsive col-sm-12 table-bordered mt-5">
            <h3 class="text-center ">Clientes</h3>
            <a  href = "form-cliente.php" class="btn btn-success m-3 ">Cadastrar cliente</a><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span>
          
            <table class="table table-hover  "> <!-- tabela -->
            <thead class="table-dark text-center"> <!--cabecalho-->
            <tr> <!--linha-->
        <th class="cabeca">Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>nome social</th> 
        <th colspan="1">Ver mais</th>
    </tr>
</thead>
<?php  while ($dados = mysqli_fetch_assoc($resultado)) :?>
<tbody class="text-center">
        <td><?php  echo $dados['nome_cliente'] ?></td>
        <td> <?php  echo $dados['idade'] ?> </td>
        <td> <?php  echo $dados['email'] ?></td>
        <td> <?php  echo $dados['nome_social'] ?></td>
        <td><a href='form-cliente.php?id_cliente=<?php echo $dados['id_cliente']; ?>'>Acessar detalhes</a></td>       
            </tbody>
            <?php endwhile ?>
        </div>     
        </table>
    </div>
    <?php  endif  ?>
</body>
</html>
