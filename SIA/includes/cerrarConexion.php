<?php 
	require("conexion.php"); /*Incluimos variable de conexion.php*/

	/*Cerramos la conexion*/
	if(isset($conexion)){  /*Verificamos que $conexion exista*/
		$valor = mysqli_close($conexion); /*Cerramos la conexion con la base de datos*/
		if($valor)
			printf("conexion cerrada con éxito");
		    
	} /*Fin if*/

 ?>