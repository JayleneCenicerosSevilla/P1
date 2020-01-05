<html>
    <head>
        <title>Formulario alta</title>
        <script>
           function validacion(){
				var nombre = document.forma01.nombre.value;
				var codigo = document.forma01.codigo.value;
                var descripcion = document.forma01.descripcion.value;
				var costo = document.forma01.costo.value;
				var stock = document.forma01.stock.value;
				var archivo = document.forma01.archivo.value;
				var extensionValida = /(.jpg)$/i;
				
					/////VALIDACIONES DEL FORMULARIO
					if (nombre == "") { ///si el usuario esta vacío mande una alerta para ingresar usuario
						alert("Ingrese nombre(s).");
						return false;
                    }
					
					else if (codigo == "") { ///si el usuario esta vacío mande una alerta para ingresar usuario
						alert("Ingrese codigo.");
						return false;
                    }
					else if (descripcion == ""){ ////si la contraseña esta vacía mande una alerta para ingresar la contraseña
						alert("Ingrese descripcion.");
						return false;
					}
					else if (costo == "") {///si el correo esta vacío mande una alerta para ingresar correo
						alert("Ingrese el costo.");
						return false;
                    }
					else if (stock == '0') {///si el rol esta vacío mande una alerta para ingresar rol
						alert("Seleccione un rol.");
						return false;
                    } 
					else if (!extensionValida.exec(archivo)) ///verifica que sea un archivo jpj
					{
						alert("Solo archivos .jpg");
						return false;
					}
					else{ ///si todo esta contestado, da una alerta de bienvenido
						alert("Bienvenido " + user);
						document.forma01.submit();
                    }
				
			}   
        </script>
    </head>
    <body>
        <form name="forma01" method="post" action="salva_productos.php" enctype="multipart/form-data">
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre"/> <br>			<!-- input nombres-->
			<input type="text" name="codigo" id="codigo" placeholder="Ingrese el codigo "/> <br>
			<input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion "/> <br>
			<input type="text" name="costo" id="costo" placeholder="Ingrese el costo"/><br>			<!-- input apellidos-->
            <input type="text" name="stock" id="stock" placeholder="Ingrese"/><br>											<!-- input correos-->
			<input type="file" id="archivo" name="archivo"><br>														<!-- seleccionar y subir jpg -->
           <input type="submit" value="Enviar" onclick="validacion(); return false;" /> <br>
        </form>
    </body>
</html>