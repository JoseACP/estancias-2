<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM entradas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/logo-toro.ico">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="table.css">
    
    <title>Rincón Ganadero</title>
</head>
<body>
<nav> 

<div class="nav-img">
    <img src="../img/logo-toro.png">
</div>

<div class="nav-bttns">
    
<a href="../tacos/tacos.php">Tacos</a>
    <a href="../complementos/complementos.php">Complementos</a>
    <a href="../bebidas/bebidas.php">Bebidas</a>
    <a href="../cortes/cortes.php">Cortes</a>
    <a href="../ensaladas/ensaladas.php">Ensaladas</a>
    <a href="#">Entradas</a>
    <a href="../fuertes/fuertes.php">Fuertes</a>
    <a href="../infantiles/infantiles.php">Infantiles</a>
    <!-- <a href="">Bttn</a> -->

</div>



</nav>

<div class="banner">
		<div class="banner-cont">
			<div class="banner-img">
				<img src="img/logo2.png">

			</div>
		</div>
		
	</div>


<div class="patron" style="position: absolute; right:0; backdrop-filter: blur(15px); border-radius: 15px;">
    
    <img src="img/dsi-removebg-preview.png" alt="" style="height: 75px;">
    <img src="img/LogotipoSIR-med.png" alt="" style="height: 75px;">
    <img src="img/jagueza.png" alt="" style="height: 75px;">
</div>

<div class="tabla-container">
    <table class="tabla">
        <thead>
        <tr><th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Costo</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
              <?php
                  while($row=mysqli_fetch_array($query)){
              ?>
                  <tr>
                      <th><?php  echo $row['id']?></th>
                      <th><?php  echo $row['nombre']?></th>
                      <th><?php  echo $row['descripcion']?></th>
                      <th><?php  echo $row['precio']?></th>  
                      <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="info">Editar</a></th>
                      <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="danger">Eliminar</a></th>                                        
                  </tr>
              <?php 
                  }
              ?> 
              <a href="datos.php" class="insert">Agregar nuevo registro</a>
      </tbody> 
     
      </table>
      
  </div>
 
</body>
</html>