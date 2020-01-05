<script type="text/javascript" src="/varios.js"></script>

<?php

//session_start();
require "conexion.php";
$con = conecta();

$correo    = $_REQUEST['correo'];
$pass = $_REQUEST['pass'];
$clave = md5($pass);

$sql = "SELECT *
        FROM administradores
        WHERE correo='$correo' AND pass='$pass' AND activo=1 AND eliminado=0 ";

$res = mysql_query($sql, $con);

$num = numRegistros($res);

if ($num == 0) {
   echo "<script>
           errorLogin();
           location.href = 'login.php';
        </script>";
  
        //sleep(5);

   //header("Location: login.php");
} else {
   $nombre    = mysql_result($res, 0, "nombre");

   $_SESSION["SesionUsuario"] = $nombre;

   echo "<script>
//           location.href = 'principal.php';
           location.href = 'principal.php?".SID."';
        </script>";
  // header("Location: Principal/principal.php");
}
      
?>
