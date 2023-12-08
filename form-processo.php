<?php
session_start();
include_once "conexao.php";
$processo = null;
if (isset($_GET['id_processo'])== true){
$idprocesso = $_GET['id_processo'];
$sql = "SELECT * FROM processo WHERE id_processo=$idprocesso";
$resultado = mysqli_query($conexao,$sql);
$processo = mysqli_fetch_assoc($resultado);
}
//var_dump($processo);die;
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
           <h3 class="text-center"> <span><i class="bi bi-person-lines-fill"></i></span> Cadastro processo</h3><br>
            <form class="row g-3" action="cadastrar-processo.php" method="POST">
                <input type="hidden"  name = "id_processo" value="<?=($processo == null) ? '' : $processo['id_processo'] ?>">
                <div class="col-md-6">
                    <label for="nome_processo" class="form-label">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="insira o numero do processo" value ="<?= ($processo == null)?'': $processo['numero']?>">
                </div>
                <div class="col-md-6">
                    <label for="nome_processo_social" class="form-label">titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="insira o tiutlo do processo" value ="<?= ($processo == null)?'': $processo['titulo']?>">
                </div>
            <div class="col-md-6">
                <label for="idade" class="form-label">responsavel</label>
                <input type="text" class="form-control" id="responsavel" placeholder="insira o responsavel do processo" name="idade" value="<?=($processo== null)? '' : $processo['responsavel']?>">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">distribuido</label>
                <input type="date" class="form-control" id="distribuido" name="distribuido"value="<?=($processo==null)? '': $processo['distribuido']?>">
            </div>
            <div class="col-md-12">
                <?php  if(empty($processo['id_processo']))   : ?>   
                    <button type="submit" class="btn btn-success">Cadastrar processo</button>
                    <a class="btn btn-primary" href="index-processo.php" >Voltar</a>
                    <?php endif ?>
                    
                    <?php if(isset($processo['id_processo']))   : ?>
                        <button type="submit" class="btn btn-primary">atualizar processo</button>
                        <a class="btn btn-success" href="index-processos.php" >Voltar</a><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span><span style="visibility:hidden;">⠀⠀⠀⠀⠀⠀</span>
                        <?php if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 1) : ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Excluir processo
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tem certeza que deseja excluir o processo ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a class="btn btn-danger ms-auto " href='excluir-processo.php?id_processo=<?php echo $processo['id_processo']?>'>excluir processo</a> 
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