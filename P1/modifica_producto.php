<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
require "conexion.php";
$con = conecta();

$id			= $_REQUEST['id'];
//Recibe variables
$nombre		= $_REQUEST['nombre'];
$codigo		= $_REQUEST['codigo'];
$descripcion	= $_REQUEST['descripcion'];
$costo		= $_REQUEST['costo'];
$stock       = $_REQUEST['stock'];


   $sql = "UPDATE productos
           SET nombre='$nombre',
           codigo='$codigo',
           descripcion='$descripcion', 
           costo='$costo',
		   stock='$stock'
           WHERE id='$id' ";
$res = mysql_query($sql, $con);
header ('Location: listado_productos.php');


?>