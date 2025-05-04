<?php
$productos = [
    [
        "nombre" => "🍎 Manzana",
        "precio" => 2.5,
        "cantidad" => 10
    ],
    [
        "nombre" => "🍌 Plátano",
        "precio" => 1.2,
        "cantidad" => 20
    ],
    [
        "nombre" => "🍊 Naranja",
        "precio" => 3.0,
        "cantidad" => 15
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
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
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>🛒 Información de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>📦 Producto</th>
                <th>💰 Precio (S/)</th>
                <th>📊 Cantidad</th>
                <th>💵 Valor Total (S/)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <?php $valorTotal = $producto["precio"] * $producto["cantidad"]; ?>
                <tr>
                    <td><?= htmlspecialchars($producto["nombre"]) ?></td>
                    <td><?= number_format($producto["precio"], 2) ?></td>
                    <td><?= $producto["cantidad"] ?></td>
                    <td><?= number_format($valorTotal, 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>