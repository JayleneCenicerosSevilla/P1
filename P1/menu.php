<html>
   <head>
      <title>menu</title>

   <!--   <link rel="stylesheet" href="CSS/estiloMenu.css" /> 
      <link rel="stylesheet" href="../CSS/estiloMenu.css" /> -->

   </head>

   <body>

   <?php
      //session_start();
      //require "../sesion.php";
      //if (isset($_SESSION["SesionUsuario"])) {
      //if ( sesionActiva() ) {
         $archivo_actual = basename($_SERVER['PHP_SELF']); //Regresa el nombre del archivo actual
         
        /* echo "
         <nav class='contenedorMenu'>
            <div class='mensaje'>
               <div class='izquierda'>
                  Hola 
                  $_SESSION[SesionUsuario]
                  
               </div>
               <div class='derecha'>
              <a href='../logout.php?".SID."'>Salir</a>
               </div>
            </div>
            */
            <br> <br>
            <table class=''>
               <tr class=''>
                  <td class=''>";
                  if ($archivo_actual != "principal.php"){
                     echo "<a href='principal.php?".SID."'>
                              <input class='btnMenu' type='button' value='Inicio'>
                           </a>";
                  } else {
                     echo "<input class='actual' type='button' value='Inicio'>";
                  }
                  echo "
                  </td>
                  
                  <td class=''>";
                     
                     if ($archivo_actual != "listado.php"){
                        echo "<a href='listado.php?".SID."'>
                                 <input class='btnMenu' type='button' value='Administradores'>
                              </a>";
                     } else {
                        echo "<input class='actual' type='button' value='Administradores'>";
                     }
                     echo "
                  </td>
                  
                  <td class=''>";
                     
                     if ($archivo_actual != "listado_productos.php"){
                        echo "<a href='listado_productos.php?".SID."'>
                                 <input class='btnMenu' type='button' value='Productos'>
                              </a>";
                     } else {
                        echo "<input class='actual' type='button' value='Productos'>";
                     }
                     echo "
                  </td>
                  <!--<td class='link'><a href=''></a></td>-->
               </tr>
            </table>
            <hr>
         </nav>";
      } else {
         echo "<script>
                  location.href = 'login.php';
               </script>";
      }
   ?>

   </body>
</html>