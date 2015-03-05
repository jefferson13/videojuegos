<?php
session_start();
?>

<?php require_once("conexion.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_username"])){
 //echo "Session is set"; // for testing purposes
header("Location:juegos.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['cedula']) && !empty($_POST['contraseña'])) {
    
    $cedula=$_POST['cedula'];
    $contraseña=$_POST['contraseña'];

    include "conexion.php";
    $consulta="SELECT cedula,pass FROM cliente WHERE cedula= $cedula and pass='$contraseña'";  
    $filas=mysqli_query($conexion,$consulta);
    
    $numrows=mysqli_num_rows($filas);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($filas))
    {
    $dbusername=$row['cedula'];
    $dbpassword=$row['pass'];
    }

    if($cedula == $dbusername && $contraseña == $dbpassword)

    {


    $_SESSION['session_username']=$cedula;

    /* Redirect browser */
   header("Location:juegos.php");

    }
    } else {

 $message =  "Nombre de usuario ó contraseña invalida!";
    }

} else {
    $message = "Todos los campos son requeridos!";
}
}
?>
    <div class="container mlogin">
        <div id="login">
            <h1>Logueo</h1>
            <form name="loginform" id="loginform" action="login.php" method="POST">
                <p>
                    <label for="user_login">Cedula<br />
                    <input type="text" name="cedula" id="cedula" class="input" value="" size="20" /></label>
                </p>
                <p>
                    <label for="user_pass">Contraseña<br />
                    <input type="password" name="contraseña" id="contraseña" class="input" value="" size="20" /></label>
                </p>
                <p class="submit">
                    <input type="submit" name="login" class="button" value="Entrar" />
                </p>
                <p class="regtext">No estas registrado? <a href="register.php" >Registrate Aquí</a>!</p>
            </form>

        </div>

    </div>
	
	<?php include("includes/footer.php"); ?>
	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	