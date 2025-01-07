<?php
// Configuración de la base de datos
$servername = "132.148.183.22";  // Nombre del servidor de la base de datos
$username = "neto";         // Nombre de usuario de la base de datos
$password = "mymtumtum777*";             // Contraseña de la base de datos
$dbname = "kalaupoop"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    // Si ocurre un error en la conexión
    die("Conexión fallida: " . $conn->connect_error);
} else {
    // Si la conexión es exitosa
    echo "Conexión exitosa a la base de datos!";
}
?>
