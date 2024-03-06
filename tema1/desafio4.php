<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Dois Valores</title>
</head>
<body>
    <h2>Soma de Dois Valores</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Digite um número" required><br>
        <input type="number" name="num2" placeholder="Digite um número" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $res = $num1 + $num2;

        echo "A soma de $num1 + $num2 é $res";

    }
    ?>
</body>
</html>
