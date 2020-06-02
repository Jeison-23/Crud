<?php
include ("../db/conexiondb.php");
session_start();

$id=$_REQUEST['id_usu'];
 $nom= $_POST['nom'];
 $corr= $_POST['email'];
 $cc= $_POST['cc'];
 $clave= $_POST['pass'];
 $rol= $_POST['rol'];


 $query="UPDATE `usuarios` SET `nombre` = '$nom', `email` = '$corr', `cedula` = '$cc', `clave` = '$clave', `rol` = '$rol' WHERE `id_usu` = '$id'";
$resultado= $conn->query($query);
if($resultado){
    header("Location: ../vista/pagusu.php");
}else{
    echo"no se pudo registrar miso";
}
 

?>