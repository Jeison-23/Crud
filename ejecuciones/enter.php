<?php
    require ("../db/conexiondb.php");
     session_start();
     $usuario = $_POST['email'];
     $clave = $_POST['pass'];

     $consulta="SELECT * FROM `usuarios` WHERE `email` = '$usuario' AND `clave` = '$clave'";
     $resultado=mysqli_query($conn,$consulta);

     $filas=mysqli_num_rows($resultado);
       
     if($filas>0){
         $_SESSION['usuario'] =$usuario;
         header('location: ../vista/pagusu.php');
       }else{
         header('location: ../index.php');
         echo"error ";
       }

?>
