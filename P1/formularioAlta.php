<html>
    <head>
        <title>Formulario alta</title>
        <script>
           function validacion(){
				var nombres = document.forma01.nombres.value;
				var apellidos = document.forma01.apellidos.value;
                var correo = document.forma01.correo.value;
				var pass = document.forma01.pass.value;
                var rol = document.forma01.rol.value;
				var archivo = document.forma01.archivo.value;
				var extensionValida = /(.jpg)$/i;
				
					/////VALIDACIONES DEL FORMULARIO
					if (nombres == "") { ///si el usuario esta vacío mande una alerta para ingresar usuario
						alert("Ingrese nombre(s).");
						return false;
                    }
					
					else if (apellidos == "") { ///si el usuario esta vacío mande una alerta para ingresar usuario
						alert("Ingrese apellido(s).");
						return false;
                    }
					else if (pass == ""){ ////si la contraseña esta vacía mande una alerta para ingresar la contraseña
						alert("Ingrese password.");
						return false;
					}
					else if (pass.length < 8){ ///validacion de más de 8 caracteres
						alert("Password inseguro, escriba mas caracteres");
						return false;
					}
					else if (correo == '@' || correo == "") {///si el correo esta vacío mande una alerta para ingresar correo
						alert("Ingrese el correo.");
						return false;
                    }
					else if (rol == '0') {///si el rol esta vacío mande una alerta para ingresar rol
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
        <form name="forma01" method="post" action="salva_adminstradores.php" enctype="multipart/form-data">
            <input type="text" name="nombres" id="nombres" placeholder="Escribe tu(s) nombres "/> <br>				<!-- input nombres-->
			<input type="text" name="apellidos" id="apellidos" placeholder="Escribe tu(s) apellidos"/><br>			<!-- input apellidos-->
            <input type="text" name="correo" id="correo" value="@"/><br>											<!-- input correos-->
			<input type="text" name="pass" id="pass" placeholder="Password"/><br>
            <select name="rol" id="rol">																			<!-- seleccionar rol-->
                <option value="0">Selecciona</option>
                <option value="1">Administrar</option>
                <option value="2">Consultar</option>
            </select><br>
			<input type="file" id="archivo" name="archivo"><br>														<!-- seleccionar y subir jpg -->
           <input type="submit" value="Enviar" onclick="validacion(); return false;" /> <br>
        </form>
    </body>
</html>