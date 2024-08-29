<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = isset($_POST['titulo']) ? trim($_POST['titulo']) : '';
    $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';
    $prioridad = isset($_POST['prioridad']) ? trim($_POST['prioridad']) : '';

    if (empty($titulo) || empty($descripcion) || empty($prioridad)) {
        die("Todos los campos son obligatorios.");
    }

    // Archivo para almacenar las tareas
    $archivo = 'tareas.txt';

    // Leer el contenido del archivo y agregar nueva tarea
    $tareas = [];
    if (file_exists($archivo)) {
        $tareas = json_decode(file_get_contents($archivo), true);
    }

    $nueva_tarea = [
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'prioridad' => $prioridad,
        'completada' => false
    ];

    $tareas[] = $nueva_tarea;

    // Guardar las tareas actualizadas en el archivo
    file_put_contents($archivo, json_encode($tareas));

    // Confirmación
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tarea Agregada</title>
    </head>
    <body>
        <h1>Tarea Agregada</h1>
        <p>La tarea '$titulo' ha sido agregada exitosamente.</p>
        <br>
        <a href='gestor_tareas.html'>Agregar otra tarea</a>
        <br>
        <a href='ver_tareas.php'>Ver lista de tareas</a>
    </body>
    </html>";
}
?>
