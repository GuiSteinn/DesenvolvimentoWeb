<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

function criaArvore($aPasta, $nivel = 1)
{
    foreach ($aPasta as $chave => $valor) {
        if (is_numeric($chave)) {
            echo str_repeat(" - ", $nivel) . $valor . "<br>";
        } else {
            echo str_repeat(" - ", $nivel) . $chave . "<br>";
        }
        if (is_array($valor)) {
            criaArvore($valor, $nivel + 1);
        }
    }
}

echo "<h2>Estrutura da Árvore:</h2>";
criaArvore($pastas);
