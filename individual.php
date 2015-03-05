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
        <?php
        session_start();
        if(!isset($_SESSION["session_username"])) {
            header("location:login.php");
        } 
        ?>
          <h4 class="derecha">Bienvenido, <?php echo $_SESSION['session_username'];?></h4>
          <br><br>
          <div class="derecha"><p><a href="logout.php">Finalice</a> sesión aquí!</p></div> 

    </div>
 
    <div class="wrap">
    	<?php
       echo '<div class="intermedio">';
    	
    		include "conexion.php";
    		$nombre=$_POST['imagen'];
        	$consulta="SELECT imagen,nombre,cantidad,precio,descripcion,categorias_nombre from juego WHERE nombre='$nombre'";
        	$filas= mysqli_query($conexion, $consulta);
        	while($columna=mysqli_fetch_assoc($filas)){
        	echo'<h1 class="letra">"'.$columna['nombre'].'"</h1>  ';
        echo '</div>';    	

            	echo '<div >';
                        
            			echo '

                        <embed src="videos/demo3.avi" width="300" height="300">
            			<div class="derecha">
                        <br><br>
                        <label class="tama">Cantidad: '.$columna['cantidad'].'</label>
            			<br>
            			<label class="tama">Precio: $'.$columna['precio'].'</label>
            			<p class="tama">Descripcion:<br>"'.$columna['descripcion'].'"</p>
            			<label class="tama">Categoria: '.$columna['categorias_nombre'].'</label>
                        <br><br>
                        <form method="POST" action="actualizar_cantidad.php">
                        <p>
                    <label for="user_pass">Fecha De Entrega<br />
                    <input type="date" name="fecha"  class="input" size="20" /></label>
                    </p>
                        <input type="hidden" name="nombre" value="'.$columna['nombre'].'"/>
                        <input type="hidden" name="cliente" value="'.$_SESSION['session_username'].'"/>
                        <input type="hidden" name="precio" value="'.$columna['precio'].'"/>
                        <input type="submit" value="Alquilar" name="Alquilar"/>
                        <form>
                        </div>
                        
            	</div>';



        	}
    	

            
        ?>
     
    

</div>
</body>
</html>
	