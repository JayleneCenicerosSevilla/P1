<html>
<head>
<title>Modificar</title>
<script>
   function validacion(){
           	var nombre = document.forma01.nombre.value;
			var codigo = document.forma01.codigo.value;
            var descripcion = document.forma01.descripcion.value;
			var costo = document.forma01.costo.value;
			var stock = document.forma01.stock.value;
         	if (nombre == "") {
               alert("Ingrese el nombre.");
            }
         	else if (codigo == "") {
               alert("Ingrese el codigo.");
            }
         	else if (descripcion == "") {
               alert("Ingrese la descripcion.");
            }
         	else if (costo == "") {
               alert("Ingrese el costo.");
            } 
			else if (stock == "") {
               alert("Ingrese stock.");
			}
			else {
               alert("El producto " + nombre + " ha sido modificado.");
               document.forma01.submit();
            }
         }         
      </script>
</head>
<body>
<?php

require "conexion.php"; 
$con = conecta();
$id = $_GET['id'];
$sql = "SELECT *
            FROM productos
            WHERE id = $id";
$res = mysql_query($sql, $con);

	$nombre		= mysql_result($res,0,"nombre");
	$codigo		= mysql_result($res,0,"codigo");
	$descripcion= mysql_result($res,0,"descripcion"); 
	$costo		= mysql_result($res,0,"costo");
	$stock		= mysql_result($res,0,"stock");
	$imagen		= mysql_result($res,0,"archivo");
  
echo "<form name='forma01' method='post' action='modifica_producto.php' >
                  <table class='detalle'>
                     <tr>
                        <td class='col1'>
                           ID:
                        </td>
                        <td>
                           $id
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Nombre:
                        </td>
                        <td>
                           <input class='dato' type='text' name='nombre' id='nombre' 
                           placeholder='Escribe tu nombre(s)' value='$nombre' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Codigo:
                        </td>
                        <td>
                           <input class='dato' type='text' name='codigo' id='codigo' 
                           placeholder='Escribe el codigo' value='$codigo' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Descripcion:
                        </td>
                        <td>
                           <input class='dato' type='text' name='descripcion' id='descripcion' 
                           placeholder='Escribe tu correo' value='$descripcion' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Costo:
                        </td>
                        <td>
                           <input class='dato' type='text' name='costo' id='costo' 
                           placeholder='Ingrese costo' value='$costo' />
                        </td>
                     </tr>
					 
                     <tr>
                        <td class='col1'>
                           Stock:
                        </td>
                        <td>
                           <input class='dato' type='text' name='stock' id='stock' 
                           placeholder='Ingrese stock' value='$stock' />
                        </td>
                     </tr>
                     
					 <tr>
                        <td colspan='2'>
                           <input type='hidden' name='id' id='id' value='$id' />
                           <input class='btnListado modifica' type='submit' value='Guardar cambios' 
                           name='boton1' id='boton1' onclick='validacion(); return false;' /> <br>
                        </td>
                     <tr>
                     
                  </table>
               </form>";

?>
</body>
</html>