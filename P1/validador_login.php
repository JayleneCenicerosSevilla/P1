<script type="text/javascript" src="JavaScript/varios.js"></script>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start(); //inicia sesion
require "conexion.php";
$con = conecta();

$correo    = $_REQUEST['correo'];
$pass = $_REQUEST['pass'];
$clave = md5($pass);

$sql = "SELECT *
        FROM administradores
        WHERE correo='$correo' AND pass='$pass' AND status=1 AND eliminado=0 ";

$res = mysql_query($sql, $con);

$num = numRegistros($res);

if ($num == 0) {
   echo "<script>
           errorLogin();
           location.href = 'login.php';
        </script>";
	}
	else {
		$nombre    = mysql_result($res, 0, "nombres"); //cambie nombre de la variable para que coincidiera con la BD
		$_SESSION["SesionUsuario"] = $nombre;

echo "<script>

        location.href = 'principal.php?".SID."'; 
      </script>";
 
}
?>