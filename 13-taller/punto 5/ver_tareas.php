<?php
// Leer las tareas
$archivo = 'tareas.txt';
$tareas = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (isset($tareas[$id])) {
        $tareas[$id]['completada'] = true;
        file_put_contents($archivo, json_encode($tareas));
        echo "<p>Tarea marcada como completada.</p>";
    } else {
        echo "<p>ID de tarea no válido.</p>";
    }
}

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>";
foreach ($tareas as $id => $tarea) {
    $estado = $tarea['completada'] ? 'Completada' : 'Pendiente';
    echo "<li>
            {$tarea['titulo']} (Prioridad: {$tarea['prioridad']}) - $estado
            <a href='ver_tareas.php?id=$id'>Marcar como completada</a>
          </li>";
}
echo "</ul>
    <br>
    <a href='gestor_tareas.html'>Agregar nueva tarea</a>
</body>
</html>";
?>
