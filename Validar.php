<?php
// Simulación de credenciales correctas
$usuarios = [
    "usuario1" => "contrasena123",
    "usuario2" => "clave456"
];

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validar credenciales
if (array_key_exists($username, $usuarios) && $usuarios[$username] === $password) {
    // Redirigir a Bienvenida.php si las credenciales son correctas
    header("Location: Bienvenida.php");
    exit();
} else {
    // Mostrar mensaje de error si las credenciales son incorrectas
    echo "<h1>Usuario o contraseña incorrectos</h1>";
    echo "<a href='Inicio.php'>Volver al inicio</a>";
}
?>
