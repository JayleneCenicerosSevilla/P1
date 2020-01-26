<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "conexion.php";
$con = conecta();

$correo = $_REQUEST['correo'];
$pass = $_REQUEST['pass'];

$sql = "SELECT *
        FROM administradores
        WHERE correo='$correo' AND pass='$pass' AND activo=1 AND eliminado=0 ";

$res = mysql_query($sql, $con);
$num = numRegistros($res);
if($row = $num){
	if($row['pass'] = $pass){
		session_start();
		$_SESSION['correo'] = $correo;
		header("Location: listado.php");
	}else{
		header("Location: index.html");
		exit();
	}
}else{
	header("Location: index.html");
	exit();
}

?>