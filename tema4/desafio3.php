<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Ímpares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .odd-values {
            list-style: none;
            padding: 0;
        }

        .odd-item {
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Valores Ímpares entre 500 e 1000:</h2>
    <ul class="odd-values">
        <?php        
        for($i = 500; $i <= 1000; $i++) {
          if ($i % 2 == 0) {
            continue;
          } else {
            echo "O número $i é ímpar! <br/>";
          };
        }
		
        ?>
    </ul>
</body>
</html>