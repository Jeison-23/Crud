<?php
session_start();
if(($_SESSION['usuario']) !=''){

}else{
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>  
<body background="../img/imagen.jpg">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="../img/logo.png" width="70" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item ">
        <a class="nav-link" href="pagusu.php">Usuarios Registrados</a>
      </li>
      <li class="nav-itemn active">
        <a class="nav-link" href="singup2.php">Registrar usuarios</a>
      </li>
    </ul>
 <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../ejecuciones/closesession.php">Salir</a>
      </li>
</ul>


  </div>
</nav>
 <form class="formulario" action="../ejecuciones/insert.php" method="post" >
    
    <h1>Registrar <img src="../img/logo.png" width="120" height="50" class="center" ></h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" REQUIRED name="nom" placeholder="Nombre Completo">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" REQUIRED name="email" placeholder="Correo Electronico">
         
         </div>
             <div class="input-contenedor">
          <i class="fas fa-id-card icon"></i>
       <input type="text" REQUIRED name="cc" placeholder="Cedula">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" REQUIRED name="pass" placeholder="Contraseña">
         
         </div>

          <div class="input-contenedor">
       <i class="fas fa-user-plus icon"></i>
         <input type="text" REQUIRED name="rol" placeholder="Cargos">
         
         </div>
 
         <input type="submit" value="Registrar" class="button">
         
  
     </div>
    </form>
</body>
</html>