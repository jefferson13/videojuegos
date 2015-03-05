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
        <div class="intermedio">
        <form  name="categorias" action="auxiliar.php" method="POST">
        
            <ul>
             <li><a target="_self" ><input type="image" name="general"  value="General" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Cruzadas" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Armas" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Carros" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Aventura" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Deporte" /></a></li>
             <li><a target="_self" ><input type="image" name="general"  value="Historial" /></a></li>
            </ul>
            </form> 
                       
                   
                
            <?php
                $consulta="SELECT imagen,nombre from juego";
            if(!empty($_POST['auxiliar'])){
                $categoria=$_POST['auxiliar'];
          
                if($categoria=="Cruzadas"){

                    $consulta="SELECT imagen,nombre from juego WHERE categorias_nombre='Cruzadas'";
                }
                if($categoria=="Armas"){

                    $consulta="SELECT imagen,nombre from juego WHERE categorias_nombre='Armas'";
                }
                if($categoria=="General"){

                    $consulta="SELECT imagen,nombre from juego";
                }
                if($categoria=="Carros"){

                    $consulta="SELECT imagen,nombre from juego WHERE categorias_nombre='Carros'";
                }
                if($categoria=="Deporte"){

                    $consulta="SELECT imagen,nombre from juego WHERE categorias_nombre='Deporte'";
                }
                if($categoria=="Aventura"){

                    $consulta="SELECT imagen,nombre from juego WHERE categorias_nombre='Aventura'";
                }
            }
                echo "<form method='POST' action='individual.php'>";
                include "conexion.php";

                $filas= mysqli_query($conexion, $consulta);
                while($columna=mysqli_fetch_assoc($filas)){
                    
                    echo '<div class="imagen">';
                    echo '<a  target="_self"><input type="image" name="imagen" value="'.$columna['nombre'].'" src="'.$columna['imagen'].'"/></a>';
                    echo '</div>'; 
                }
            echo "</form>";    
            ?>
           
</div>
</body>
</html>