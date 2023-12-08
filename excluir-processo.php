<?php
$idprocesso= $_GET['id_processo'];
include_once "conexao.php";

$sql = "DELETE FROM processo WHERE id_processo = $idprocesso";
$resultado = mysqli_query($conexao,$sql);

if($resultado == true){
    echo "processo excluido com sucesso";

    header('location:index-processo.php');
}else{
echo "não foi possivel exlcuir o usuario";
echo mysqli_errno($conexao) . ":";
echo mysqli_error($conexao);
}