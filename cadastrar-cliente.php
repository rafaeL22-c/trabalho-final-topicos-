<?php
$idcliente = $_POST['id_cliente'];
$nome = $_POST['nome_cliente'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$nomesocial = $_POST["nome_social"];
if ($idcliente ==""){ //criando cliente novo
    $sql = "INSERT INTO  clientes(nome_cliente,idade,email,nome_social) 
            values('$nome','$idade','$email','$nomesocial')";

 }else { // alterando um cliente
    $sql = "UPDATE clientes set
                                    nome_cliente= '$nome', 
                                    idade='$idade',
                                    email='$email',
                                    nome_social='$nomesocial',
                                
                                    where id_cliente = $idcliente";   
 }

include_once "conexao.php";
$resultado =  mysqli_query($conexao,$sql);
if($resultado){
  
  header('location:index-clientes.php'); 
} else {
    echo "erro ao salvar um cliente" . 
    mysqli_errno($conexao) . ": " .
    mysqli_errno($conexao). mysqli_error($conexao);
}



 
