<?php
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$pass = $_POST['pass'];
	$clave = md5($pass);
	
	$correo = $_POST['correo'];
	$rol = $_POST['rol'];
	
	$file_name = $_FILES['archivo']['name'];			///Nombre real del archivo
	$file_tmp = $_FILES['archivo']['tmp_name'];			///Nombre temporal del archivo
	$cadena = explode(".", $file_name);					///separar el nombre obtenido para obtener
	$ext =$cadena[1];
	$dir = "archivos/";
	$file_enc = md5_file($file_tmp);


	echo "Bienvenido <br>";
	echo "Nombre (s): $nombres <br>";
	echo "Apellido (s): $apellidos <br>";
	echo "Pass:	$pass <br>";
	echo "$clave <br>";
	echo "Correo: $correo <br>";
	echo "Rol: $rol - ";
	if ($rol == 1) {
		echo "Administrar <br>";
	} 
	else {
		echo "conlsultar <br>";
   }
	
	echo "file_name: $file_name <br>";
	echo "file_tmp: $file_tmp <br>";
	echo "ext: $ext <br>";
	echo "file_enc: $file_enc <br>";
	
	if ($file_name != ''){
		$fileName1 = "$file_enc.$ext";
		@copy($file_tmp, $dir.$fileName1);
	}
?>