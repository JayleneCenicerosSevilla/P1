<?php

require "conexion.php";
$con = conecta();


//Recibe variables
$nombre		= $_REQUEST['nombre'];

$codigo		= $_REQUEST['codigo'];
$descripcion	= $_REQUEST['descripcion'];
$costo		= $_REQUEST['costo'];
$stock		= $_REQUEST['stock'];

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

//Inserta en BD
$sql = "INSERT INTO productos VALUES
		(0,'$nombre','$codigo','$descripcion','$costo',$stock,
		'$file_name', '$img',1,0)";
$res = mysql_query($sql, $con);

header ('Location: listado_productos.php');

?>