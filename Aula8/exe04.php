<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04</title>
</head>
<body>

    <h1>Área de um Retângulo</h1>

    <form action="" method="post">
        <label for="ladoA">Digite o comprimento do lado A (em metros):</label>
        <input type="number" id="ladoA" name="ladoA" required step="0.01"><br><br>

        <label for="ladoB">Digite o comprimento do lado B (em metros):</label>
        <input type="number" id="ladoB" name="ladoB" required step="0.01"><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST['ladoA'];
        $ladoB = $_POST['ladoB'];

        $area = $ladoA * $ladoB;

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }
    ?>

</body>
</html>
