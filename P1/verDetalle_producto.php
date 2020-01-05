<?php
require "conexion.php"; 
$con = conecta();

$id = $_GET['id'];

$sql = "SELECT *
            FROM productos
            WHERE id = $id";
$res = mysql_query($sql, $con);

//$id			= mysql_result($res,0,"id");
$nombre		= mysql_result($res,0,"nombre");
$codigo		= mysql_result($res,0,"codigo");
$descripcion= mysql_result($res,0,"descripcion"); 
$costo		= mysql_result($res,0,"costo");
$stock		= mysql_result($res,0,"stock");
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
         echo "Codigo: $codigo";
      echo "</td>";
	  echo "<td>";
         echo "Descripcion: $descripcion";
      echo "</td>";
	  echo "<td>";
         echo "Costo: $costo";
      echo "</td>";
	  echo "<td>";
         echo "Stock: $stock";
      echo "</td>";
	  echo "<td>";
         echo "<img src='img/$imagen' height='50px' ></img>";  
      echo "</td>";
   echo "</tr>";
echo "<a href='listado_productos.php'><input type=\"button\" value=\"Regresar\" ></a>";
?>