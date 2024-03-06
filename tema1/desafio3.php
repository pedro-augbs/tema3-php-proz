<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
    <h2>Cálculo de IMC</h2>
    <form method="post">
        <input type="number" name="peso" placeholder="Digite seu peso" required><br>
        <input type="text" name="altura" placeholder="Digite sua altura" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        
        if (!$peso || !$altura) {
            echo "Por favor, informe seu peso e altura.";
        };
        
        $res = $peso / ($altura * $altura);
        
        if ($res < 18.5) {
            $imc = "abaixo do peso";
        } elseif ($res >= 18.5 && $res < 25) {
            $imc = "com peso normal";
        } elseif ($res >= 25 && $res < 30) {
            $imc = "com sobrepeso";
        } else {
            $imc = "com obesidade";
        }

        echo "Seu IMC é " . number_format($res, 2) . ". Você está dentro da faixa de peso \"$imc\"!";

    }
    ?>
</body>
</html>
