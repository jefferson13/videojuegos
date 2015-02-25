<?php 
/*conection: 
$conexion = mysqli_connect("localhost","root","","juegos") or die("Error " . mysqli_error($conexion));

//consultation: 

$query = "SELECT name FROM mytable" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = mysqli_query($link, $query); 



//display information: 

while($row = mysqli_fetch_array($result)) { 
  echo $row["name"] . "<br>";

}
$Buscar=$_POST["Buscar"]; 
*/

$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$conexion = mysqli_connect("localhost","root","","juegos") or die("Error " . mysqli_error($conexion)); 
$consulta="INSERT INTO Cliente VALUES('$nombre',$cedula,$telefono)";
$insertar=mysqli_query($conexion,$consulta);
if($insertar){
	echo "Insertado con exito";
}
else{
	echo "insercion fallida";
}

?> 

