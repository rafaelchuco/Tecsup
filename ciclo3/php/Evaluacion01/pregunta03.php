<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frutas = $_POST["frutas"]; // Array de frutas ingresadas por el usuario

    echo "<h3>🍎 Las frutas ingresadas son:</h3>";
    echo "<ul style='font-size: 18px; line-height: 1.8;'>";
    for ($i = 0; $i < count($frutas); $i++) {
        echo "<li>🧺" . htmlspecialchars($frutas[$i]) . "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Frutas</title>
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
        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        label {
            font-size: 18px;
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        h3 {
            text-align: center;
            color: #4CAF50;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            font-size: 18px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>🍍 Ingrese 5 nombres de frutas 🍓</h1>
    <form method="post" action="">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="fruta<?= $i ?>">🍎 Fruta <?= $i ?>:</label>
            <input type="text" id="fruta<?= $i ?>" name="frutas[]" required>
        <?php endfor; ?>
        <button type="submit">✨ Enviar ✨</button>
    </form>
</body>
</html>