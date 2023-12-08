<?php
include_once ("conexao.php");
$sql = "SELECT * FROM reuniao ORDER BY id ASC";
$resultado = mysqli_query($conexao, $sql);

if($resultado == true){
    $pessoas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    echo json_encode($pessoas);
} else {
    die("Erro ao listar" . mysqli_errno($conexao) . ": " . mysqli_error($conexao));
}
