<?php
session_start();

// Validar si el usuario ha iniciado sesión
if (!isset($_SESSION["nombre_usuario"])) {
	header("Location: index.html");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Bienvenido al sitio web</h1>
    <h2>Seleccione la opción a realizar al lado izquierdo en el menú.</h2>

	
</body>
</html>