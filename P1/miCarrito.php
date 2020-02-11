<html>
	<head>
		<title>Mi carrito</title>
		<link rel="stylesheet" href="contenedor.css" />
	<head>
	<body>
		<?php
			//session_start();
			
			//if (isset($_SESSION["SesionUsuario"])) {
				
				//include "menuClient.php"; //muestra el menu del cliente
				//echo "<span class='carrito'><h1><center>Mi carrito</center></h1></span>";
				/*
				require "conexion.php";  //hace la concexion con la base de datos
				
				
				$con = conecta(); //funcion conceta

				$id = $_GET['id']; //resive el id del producto seleccionado
				$id_producto = $id; // el id del producto, se guarda en id_producto de la tabla pedi_productos

			$sql = "SELECT *
					FROM productos
					WHERE id = $id";
			$res = mysql_query($sql, $con);
			//$id			= mysql_result($res,0,"id");
			$nombre		= mysql_result($res,0,"nombre");
			$costo		= mysql_result($res,0,"costo");
			$imagen		= mysql_result($res,0,"archivo");
			
			//muestra el producto seleccionado y pide la cantidad a comprar
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
			
			//resibe cantidad y lo guarda en la la tabla correspondiente
			$cantidad	= $_REQUEST['cantidad'];
			$sql = "INSERT INTO pedi_productos VALUES
					(0,'$id_pedido','$id_producto','$cantidad')";
					
			$res = mysql_query($sql, $con);
			*/
			
			/*}
			else {
				echo "<script>
				//	location.href = 'loginClient.php';
					</script>";
			}*/
			session_start();

         if (isset($_SESSION["SesionUsuario"])) {
            include "menuClient.php"; /// va a menu 
            
            echo "<span class='Bienvenida'><h1>Bienvenido</h1></span>";
			
         } else {
            echo "<script>
                     location.href = 'login.php';
                  </script>";
         }
		?>
	</body>
</html>