<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "danielpalomino";
$contrasena = "ha_z5.X0OPrOo27R";
$bd = "comunidad";

$con = mysqli_connect($host, $usuario, $contrasena, $bd);
if (mysqli_connect_errno()) {
	echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
	exit();
}

// Obtener los datos del formulario
$nombre_usuario = $_POST["nombre_usuario"];
$contrasena = $_POST["contrasena"];

// Validar si el usuario existe en la base de datos
$query = "SELECT * FROM Usuario WHERE nombre_usuario='$nombre_usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($con, $query);

if (mysqli_num_rows($resultado) > 0) {
	// Si el usuario existe, redireccionar a la página de bienvenida
	header("Location: bienvenida.php");
} else {
	// Si el usuario no existe, mostrar un mensaje de error
	echo "Nombre de usuario o contraseña incorrectos";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>

<?php
session_start();

// Resto del código del archivo...
if (mysqli_num_rows($resultado) > 0) {
	// Si el usuario existe, crear una sesión para el usuario y redireccionar a la página de bienvenida
	$_SESSION["nombre_usuario"] = $nombre_usuario;
	header("Location: bienvenida.php");
} else {
	// Si el usuario no existe, mostrar un mensaje de error
	echo "Nombre de usuario o contraseña incorrectos";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>
