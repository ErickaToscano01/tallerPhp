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

$_SESSION['nombre']= $_POST['nombre'];
echo "variable: " . $_SESSION['nombre'];


?>
</br>
<a href='index.php'>Volver</a>

</body>
</html>
