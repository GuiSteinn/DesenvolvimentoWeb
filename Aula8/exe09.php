<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio09</title>
</head>
<body>

    <h1>Juros Compostos</h1>

    <?php
    $valorAVista = 8654.00;

    function calcularParcelasJurosCompostos($valorAVista, $numParcelas, $taxaJuros) {
        $taxaJurosDecimal = $taxaJuros / 100;
        $montante = $valorAVista * pow((1 + $taxaJurosDecimal), $numParcelas);
        $valorParcela = $montante / $numParcelas;
        return $valorParcela;
    }

    $opcoesParcelamento = [
        24 => 2.0,
        36 => 2.3,
        48 => 2.6,
        60 => 2.9
    ];

    echo "<p>O valor à vista da moto é R$ " . number_format($valorAVista, 2, ',', '.') . ".</p>";

    foreach ($opcoesParcelamento as $numParcelas => $taxaJuros) {
        $valorParcela = calcularParcelasJurosCompostos($valorAVista, $numParcelas, $taxaJuros);
        echo "<p>Parcelamento em $numParcelas vezes com taxa de juros de $taxaJuros%: R$ " . number_format($valorParcela, 2, ',', '.') . " por parcela.</p>";
    }
    ?>

</body>
</html>
