<?php
include_once("conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM reuniao WHERE id=$id";
$resultado = mysqli_query($conectar, $sql);

if($resultado == true){
    echo '{"id":"' . $id . '"}';
} else {
    die("Erro ao deletar a pessoa" . mysqli_errno($conectar) . ": " . mysqli_error($conectar));
}

?>