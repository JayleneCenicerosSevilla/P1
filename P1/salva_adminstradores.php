<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require "conexion.php";
$con = conecta();


//Recibe variables
$nombre		= $_REQUEST['nombres'];
$apellidos	= $_REQUEST['apellidos'];
//Recibe correo
$correo =$_REQUEST['correo'];
//Encripta contraseña
$pass = $_REQUEST['pass'];
$clave = md5($pass);
//Recibe y procesa el archivo
$file_name = $_FILES['archivo']['name'];
$file_tmp = $_FILES['archivo']['tmp_name'];
$cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
$ext       = $cadena[1];					//Extension
$dir       = "img/";					//carpeta donde se guardan los archivos
$file_enc  = md5_file($file_tmp);	

if ($file_name != '') {
    $fileName1  = "$file_enc.$ext";	
    $img = "$fileName1";
	
    @copy($file_tmp, $dir.$fileName1);	
}

//Recibe rol
$rol = $_REQUEST['rol'];
//Inserta en BD
$sql = "INSERT INTO administradores VALUES
		(0,'$nombre','$apellidos','$correo','$pass',$rol,
		'$file_name', '$img',1,0)";
$res = mysql_query($sql, $con);

header ('Location: listado.php');

?>