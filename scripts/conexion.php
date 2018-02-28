<?php
	/*Estableciendo la conexion con la base de datos mensajes*/
	//
	//https://www.youtube.com/watch?v=vLuSpdf2_Rs
	//CodigoSeis -> BW3d2AGAJxWZqC)8dSl8
	$mysqli = new mysqli("localhost","root","showcandela","mensajes"); 
	date_default_timezone_set('America/Mexico_City');
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>