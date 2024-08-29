<?php
session_start();

// Generar un número aleatorio entre 1 y 100 si no existe en la sesión
if (!isset($_SESSION['numero_aleatorio'])) {
    $_SESSION['numero_aleatorio'] = rand(1, 100);
    $_SESSION['intentos'] = 0;
}

// Redirigir al formulario para que el usuario ingrese su número
header('Location: juego.html');
exit();
?>
