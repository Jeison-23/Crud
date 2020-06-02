<?php
session_start();
if(($_SESSION['usuario']) !=''){

}else{

  header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="../img/logo.png" width="70" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="pagusu.php">Usuarios Registrados</a>
      </li>
      <li class="nav-itemn ">
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

  <table class="table">
    <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombres</th>
            <th scope="col">Correo</th>
            <th scope="col">Cedula</th>
           <!-- <th scope="col">Clave</th> -->
            <th scope="col">Cargos</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
      <?php
      include ("../db/conexiondb.php");
      $query="SELECT * FROM `usuarios`";
      $resultado = $conn->query($query);
      while($row=$resultado->fetch_assoc()){
      ?>

        <tr>
          <th scope="row"><?php echo$row['id_usu']?></th>
          <td><?php echo$row['nombre']?></td>
          <td><?php echo$row['email']?></td>
          <td><?php echo$row['cedula']?></td>
          <!-- <td><?php echo$row['clave']?></td> -->
          <td><?php echo$row['rol']?></td>
          <td><a href="actualizar.php?id_usu=<?php echo$row['id_usu'];?>">Actualizar</a></td>
          <td ><a href="eliminar.php?id_usu=<?php echo$row['id_usu'];?>">Eliminar</a></td>
          </tr>

          <?php
      }
          ?>

        </tbody>
      </table>
    
</body>
</html>
