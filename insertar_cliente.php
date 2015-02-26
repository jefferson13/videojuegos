<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$consulta="INSERT INTO Cliente VALUES('$nombre',$cedula,$telefono)";
$insertar=mysqli_query($conexion,$consulta);

$id=mktime();
$fecha=date('l jS \of F Y h:i:s A');
$juego="";
include "conexion.php";
$consultas="INSERT INTO alquiler VALUES($id,$fecha,$juego,$cedula)";
$insertars=mysqli_query($conexion,$consultas);
header("Location:juegos.php");

?>


