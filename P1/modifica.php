  
<?php
require "conexion.php";
$con = conecta();

$id			= $_REQUEST['id'];
//Recibe variables
$nombre		= $_REQUEST['nombre'];
$apellidos	= $_REQUEST['apellidos'];
//Recibe correo
$correo =$_REQUEST['correo'];
//Encripta contraseña
$pass = $_REQUEST['pass'];
$clave = md5($pass);

   $sql = "UPDATE administradores
           SET nombres='$nombre',
           apellidos='$apellidos',
           correo='$correo', 
           pass='$pass'
           WHERE id='$id' ";
$res = mysql_query($sql, $con);

header ('Location: listado.php');

?>