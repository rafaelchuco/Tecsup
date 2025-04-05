<!-- filepath: /home/rafael/Tecsup/ciclo3/php/tareas.php -->
<?php
session_start();

// Inicializar el array de tareas si no existe
if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [];
}

// Función para agregar una tarea
function agregarTarea($nombreTarea) {
    $_SESSION['tareas'][] = ['nombre' => $nombreTarea, 'completada' => false];
}

// Función para eliminar una tarea
function eliminarTarea($indice) {
    unset($_SESSION['tareas'][$indice]);
    $_SESSION['tareas'] = array_values($_SESSION['tareas']); // Reindexar el array
}

// Función para marcar una tarea como completada
function completarTarea($indice) {
    $_SESSION['tareas'][$indice]['completada'] = true;
}

// Manejo de las acciones del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agregar'])) {
        $nombreTarea = trim($_POST['nombre_tarea']);
        if (!empty($nombreTarea)) {
            agregarTarea($nombreTarea);
        }
    } elseif (isset($_POST['eliminar'])) {
        eliminarTarea($_POST['indice']);
    } elseif (isset($_POST['completar'])) {
        completarTarea($_POST['indice']);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        .completada {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>
<body>
    <h1>Lista de Tareas</h1>

    <!-- Formulario para agregar tareas -->
    <form method="POST">
        <input type="text" name="nombre_tarea" placeholder="Nombre de la tarea" required>
        <button type="submit" name="agregar">Agregar Tarea</button>
    </form>

    <h2>Tareas</h2>
    <ul>
        <?php foreach ($_SESSION['tareas'] as $indice => $tarea): ?>
            <li class="<?= $tarea['completada'] ? 'completada' : '' ?>">
                <?= htmlspecialchars($tarea['nombre']) ?>
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="indice" value="<?= $indice ?>">
                    <button type="submit" name="eliminar">Eliminar</button>
                    <?php if (!$tarea['completada']): ?>
                        <button type="submit" name="completar">Marcar como completada</button>
                    <?php endif; ?>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>