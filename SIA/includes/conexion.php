<?php 
	require("constantes.php"); /*Icluimos las constantes para la conexión*/
	$conexion = mysqli_connect(DB_SERVIDOR,DB_USUARIO,DB_PASSWORD,DB_NOMBRE); /*Realizamos la conexión*/
	if(!$conexion){
		die("Error de conexión: ".mysqli_connect_error());
		exit();
	} /*Fin if*/
	else{
		printf("conexion establecida :D");
		echo "<br>";
	} /*Fin else*/



 ?>