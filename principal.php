<html>
	<head>
   	<title>
   		Bienvenido!
      </title>
	</head>
   <body>
      <?php
	//  error_reporting(E_ALL);
		//ini_set('display_errors', '1');
         //if ( sesionActiva() ) ///funcion que no necesito

         session_start();

         if (isset($_SESSION["SesionUsuario"])) {
            include "menu.php"; /// va a menu 
            
            echo "<span class='Bienvenida'><h1>Bienvenido</h1></span>";
         } else {
            echo "<script>
                     location.href = 'login.php';
                  </script>";
         }

      ?>
   </body>
</html>