<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["numero"]);

    if ($n > 0) {
        echo "<h3>🌟 Los primeros $n números naturales son:</h3>";
        echo "<div style='font-size: 18px; line-height: 1.8;'>";
        for ($i = 1; $i <= $n; $i++) {
            echo "🔢 $i<br>";
        }
        echo "</div>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>⚠️ Por favor, ingrese un número mayor a 0.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros N Números Naturales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
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
        input[type="number"] {
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
        p {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>🌟 Generar los primeros N números naturales 🌟</h1>
    <form method="post" action="">
        <label for="numero">🔢 Ingrese un número entero mayor a 0:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit">✨ Generar ✨</button>
    </form>
</body>
</html>