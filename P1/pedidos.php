<html>
	<head><title>Pedidos</title></head>
	<body>
	<?php
		session_start();
		if (isset($_SESSION["SesionUsuario"])) {
			include "menuClient.php";
		}else {
			echo "<script>
				location.href = 'loginClient.php';
				</script>";
		}
	?>
	</body>
</html>