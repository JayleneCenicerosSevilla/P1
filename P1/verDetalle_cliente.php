<?php
	
	require "conexion.php"; 
	
$con = conecta();

$id = $_GET['id'];

$sql = "SELECT *
            FROM clientes
            WHERE id = $id";
$res = mysql_query($sql, $con);

//$id			= mysql_result($res,0,"id");
$nombre		= mysql_result($res,0,"nombres");
$apellidos	= mysql_result($res,0,"apellidos");
$correo		= mysql_result($res,0,"correo");

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
         echo "Correo: $correo";
      echo "</td>";
   echo "</tr>";
echo "<a href='listado_clientes.php'><input type=\"button\" value=\"Regresar\" ></a>";

?>