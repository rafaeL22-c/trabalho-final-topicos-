<?php
session_start(); 
include_once "conexao.php"; 
$processos = true; 
$sql = "SELECT * FROM processo ";
$resultado = mysqli_query($conexao, $sql);
?>
<style>
      a{
            list-style: none;
            text-decoration: none;
        }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once("./cdns/links.php") ?>
    <link rel="stylesheet" href="./css/index.css">
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
   
    <div class="row">
        <div class="col-md-12 ms-lg-auto m-3">
        <div class="table-responsive col-sm-12">
             <h3 class="text-center">Processos</h3>
            <a class=" btn btn-success m-3" href ="form-processo.php">Cadastrar processo</a><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span>   
            <div class="responsive-table">
                    <table class="table table-hover table-bordered"> <!-- tabela -->
                    <thead id="p" class="table-dark text-center "> <!--cabecalho-->
                    <tr> <!--linha-->
                    <th class="text-center">Numero</th>
                    <th>Titulo</th>
                    <th>Responsavel</th>
                    <th>Distribuido</th>
                  
                    <th colspan="1">Ver mais</th>
                </tr>
            </thead>
            <tbody class="text-center">
            <?php  ?>
                <?php     while($dados = mysqli_fetch_assoc($resultado))  :?>
<tr>
    <td><?php echo $dados['numero'] ?></td>
    <td><?php echo $dados['titulo'] ?></td>
    <td><?php echo $dados['responsavel']  ?></td>
    <td><?php echo $dados['distribuido']  ?></td>
  
    <td><a href='form-processo.php?id_processo=<?php echo $dados['id_processo']; ?>'>Acessar detalhes</a></td>
    <?php  endwhile; ?>
</tr>          
        </tbody>
    </div>
</table>
</div>
    </div>
</body>
</html>