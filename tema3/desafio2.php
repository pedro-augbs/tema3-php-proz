<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      $note1 = $_POST["nota1"];
      $note2 = $_POST["nota2"];
      $note3 = $_POST["nota3"];

      $res = ($note1 + $note2 + $note3) / 3;

      echo "Sua média é $res!";
    }
    ?>
</body>
</html>
