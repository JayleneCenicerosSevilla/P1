<html>
	<head>
   	<title>
   		Libros y peliculas
      </title>
	</head>
   <body>
      <?php
	/*error_reporting(E_ALL);
		ini_set('display_errors', '1');*/
         //if ( sesionActiva() ) ///funcion que no necesito

         session_start();

         if (isset($_SESSION["SesionUsuario"])) {
			 require "conexion.php";
            include "menuClient.php"; /// muestra el menu 
            
            echo "<span class='Bienvenida'><h1><center>Libros y peliculas</center></h1></span>";
			include "contenedor.html";
         } else {
            echo "<script>
                     location.href = 'loginClient.php';
                  </script>";
         }

      ?>
   </body>
</html>