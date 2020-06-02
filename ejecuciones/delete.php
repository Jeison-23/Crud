<?php
 session_start();
include ("../db/conexiondb.php");
$id=$_REQUEST['id_usu'];
 $query= "DELETE FROM `usuarios` WHERE `id_usu` = '$id'";
$resultado= $conn->query($query);
if($resultado){
    header("Location: ../vista/pagusu.php");
}else{
    echo"no se pudo eliminar miso";
}
 

?>