<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>

<body>
    
  <form action="" method="post">
    <ul>
        <li>
            <label for="valor1">valor1:</label>
            <input id="valor1" name="valor1" type="number">
        </li>
    </ul>
    
    <ul>
        <li>
            <label for="valor2">valor2:</label>
            <input id="valor2" name="valor2" type="number">
        </li>
    </ul> 

    <ul>
        <li>
            <label for="valor3">valor3:</label>
            <input id="valor3" name="valor3" type="number">
        </li>
    </ul>


    <button type="submit">Soma</button>
  </form> 

    <?php
    function calculaSoma($v1,$v2,$v3){
        return $v1 + $v2 + $v3;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
    
        $soma = calculaSoma($valor1, $valor2, $valor3);
        $cor = "black";  // cor padrão
    
        // Condições de cor
        if ($valor1 > 10) {
            $cor = "blue";
        } elseif ($valor2 < $valor3) {
            $cor = "green";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = "red";
        }
    
        echo "<p style='color: $cor;'>A soma dos valores é: $soma</p>";
    }

    ?>

</body>
</html>
