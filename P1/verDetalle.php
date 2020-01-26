<?php
require "conexion.php"; 
//include "menu.php";
//session_start();
$con = conecta();

$id = $_GET['id'];

$sql = "SELECT *
            FROM administradores
            WHERE id = $id";
$res = mysql_query($sql, $con);

//$id			= mysql_result($res,0,"id");
$nombre		= mysql_result($res,0,"nombres");
$apellidos	= mysql_result($res,0,"apellidos");
$rol		= mysql_result($res,0,"rol"); 
$correo		= mysql_result($res,0,"correo");
$imagen		= mysql_result($res,0,"archivo");

echo "<table id=\"tabl\" border='1px'>";
   echo "<tr>";
      echo "<td>";
         echo "ID: $id";
      echo "</td>";
	  echo "<td>";
         echo "Nombre: $nombre";
      echo "</td>";
	  echo "<td>";
         echo "Apellidos: $apellidos";
      echo "</td>";
	  echo "<td>";
         echo "Rol: $rol";
      echo "</td>";
	  echo "<td>";
         echo "Correo: $correo";
      echo "</td>";
	  echo "<td>";
         echo "<img src='img/$imagen' height='50px' ></img>";  
      echo "</td>";
   echo "</tr>";
echo "<a href='listado.php'><input type=\"button\" value=\"Regresar\" ></a>";
?>