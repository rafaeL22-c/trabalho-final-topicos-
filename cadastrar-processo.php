<?php
session_start();
$idprocesso = $_POST['id_processo'];
$numero = $_POST['numero'];
$titulo = $_POST['titulo'];
$responsavel = $_POST['responsavel'];
$distribuido = $_POST['distribuido'];

if ($idprocesso ==""){ //criando cliente novo       
    $sql = "INSERT INTO  processo(numero,titulo,responsavel,distribuido) 
            values('$numero','$titulo','$responsavel','$distribuido')";

 }else { // alterando um cliente
    $sql = "UPDATE processo set 
                                 
                                    numero='$numero',
                                    titulo='$titulo',
                                    responsavel='$responsavel',
                                     distribuido='$distribuido'
                                    where id_processo = $idprocesso";   
 }
 include_once "conexao.php";
 $resultado =  mysqli_query($conexao,$sql);
 if(isset($_SESSION['permissao']) && $_SESSION['permissao'] ==1){
   header("location:index-processo");        
}else{
   header("location:index-secretaria.php");
}
if (!$resultado) {
   die('Error: ' . mysqli_error($conexao));
}

?>
?>