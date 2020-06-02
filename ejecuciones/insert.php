<?php
include ("../db/conexiondb.php");
session_start();

 $nom= $_POST['nom'];
 $corr= $_POST['email'];
 $cc= $_POST['cc'];
 $clave= $_POST['pass'];
 $rol= $_POST['rol'];

  $query="INSERT INTO `usuarios` ( `nombre`, `email`, `cedula`, `clave`, `rol`) VALUES('$nom','$corr','$cc','$clave','$rol')";
  $resultado= $conn->query($query);
  if($resultado){
    $_SESSION['usuario'] =$usuario;
    header("Location: ../vista/pagusu.php");
  }else{
    echo"no se pudo registrar miso";
 }

?>
