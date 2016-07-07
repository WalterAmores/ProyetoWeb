<?php 
   /*****PROCESAREMOS EL FORMULARIO*******/

   /*Recibimos los datos del formulario*/
   $usuario=$_POST["usuario"];
   $password=$_POST["password"];


   require("includes/conexion.php"); /*Incluimos la conexión a la base de datos*/

   
   $consulta="SELECT * FROM usuario WHERE CURP=\"$usuario\" ";
   $resultado=mysqli_query($conexion,$consulta); /*Obtenemos la consulta en un arreglo asociativo*/
   $num_registros=mysqli_num_rows($resultado); /*Obtenemos el total de los registros*/

   echo "<br>";
   echo "El total de registros es: ".$num_registros;
   echo "<br>";


   /*Obtenemos todos los registros de la consulta en un arreglo asociativo*/
   while ($registro=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) { 
   	    
   	    echo "<br>";
   	    echo "CURP: ".$registro["CURP"];
   	    echo "<br>";
   	    echo "PASSWORD: ".$registro["Password"];
   	    	
   } /*Fin del while*/

   
?>