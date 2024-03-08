<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Inteiros de 100 a 200</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .number-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .number-item {
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Números Inteiros de 100 a 200</h2>
    <ul class="number-list">
        <?php
        $numero = 100;

        while (true) {
          
          echo $numero . "<br/>";
          if ($numero === 200) {
            break;
          };
          $numero += 2;
        };

        ?>
    </ul>
</div>

</body>
</html>