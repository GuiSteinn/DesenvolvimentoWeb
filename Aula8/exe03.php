<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>

    <h1>Área de um Quadrado</h1>

    <form action="" method="post">
        <label for="lado">Digite o comprimento do lado do quadrado (em metros):</label>
        <input type="number" id="lado" name="lado" required step="0.01">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];

        $area = $lado * $lado;

        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }
    ?>

</body>
</html>
