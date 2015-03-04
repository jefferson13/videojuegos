<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Juegos Unillanos</title>
</head>
<body>

<div class="General">

    <div class="logo">
	   <img src="imagenes/joystick.png" alt="games" class="logo_margen" /> 
        <h1 class="logo_margen">Games Unillanos</h1>

    </div>
 
    <div class="wrap">
    
        <div class="intermedio">
            <ul>
                <li><a href="">General</a></li>
                <li><a href="">Armas</a></li>
                <li><a href="">Carros</a></li>
                <li><a href="">Deporte</a></li>
                <li><a href="">Aventura</a></li>
                <li><a href="">Cruzadas</a></li>
    </ul>
        </div>
  
        <article >
        <form id="obtener_nombre" name ="obtener" method="POST" action="actualizar_cantidad.php">
        <?php
        include "conexion.php";
        $consulta="SELECT imagen,nombre from juego";
        $filas= mysqli_query($conexion, $consulta);
        while($columna=mysqli_fetch_assoc($filas)){

            echo '<div class="imagen">';
            echo "<img src='$columna[imagen]'/>";
            /*echo "<label class='tama'>$columna[descripcion]</label>";
            echo "<label class='tama'>$columna[plataforma]</label>";
            echo "<label class='tama'>Cantidad=$columna[cantidad]</label>";
            echo "<label class='tama'>Precio=$ $columna[precio]</label>";
            echo "<input type='checkbox' name='probando[]' value='$columna[nombre]'>";*/
            echo '</div>'; 
        }
        ?>
        
        </form>
        </article>
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


