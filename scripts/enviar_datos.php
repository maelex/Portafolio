<?php
	/*https://github.com/uriel-rh/portfolio/blob/master/index.html
	https://www.youtube.com/watch?v=LQvibEGbMfg*/
	
	/*Script para la insercion de los mensajes del formulario de contacto*/

	/*Conexion a la base de datos*/
	require ('conexion.php');
	/*Almacenando en variables los dato que se reciben desde index.html*/
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];
	/*Si las variables estan vacias se arroja un error*/
	if (empty($nombre) && empty($email) && empty($asunto) && empty($mensaje)) 
	{
		echo "error1";
	}
		else
	{
		/*Si no estan vacias se almacenan los datos en la base de datos*/
		$insertion="INSERT INTO mensaje values(Id_mensaje,'$nombre','$email','$asunto','$mensaje')";
		$resultado=$mysqli->query($insertion);
		echo "correcto";
	}

?>