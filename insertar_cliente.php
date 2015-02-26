<?php
include "conexion.php";
$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$consulta="INSERT INTO Cliente VALUES('$nombre',$cedula,$telefono)";
$insertar=mysqli_query($conexion,$consulta);
header("Location: juegos.php")
?>


