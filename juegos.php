<!--<?php

include "conexion.php";
$consulta="SELECT imagen,descripcion,plataforma,cantidad,precio from juego";
$filas= mysqli_query($conexion, $consulta);

?>-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="otros/style.css" rel="stylesheet" type="text/css">
<title>Juegos Unillanos</title>
</head>
<body>

<div class="General">

    <div class="logo">
	   <img src="otros/joystick.png" alt="games" class="logo_margen" /> 
        <h1 class="logo_margen">Games Unillanos</h1>

    </div>
 
    <div class="wrap">
    
        <div class="intermedio">
            <h1 ><span class="letra">Selecciona Tus Juegos</span></h1>
        </div>
	
        <div class="derecha">
            <h1><span class="lados">Juegos Seleccionados</span></h1>

            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>plataforma</th>
                </tr>

                
          <!--     <?php
                
             while($columna=mysqli_fetch_assoc($filas)){
                                      
                   /* echo"<td>$columna[nombre]</td>";
                    echo"<td>$columna[descripcion]</td>";
                    echo"<td>$columna[plataforma]</td>";
                    echo"<td>$columna[cantidad]</td>";
                    echo"<td>$columna[precio]</td>";
                    echo "</tr>";*/
                }
                ?>-->
            </table>        
        </div>
    
        <div class="izquierda">
            <h1 ><span class="lados">Aparta tus Juegos</span></h1>
            <form action="/dw/videojuegos/insertar_cliente.php" method="POST">
                <label >Nombre:</label>
                <input name="nombre" type="text" >
                <br><br>
                <label >Cedula:</label>
                <input name="cedula" type="text" >
                <br><br>
                <label >Telefono:</label>
                <input name="telefono" type="number" >
                <br><br>
                <input type="submit" value="Aceptar" >
                <br><br>
                <p>Primero selecciona los juegos que quieres apartar,luego diligencia el formulario </p>
            </form>
        </div>
        <?php
        include "conexion.php";
        $consulta="SELECT imagen,descripcion,plataforma,cantidad,precio from juego";
        $filas= mysqli_query($conexion, $consulta);
        while($columna=mysqli_fetch_assoc($filas)){

            echo '<div class="imagen">';
            echo "<img src='$columna[imagen]'/>";
            echo "<label class='tama'>Descripcion=$columna[descripcion]</label>";
            echo "<label class='tama'>Plataforma=$columna[plataforma]</label>";
            echo "<label class='tama'>Cantidad=$columna[cantidad]</label>";
            echo "<label class='tama'>Precio=$ $columna[precio]</label>";
            echo "<input type='radio' >";
            echo '</div>'; 
        }
        ?>
    </div>

</div>
</body>
</html>


