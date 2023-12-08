<?php
include "conexao.php";
$pessoa = json_decode(file_get_contents("php://input")); //pega os dados crus e transforma em um objeto

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO reuniao (assunto,data,cliente) VALUES ('$pessoa->assunto', '$pessoa->data', '$pessoa->cliente')";
    $result = mysqli_query($conexao, $sql);

    if ($result == true) {
        $pessoa->id = mysqli_insert_id($conexao); //retorna o último id gerado
        echo json_encode($pessoa);
    } else {
        die("Problemas ao inser . Erro: " . mysqli_errno($conexao) . " " . mysqli_error($conexao));
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT"){
    $sql = "UPDATE reuniao SET assunto='$pessoa->assunto', data='$pessoa->data', cliente='$pessoa->cliente'  WHERE id='$pessoa->id'";
    $result = mysqli_query($conexao, $sql);

    if ($result == true) {
        echo json_encode($pessoa);
    } else {
        die("Problemas ao inser uma pessoa. Erro: " . mysqli_errno($conexao) . " " . mysqli_error($conexao));
    }
}
