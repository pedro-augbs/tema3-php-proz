<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h2>Soma de Três Valores</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Digite seu nome" required><br>
        <input type="number" name="age" placeholder="Digite sua idade" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        echo "Olá, $name! Você tem $age anos";
    }
    ?>
</body>
</html>
