<html>
	<head>
		<link rel="stylesheet" href="contenedor.css" />
	</head>
	<body>
		<?php
		/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
		session_start();
		if (isset($_SESSION["SesionUsuario"])) {
			require "conexion.php";
			$con = conecta();
			///muestra los registros que el status sea 1
			$sql = "SELECT *
				FROM productos
				WHERE status = 1 AND eliminado=0";
			$res = mysql_query($sql,$con);
			$num = mysql_num_rows($res);
			for ($i = 0; $i < $num; $i++){
      echo "<td>";
				$id			= mysql_result($res,$i,"id");
				$nombre		= mysql_result($res,$i,"nombre");
				$costo		= mysql_result($res,$i,"costo");
				$imagen		= mysql_result($res,$i,"archivo");

      echo "</td>";
                
				echo "<div id='contenedor'>
					<div id='image'><img src='img/$imagen' height='100%' width='100%' margin='1em'></img></div>
					<center>Producto: $nombre<br> Costo: $$costo<br>
					<a href='miCarrito.php?id=$id'> 
					<input type=\"button\" value=\"Agregar al carrito\" >
					</a></center>
					</div>";
			}
		}else {
			echo "<script>
				location.href = 'loginClient.php';
				</script>";
		}
		?>
	</body>
</html>