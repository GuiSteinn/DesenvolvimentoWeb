<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio08</title>
</head>
<body>

    <h1>Simulação de Financiamento da Moto</h1>

    <?php
    $valorAVista = 8654.00;

    function calcularParcelas($valorAVista, $numParcelas, $taxaJuros) {
        $taxaJurosDecimal = $taxaJuros / 100;
        $valorTotal = $valorAVista * (1 + $taxaJurosDecimal * $numParcelas);
        $valorParcela = $valorTotal / $numParcelas;
        return $valorParcela;
    }

    $opcoesParcelamento = [
        24 => 1.5,
        36 => 2.0,
        48 => 2.5,
        60 => 3.0
    ];

    echo "<p>O valor à vista da moto é R$ " . number_format($valorAVista, 2, ',', '.') . ".</p>";

    foreach ($opcoesParcelamento as $numParcelas => $taxaJuros) {
        $valorParcela = calcularParcelas($valorAVista, $numParcelas, $taxaJuros);
        echo "<p>Parcelamento em $numParcelas vezes com taxa de juros de $taxaJuros%: R$ " . number_format($valorParcela, 2, ',', '.') . " por parcela.</p>";
    }
    ?>

</body>
</html>
