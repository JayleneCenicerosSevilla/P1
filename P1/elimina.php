<?php

   require "conexion.php";
   
   $con = conecta();
   
   $id = $_REQUEST['id'];

   $sql = "UPDATE administradores   
           SET status=0, eliminado=1 
           WHERE id='$id' ";

   $res = mysql_query($sql, $con);
   
header ('Location: listado.php');

?>