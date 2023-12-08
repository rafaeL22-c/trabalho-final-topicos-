<?php
session_start();
include_once "conexao.php";
$cliente = null;
if (isset($_GET['id_cliente'])== true){
$idcliente = $_GET['id_cliente'];
$sql = "SELECT * FROM clientes WHERE id_cliente=$idcliente";
$resultado = mysqli_query($conexao,$sql);
$cliente = mysqli_fetch_assoc($resultado);
}
//var_dump($cliente);die;
?>







<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      a{
        list-style: none;
        text-decoration: none;
      } 
.card{
        transition: all 0.3s ease-out;
      }
.card:hover{
          transform: translateY(-8px);
      cursor: pointer;}
      .vb{
        color: #023E73;
      }</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.min.js"></script>

    <div class="row">
        <div class="col-md-12 ms-lg-auto m-3 ">
        <div class="container">
           <h3 class="text-center"> <span><i class="bi bi-person-lines-fill"></i></span> Cadastro cliente</h3><br>
            <form class="row g-3" action="cadastrar-cliente.php" method="POST">
                <input type="hidden"  name = "id_cliente" value="<?=($cliente == null) ? '' : $cliente['id_cliente'] ?>">
                <div class="col-md-6">
                    <label for="nome_cliente" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="insira o nome do cliente" value ="<?= ($cliente == null)?'': $cliente['nome_cliente']?>">
                </div>
                <div class="col-md-6">
                    <label for="nome_cliente_social" class="form-label">Nome social</label>
                    <input type="text" class="form-control" id="nome_social" name="nome_social" placeholder="insira o nome social do cliente" value ="<?= ($cliente == null)?'': $cliente['nome_social']?>">
                </div>
            <div class="col-md-6">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" placeholder="insira a idade do cliente" name="idade" value="<?=($cliente== null)? '' : $cliente['idade']?>">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="insira o email do cliente" name="email"value="<?=($cliente==null)? '': $cliente['email']?>">
            </div>
            <div class="col-md-12">
                <?php  if(empty($cliente['id_cliente']))   : ?>   
                    <button type="submit" class="btn btn-success">Cadastrar cliente</button>
                    <a class="btn btn-primary" href="index-clientes.php" >Voltar</a>
                    <?php endif ?>
                    
                    <?php if(isset($cliente['id_cliente']))   : ?>
                        <button type="submit" class="btn btn-primary">atualizar cliente</button>
                        <a class="btn btn-success" href="index-clientes.php" >Voltar</a><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span>
                        <?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 1) : ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Excluir cliente
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tem certeza que deseja excluir o cliente ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a class="btn btn-danger ms-auto " href='excluir-cliente.php?id_cliente=<?php echo $cliente['id_cliente']?>'>excluir cliente</a> 
      </div>
    </div>
  </div>
</div>
                          
                    <?php endif ?>
                    </form>
                    <?php   endif ?>
                </div>
            </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>