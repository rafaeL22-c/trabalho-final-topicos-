<?php
session_start();
include_once "conexao.php";
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("location:index.php");
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT usuario, permissao , id FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    $row = mysqli_fetch_assoc($resultado);

    if ($row) {
        $permissao = $row['permissao'];
        $idusuario = $row['id'];
        switch ($permissao) {
            case 1:
                $_SESSION['usuario'] = $usuario;
                $_SESSION['permissao'] = $permissao;
                $_SESSION['id'] = $idusuario;
                header("location:index-advogado.php");
                exit();
            case 2:
                $_SESSION['usuario'] = $usuario;
                $_SESSION['permissao'] = $permissao;
                $_SESSION['id'] = $idusuario; 
                header("location:index-advogado.php");
                exit();
            default:
                header("location:index.php");
                exit();
        }
    } else {
        header("location:index.php");
        exit();
    }
} else {
    // Tratar erros de consulta, se necessário.
    header("location:index.php");
    exit();
}
?>
