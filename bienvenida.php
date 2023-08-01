<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="leer_habitantes.php" target="iframe">Leer habitantes</a></li>
            <li><a href="crear_habitante.php" target="iframe">Crear habitante</a></li>
            <li><a href="modificar_habitante.php" target="iframe">Modificar habitante</a></li>
            <li>__________________</li>
            <li><a href="leer_usuarios.php" target="iframe">Usuarios creados</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </div>

    <div id="content">
        <iframe id="iframe" name="iframe" src="ingreso.php"></iframe>
    </div>
    
	
</body>
</html>

<?php
session_start();

// Validar si el usuario ha iniciado sesión
if (!isset($_SESSION["nombre_usuario"])) {
	header("Location: index.html");
	exit();
}
?>