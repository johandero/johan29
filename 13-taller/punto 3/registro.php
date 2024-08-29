<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los valores del formulario
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validar los campos (esto es una validación básica)
    if (empty($nombre) || empty($apellido) || empty($email) || empty($password)) {
        die("Todos los campos son obligatorios.");
    }

    // Opcional: Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El correo electrónico no es válido.");
    }

    // Encriptar la contraseña (esto es solo un ejemplo, para una producción real usar hashing como password_hash())
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Construir la cadena de datos del usuario
    $datos_usuario = "Nombre: $nombre\nApellido: $apellido\nCorreo Electrónico: $email\nContraseña (Hash): $password_hash\n\n";

    // Almacenar los datos en un archivo de texto
    $archivo = 'usuarios.txt';
    file_put_contents($archivo, $datos_usuario, FILE_APPEND);

    // Mostrar mensaje de confirmación
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Confirmación de Registro</title>
    </head>
    <body>
        <h1>Registro Exitoso</h1>
        <p>Gracias, $nombre. Te has registrado correctamente.</p>
        <br>
        <a href='registro.html'>Volver al formulario de registro</a>
    </body>
    </html>";
}
?>
