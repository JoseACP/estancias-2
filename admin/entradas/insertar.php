<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['name'];
$description=$_POST['description'];
$cost=$_POST['cost'];


$sql="INSERT INTO entradas VALUES('$id','$name','$description','$cost')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: entradas.php");
    echo '<script type="text/javascript">
    alert("¡Registro agregado!");
    </script>';
    
}else {
}
?>