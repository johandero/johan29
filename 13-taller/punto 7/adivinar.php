<?php
session_start();

// Verificar si se ha enviado un número
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_ingresado = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

    // Validar el número ingresado
    if ($numero_ingresado < 1 || $numero_ingresado > 100) {
        die("El número debe estar entre 1 y 100.");
    }

    // Recuperar el número aleatorio de la sesión
    $numero_aleatorio = $_SESSION['numero_aleatorio'];
    $_SESSION['intentos']++;

    // Verificar si el usuario acertó
    if ($numero_ingresado === $numero_aleatorio) {
        $mensaje = "¡Felicidades! Has adivinado el número en {$_SESSION['intentos']} intento(s).";
        // Reiniciar el juego
        unset($_SESSION['numero_aleatorio']);
        unset($_SESSION['intentos']);
    } else {
        $mensaje = $numero_ingresado < $numero_aleatorio
            ? "El número es mayor. Has intentado {$_SESSION['intentos']} vez(s)."
            : "El número es menor. Has intentado {$_SESSION['intentos']} vez(s).";
    }

    // Mostrar el mensaje y proporcionar un enlace para intentar nuevamente
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado</h1>
        <p>$mensaje</p>
        <br>
        <a href='juego.html'>Volver a jugar</a>
    </body>
    </html>";
}
?>
