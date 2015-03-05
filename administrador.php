
    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
        <title>Administrador</title>
    </head>
    <body>
    	<div class="container mregister">
			<div id="login">
	<h1>Registrar Juego</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p>
		<label for="user_login">Seleccionar Imagen<br />
		<input type="file" name="nombre" id="nombre" class="input" size="32" value=""  /></label>
	</p>
	
	
	<p>
		<label for="user_pass">Nombre Juego<br />
		<input name="cedula" id="cedula" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">Plataformas<br />
		<input  type="text" name="telefono" id="telefono" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_pass">Categoria<br />
		<input type=text list=browsers >
		<datalist id="browsers" >
   			<option> Armas
   			<option> Carros
   			<option> Deportes
   			<option> Aventura
   			<option> Cruzadas
		</datalist>
	</p>	
	<p>
		<label for="user_pass">Cantidad<br />
		<input type="text" name="pass" id="pass" class="input" value="" size="32" /></label>
	</p>
	<p>
		<label for="user_pass">Descripcion<br />
		<input type="text" name="pass" id="pass" class="input" value="" size="32" /></label>
	</p>

		<p class="submit">
		<input type="submit" name="registrar" id="registrar" class="button" value="Agregar Juego" />
	</p>
	<p class="regtext"><a href="login.php" >Inicia Sesion!</a></p>
	
	
</form>
	
	</div>
	</div>
    </body>
    </html>
