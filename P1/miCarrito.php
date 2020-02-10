<html>
	<head>
		<title>Mi carrito</title>
		<link rel="stylesheet" href="contenedor.css" />
	<head>
	<body>
		<?php
			session_start();
			if (isset($_SESSION["SesionUsuario"])) {
				include "menuClient.php";
				echo "<span class='carrito'><h1><center>Mi carrito</center></h1></span>";
				require "conexion.php"; 
$con = conecta();

$id = $_GET['id'];
$id_producto = $id;

$sql = "SELECT *
            FROM productos
            WHERE id = $id";
$res = mysql_query($sql, $con);
//$id			= mysql_result($res,0,"id");
$nombre		= mysql_result($res,0,"nombre");
$costo		= mysql_result($res,0,"costo");
$imagen		= mysql_result($res,0,"archivo");

echo "<table id=\"tabl\" border='1px'>";
   echo "<tr>";
	  echo "<td>";
         echo "<img src='img/$imagen' height='50px' ></img>";  
      echo "</td>";
	  echo "<td>";
         echo "Nombre: $nombre";
      echo "</td>";
	  echo "<td>";
         echo "Costo: $costo";
      echo "</td>";
	  echo "<td>";
			echo "<input type='text' name='cantidad' id='cantidad' placeholder='Cantidad' value='$cantidad/>";
		echo "</td>";
   echo "</tr>";

$cantidad	= $_REQUEST['cantidad'];
$sql = "INSERT INTO pedi_productos VALUES
		(0,'$id_pedido','$id_producto','$cantidad')";
$res = mysql_query($sql, $con);

}else {
			echo "<script>
				location.href = 'loginClient.php';
				</script>";
		}
		?>
	</body>
</html>