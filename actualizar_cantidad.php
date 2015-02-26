<?php
foreach ($_POST['probando'] as $nombre ){
	include "conexion.php";
    $consulta="update juego set cantidad=(cantidad-1) where nombre='$nombre'";
    $filas= mysqli_query($conexion, $consulta);
    }

?>
