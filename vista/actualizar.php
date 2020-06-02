<?php
session_start();
if(($_SESSION['usuario']) !=''){

}else{
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

<form class="formulario" action="../ejecuciones/update.php" method="post" >
<?php
    $id=$_REQUEST['id_usu'];
      include("../db/conexiondb.php");
      $query="SELECT * FROM `usuarios` WHERE `id_usu`=('$id')";
      $resultado = $conn->query($query);
      $row=$resultado->fetch_assoc();
      ?>
    
    <h1>Actualizar <img src="../img/logo.png" width="120" height="50" class="center" ></h1>
     <div class="contenedor">
     
      <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" REQUIRED name="id_usu" placeholder="Id del usuario" value="<?php echo$row['id_usu']?>">
         </div> 

     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" REQUIRED name="nom" placeholder="Nombre Completo" value="<?php echo$row['nombre']?>">
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" REQUIRED name="email" placeholder="Correo Electronico"  value="<?php echo$row['email']?>">
         
         </div>
             <div class="input-contenedor">
          <i class="fas fa-id-card icon"></i>
       <input type="text" REQUIRED name="cc" placeholder="Cedula"  value="<?php echo$row['cedula']?>">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" REQUIRED name="pass" placeholder="Contraseña"  value="<?php echo$row['clave']?>">
         
         </div>

          <div class="input-contenedor">
       <i class="fas fa-user-plus icon"></i>
         <input type="text" REQUIRED name="rol" placeholder="Cargos"  value="<?php echo$row['rol']?>">
         
         </div>
 
         <input type="submit" value="Actualizar" class="button"  >
         <p>
     <a class="link" href="pagusu.php">Cancelar</a>
         </p>
         
         
</body>
</html>