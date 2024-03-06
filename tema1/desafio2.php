<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ímpar ou par?</title>
</head>
<body>
    <h2>Ímpar ou par?</h2>
    <form method="post">
        <input type="number" name="num" placeholder="Digite um número" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        $res = $num % 2;

        if ($res == 1) {
            echo "O número $num é ímpar";
        } else {
            echo "O número $num é par";
        }

    }
    ?>
</body>
</html>
