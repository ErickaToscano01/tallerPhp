<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>

<?php

if (isset($_SESSION['nombre'])){
	session_destroy();
	echo "Se ha destruido sesion exitosamente <br/>";
	echo "<a href='index.php'>Volver</a>";

}else{

	echo "ERROR.. <br/>";
	echo "<a href='index.php'>Volver</a>";

}
?>

</body>
</html>
