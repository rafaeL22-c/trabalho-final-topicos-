<?php
$idcliente= $_GET['id_cliente'];
include_once "conexao.php";
$sql = "DELETE FROM clientes WHERE id_cliente = $idcliente";
$resultado = mysqli_query($conexao,$sql);

if($resultado == true){
    echo "cliente excluido com sucesso";


    header('location:index-clientes.php');
}else{
echo "não foi possivel exlcuir o cliente";
echo mysqli_errno($conexao) . ":";
echo mysqli_error($conexao);
}