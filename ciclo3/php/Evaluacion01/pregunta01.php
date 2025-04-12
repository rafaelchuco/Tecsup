<?php
$estudiantes = [
    [
        "nombre" => "Juan",
        "notas" => [12, 14, 10]
    ],
    [
        "nombre" => "María",
        "notas" => [8, 9, 10]
    ],
    [
        "nombre" => "Luis",
        "notas" => [15, 16, 14]
    ]
];

function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            font-family: 'Arial Black', sans-serif;
            color: #333;
            margin-top: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.02);
            transition: all 0.2s ease-in-out;
        }
        td {
            font-size: 16px;
        }
        .aprobado {
            color: #28a745;
            font-weight: bold;
        }
        .reprobado {
            color: #dc3545;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>📚 Resultados de Estudiantes 📊</h1>
    <table>
        <thead>
            <tr>
                <th>👤 Nombre</th>
                <th>📈 Promedio</th>
                <th>✅ Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <?php 
                    $promedio = calcularPromedio($estudiante["notas"]);
                    $estado = $promedio >= 11 ? "<span class='aprobado'>Aprobado ✅</span>" : "<span class='reprobado'>Reprobado ❌</span>";
                ?>
                <tr>
                    <td><?= htmlspecialchars($estudiante["nombre"]) ?> 🧑</td>
                    <td><?= number_format($promedio, 2) ?> 🎯</td>
                    <td><?= $estado ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>