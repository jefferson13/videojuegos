<?php 
/*conection: 


//consultation: 

$query = "SELECT name FROM mytable" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = mysqli_query($link, $query); 

//display information: 

while($row = mysqli_fetch_array($result)) { 
  echo $row["name"] . "<br>"; 
} */
$Buscar=$_POST["Buscar"];
$link = mysqli_connect("localhost","root","","juegos") or die("Error " . mysqli_error($link)); 
echo "Tu nombre es : ".$Buscar;
?> 

