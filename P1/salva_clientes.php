<?php

require "conexion.php";
$con = conecta();


//Recibe variables
$nombre		= $_REQUEST['nombre'];	
$apellidos	= $_REQUEST['apellidos'];
//Recibe correo
$correo =$_REQUEST['correo'];
//Encripta contraseña
$pass = $_REQUEST['pass'];
$clave = md5($pass);
//Inserta en BD
$sql = "INSERT INTO clientes VALUES
		(0,'$nombre','$apellidos','$correo','$pass',
		1,0)";
$res = mysql_query($sql, $con);

header ('Location: listado_clientes.php');
?>