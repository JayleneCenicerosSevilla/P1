<html>
   <head>
      <title>Menu</title>
	  <link rel="stylesheet" href="css/estiloMenu.css" />  
   </head>

   <body>

   <?php
     // session_start(); //sesion
      if (isset($_SESSION["SesionUsuario"])) {
         $archivo_actual = basename($_SERVER['PHP_SELF']); //Regresa el nombre del archivo actual
         
         echo "
         <nav class='contenedorMenu'>
            <div class='mensaje'>
               <div class='izquierda'>
                  Hola 
                  $_SESSION[SesionUsuario]
                  
               </div>
               <div class='derecha'>
              <a href='logoutClient.php?".SID."'>Salir</a> 
               </div>
            </div>
            
            <br> <br>
            <table class=''>
               <tr class=''>
                  <td class=''>";
                  if ($archivo_actual != "PrincipalClient.php"){
                     echo "<a href='PrincipalClient.php?".SID."'>
                              <input class='btnMenu' type='button' value='Inicio'>
                           </a>";
                  } else {
                     echo "<input class='actual' type='button' value='Inicio'>";
                  }
                  echo "
                  </td>
                  
                  <td class=''>";
                     
                     if ($archivo_actual != "miCarrito.php"){
                        echo "<a href='miCarrito.php?".SID."'>
                                 <input class='btnMenu' type='button' value='Mi carrito'>
                              </a>";
                     } else {
                        echo "<input class='actual' type='button' value='Mi carrito'>";
                     }
                     echo "
                  </td>
				  
				  <td class=''>";
				  if($archivo_actual != "pedidos.php"){
					  echo "<a href='pedidos.php?".SID."'>
								<input class='btnMenu' type='button' value='Pedidos'>
							</a>";
				  } else {
					  echo "<input class='actual' type='button' value='Pedidos'>";
				  }
				  echo"
				  </td>
                  <!--<td class='link'><a href=''></a></td>-->
               </tr>
            </table>
            <hr>
         </nav>";
      } else {
         echo "<script>
                  location.href = 'loginClient.php';
               </script>";
	  }
   ?>

   </body>
</html>