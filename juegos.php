<!--<?php

include "conexion.php";
$consulta="SELECT imagen,nombre,descripcion,plataforma,cantidad,precio from juego";
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
    
        <div class="izquierda">
            <h1 ><span class="lados">Aparta tus Juegos</span></h1>
            <form action="/dw/videojuegos/insertar_cliente.php" method="POST" >
                <label >Nombre:</label>
                <input name="nombre" type="text" >
                <br><br>
                <label >Cedula:</label>
                <input name="cedula" type="text" >
                <br><br>
                <label >Telefono:</label>
                <input name="telefono" type="number" >
                <br><br>
                <input type="submit" value="Aceptar" id="aceptar_d">

                <br><br>
                <p>Primero selecciona los juegos que quieres apartar,luego diligencia el formulario </p>
            </form>
        </div>
        <form id="obtener_nombre" name ="obtener" method="POST" action="actualizar_cantidad.php">
        <?php
        include "conexion.php";
        $consulta="SELECT imagen,nombre,descripcion,plataforma,cantidad,precio from juego";
        $filas= mysqli_query($conexion, $consulta);
        while($columna=mysqli_fetch_assoc($filas)){

            echo '<div class="imagen">';
            echo "<img src='$columna[imagen]'/>";
            echo "<label class='tama'>$columna[descripcion]</label>";
            echo "<label class='tama'>$columna[plataforma]</label>";
            echo "<label class='tama'>Cantidad=$columna[cantidad]</label>";
            echo "<label class='tama'>Precio=$ $columna[precio]</label>";
            echo "<input type='checkbox' name='probando[]' value='$columna[nombre]'>";
            echo '</div>'; 
        }
        ?>
        
        </form>
        <?php echo"<script type='text/javascript'>
            var form= document.getElementById('obtener_nombre');
            var divs= form.getElementsByTagName('div');
            var aceptar= document.getElementById('aceptar_d');
            for(var i=0;i<divs.length;i++){
                var radios= divs[i].getElementsByTagName('input');
                var seleccion=radios[0];
                seleccion.onclick =function(){
                    
                    document.obtener.submit();


                }
                

            }


              " ?>                                            
                    
                
            

        </script>   
    </div>

</div>
</body>
</html>


