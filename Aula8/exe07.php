<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07</title>
</head>
<body>

    <h1>Cálculo dos Juros do Financiamento</h1>

    <?php
    $valorAVista = 22500.00;
    $quantidadeParcelas = 60;
    $valorParcela = 489.65;

    $totalFinanciado = $quantidadeParcelas * $valorParcela;

    $jurosPagos = $totalFinanciado - $valorAVista;

    echo "<p>O valor à vista do carro é R$ " . number_format($valorAVista, 2, ',', '.') . ".</p>";
    echo "<p>O valor total pago no financiamento (60 parcelas de R$ " . number_format($valorParcela, 2, ',', '.') . ") é R$ " . number_format($totalFinanciado, 2, ',', '.') . ".</p>";
    echo "<p style='color: red;'>Mariazinha pagará R$ " . number_format($jurosPagos, 2, ',', '.') . " só de juros no financiamento.</p>";
    ?>

</body>
</html>
