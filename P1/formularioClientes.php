<html>
    <head>
        <title>Formulario alta</title>
        <script>
           function validacion(){
				var nombre = document.forma01.nombre.value;
				var apellidos = document.forma01.apellidos.value;
                var correo = document.forma01.correo.value;
				var pass = document.forma01.pass.value;
				
					/////VALIDACIONES DEL FORMULARIO
					if (nombre == "") { ///si el usuario esta vacío mande una alerta para ingresar usuario
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
					else{ ///si todo esta contestado, da una alerta de bienvenido
						alert("Bienvenido " + user);
						document.forma01.submit();
                    }
				
			}   
        </script>
    </head>
    <body>
        <form name="forma01" method="post" action="salva_clientes.php" enctype="multipart/form-data">
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu(s) nombre "/> <br>				<!-- input nombres-->
			<input type="text" name="apellidos" id="apellidos" placeholder="Escribe tu(s) apellidos"/><br>			<!-- input apellidos-->
            <input type="text" name="correo" id="correo" value="@"/><br>											<!-- input correos-->
			<input type="text" name="pass" id="pass" placeholder="Password"/><br>
           <input type="submit" value="Enviar" onclick="validacion(); return false;" /> <br>
        </form>
    </body>
</html>