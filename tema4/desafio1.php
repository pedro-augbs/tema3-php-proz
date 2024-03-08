<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            width: 200px;
        }

        button {
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #resultado {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        <form method="post">
            <input type="text" name="peso" placeholder="Digite o peso (em kg)" required>
            <input type="text" name="altura" placeholder="Digite a altura (em metros)" required>
            <button type="submit">Calcular IMC</button>
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

        echo "<div id='resultado'>Seu IMC é " . number_format($res, 2) . ". Você está dentro da faixa de peso \"$imc\"!</div>";

    }
        ?>
    </div>
</body>
</html>