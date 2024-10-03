<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05</title>
</head>
<body>

    <h1>Área de um Triângulo Retângulo</h1>

    <form action="" method="post">
        <label for="base">Digite o valor da base (em metros):</label>
        <input type="number" id="base" name="base" required step="0.01"><br><br>

        <label for="altura">Digite o valor da altura (em metros):</label>
        <input type="number" id="altura" name="altura" required step="0.01"><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        $area = ($base * $altura) / 2;

        echo "<p>A área do triângulo retângulo com base de $base metros e altura de $altura metros é $area metros quadrados.</p>";
    }
    ?>

</body>
</html>
