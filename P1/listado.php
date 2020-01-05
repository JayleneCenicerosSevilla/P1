 <script type="text/javascript" src="/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/elimina.js"></script>

<?php
require "conexion.php";
require "elimina.php";
//session_start();
//echo $_SESSION['correo'];


require "conexion.php"; //conecta con la BD
			$con = conecta();

			///muestra los registros que el status sea 1
			$sql = "SELECT *
				FROM administradores
				WHERE status = 1 AND eliminado=0";
			$res = mysql_query($sql,$con);
			$num = mysql_num_rows($res);

  echo "<tr>";
      echo "<td>";////////Agregar un nuevo administrador
         echo "<a href='formularioAlta.php'> 
               <input type=\"button\" value=\"Agregar un nuevo administrador\" >
               </a>";
      echo "</td>";
   echo "</tr>";

echo "<table id=\"tabla1\" border='1px'>";
   echo "<tr>";
      echo "<td colspan=\"4\" >";
         echo "<h1>Administradores</h1>";
      echo "</td>";
   echo "</tr>";

	///muestra el listado de los registros que se encuentran en la BD 
   for ($i = 0; $i < $num; $i++)
   {
   echo "<tr id=\"Fila".$i."\" >";
      echo "<td>";
				$id			= mysql_result($res,$i,"id");
				$nombre		= mysql_result($res,$i,"nombres");
				$correo		= mysql_result($res,$i,"correo");
				$imagen		= mysql_result($res,$i,"archivo");
				echo "ID: $id	Nombre: $nombre			Correo: $correo<br>";
                echo "<img src='img/$imagen' height='50px' ></img>";
               
				

      echo "</td>";

	////boton para eliminar una registro
      echo "<td>";
	  echo "<input type='button' value='Eliminar' onClick='eliminarFilas($i,$id)'> ";  
   
   ///boton para ver detalles 
		echo "<a href='verDetalle.php?id=$id'> 
               <input type=\"button\" value=\"Detalle\" >
               </a>";
			   
	///boton para editar registro
		echo "<a href='formularioModifica.php?id=$id'> 
               <input type=\"button\" value=\"Modificar\" >
               </a>";
      echo "</td>";

   echo "</tr>";
   }

echo "</table>";



?>


