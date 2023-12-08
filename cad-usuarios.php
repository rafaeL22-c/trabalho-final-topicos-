<?php
include_once "conexao.php";
$nome = $_POST['usuario'];
$senha = $_POST['senha'];
$profissao =$_POST['permissao'];

    $sql = "INSERT INTO usuarios (usuario,senha,permissao) VALUES ('$nome','$senha',$profissao)";
    mysqli_query($conexao,$sql);
    header("location:index.php")

   
?>
