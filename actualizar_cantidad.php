<?php
$nombre=$_POST['nombre'];
$cliente=$_POST['cliente'];
$precio=$_POST['precio'];
$fecha_entrega=$_POST['fecha'];
$id_alquiler=mktime();
$fecha_inicio=date('Y-m-j');

include "conexion.php";
$consulta="INSERT INTO  alquiler VALUES('$id_alquiler', '$fecha_inicio', '$fecha_entrega', $precio,'$nombre',$cliente)";
$insertar=mysqli_query($conexion,$consulta);

$consulta="update juego set cantidad=(cantidad-1) where nombre='$nombre'";
$actualizar= mysqli_query($conexion, $consulta);
header("Location:juegos.php");


?>	
	
	
    


