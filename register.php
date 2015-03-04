<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


	<?php

if(isset($_POST["registrar"])){


if(!empty($_POST['nombre']) && !empty($_POST['cedula']) && !empty($_POST['telefono']) && !empty($_POST['contraseña'])) {
	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$contraseña=$_POST['contraseña'];
	

	include "includes/connection.php";
	$consulta="SELECT cedula FROM cliente WHERE cedula= $cedula";	
	$fila=mysqli_query($conexion,$consulta);
	$numrows=mysqli_num_rows($fila);

	
	if($numrows==0)
	{
		$sql="INSERT INTO cliente VALUES('$nombre',$cedula, $telefono, '$contraseña')";
		$result=mysqli_query($conexion,$sql);
		$result;
		if($result){
		 $message = "Cuenta Correctamente Creada";
	} else {
		 $message = "Error al ingresar datos de la informacion!";
	}

	} else {
	 $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
	}

} 	else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	
<div class="container mregister">
			<div id="login">
	<h1>Registrar</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p>
		<label for="user_login">Nombre Completo<br />
		<input type="text" name="nombre" id="nombre" class="input" size="32" value=""  /></label>
	</p>
	
	
	<p>
		<label for="user_pass">Cedula<br />
		<input name="cedula" id="cedula" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">Telefono<br />
		<input  type="text" name="telefono" id="telefono" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_pass">Contraseña<br />
		<input type="password" name="contraseña" id="contraseña" class="input" value="" size="32" /></label>
	</p>	
	

		<p class="submit">
		<input type="submit" name="registrar" id="registrar" class="button" value="Registrar" />
	</p>
	
	<p class="regtext">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>
</form>
	
	</div>
	</div>
	
	
	
	<?php include("includes/footer.php"); ?>