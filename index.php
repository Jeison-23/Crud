<?php
include ('db/conexiondb.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>incio</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    <link rel="stylesheet" type="text/css" href="css/estilos.css">


</head>
<body>
<body background="img/imagen.jpg">

    <form class="formulario" action="ejecuciones/enter.php"method="post">

    <h1>Bienvenidos  a  <img src="img/logo.png" width="120" height="50" class="center" > </h1>
    
    <div class="contenedor">
     
     <div class="input-contenedor">
     <i class="fas fa-envelope icon"></i>
     <input type="text" name="email" placeholder="Correo Electronico">

     </div>

     <div class="input-contenedor">
    <i class="fas fa-key icon"></i>
     <input type="password" name="pass" placeholder="Contraseña">

     </div>
     <input type="submit" value="Ingresar"  class="button">
     <p>
     <a class="link" href="vista/singup.php"> no tengo una cuenta</a></p>
    </form>
</body>
</html>
