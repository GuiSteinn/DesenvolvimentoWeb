<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio06</title>
</head>
<body>

    <h1>Compras de Joãozinho</h1>

    <form action="" method="post">
        <!-- Produtos e suas quantidades -->
        <label for="maca">Maçã (R$ 5,00/Kg):</label>
        <input type="number" id="maca" name="maca" step="0.01" required> Kg<br><br>

        <label for="melancia">Melancia (R$ 3,00/Kg):</label>
        <input type="number" id="melancia" name="melancia" step="0.01" required> Kg<br><br>

        <label for="laranja">Laranja (R$ 4,00/Kg):</label>
        <input type="number" id="laranja" name="laranja" step="0.01" required> Kg<br><br>

        <label for="repolho">Repolho (R$ 2,00/Kg):</label>
        <input type="number" id="repolho" name="repolho" step="0.01" required> Kg<br><br>

        <label for="cenoura">Cenoura (R$ 3,50/Kg):</label>
        <input type="number" id="cenoura" name="cenoura" step="0.01" required> Kg<br><br>

        <label for="batatinha">Batatinha (R$ 4,50/Kg):</label>
        <input type="number" id="batatinha" name="batatinha" step="0.01" required> Kg<br><br>

        <button type="submit">Calcular Compra</button>
    </form>

    <?php
    function calcularGasto($precoPorKg, $quantidadeKg) {
        return $precoPorKg * $quantidadeKg;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precoMaca = 5.00;
        $precoMelancia = 3.00;
        $precoLaranja = 4.00;
        $precoRepolho = 2.00;
        $precoCenoura = 3.50;
        $precoBatatinha = 4.50;

        $kgMaca = $_POST['maca'];
        $kgMelancia = $_POST['melancia'];
        $kgLaranja = $_POST['laranja'];
        $kgRepolho = $_POST['repolho'];
        $kgCenoura = $_POST['cenoura'];
        $kgBatatinha = $_POST['batatinha'];

        $totalMaca = calcularGasto($precoMaca, $kgMaca);
        $totalMelancia = calcularGasto($precoMelancia, $kgMelancia);
        $totalLaranja = calcularGasto($precoLaranja, $kgLaranja);
        $totalRepolho = calcularGasto($precoRepolho, $kgRepolho);
        $totalCenoura = calcularGasto($precoCenoura, $kgCenoura);
        $totalBatatinha = calcularGasto($precoBatatinha, $kgBatatinha);

        $totalCompra = $totalMaca + $totalMelancia + $totalLaranja + $totalRepolho + $totalCenoura + $totalBatatinha;

        $dinheiroDisponivel = 50.00;

        if ($totalCompra > $dinheiroDisponivel) {
            $valorFaltante = $totalCompra - $dinheiroDisponivel;
            echo "<p style='color: red;'>O valor da compra foi R$ $totalCompra. Joãozinho está R$ $valorFaltante acima do disponível.</p>";
        } elseif ($totalCompra < $dinheiroDisponivel) {
            $valorRestante = $dinheiroDisponivel - $totalCompra;
            echo "<p style='color: blue;'>O valor da compra foi R$ $totalCompra. Joãozinho ainda pode gastar R$ $valorRestante.</p>";
        } else {
            echo "<p style='color: green;'>O valor da compra foi R$ $totalCompra. O saldo para compras foi esgotado!</p>";
        }
    }
    ?>

</body>
</html>
