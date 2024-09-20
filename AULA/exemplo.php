<?php 
/*
    $carros = array("Volvo", "BMW", "Toyota"); 
    echo "Eu gusto de ". $carros[0] . ", ". $carros[1] . " and ". $carros[2] . "."; 
    
    print_r($carros);

    $idade = array("João" => "35", "Maria" => "37", "José" => "43"); 
    foreach($idade as $chave => $valor) {
        echo "chave" . $chave . ", Valor=" . $valor; 
        echo "<br>";
    }
*/
    /*
    $materia = array("banco de dados II", "Estrutura de dados II", "Adm de sistema", "Engenharia de Software II", "Programacao Web I"); 
    $prof = array("Marco Aurélio Butzke", "Fernando Bastos", "Sandro Alencar Fernandes", "Jullian H", "Cleber Nardeli"); 

    for($i=0; $i <= 4; $i++) 
        echo("Disciplina: ". $materia[$i] . ", professor: ". $prof[$i]. "<br>");
    */ 

   
    $materia = array(array("Matemática",5,8.5), array("Português",2,9), array("Geografia",10,6), array("Educação Física ",2,8));
    
        echo "<table><tr><td>Disciplina</td><td>Faltas</td><td>Media</tr></tr>";
        foreach($materia as $valor1) {
            echo "<tr>";
            foreach( $valor1 as $valor2 ){
                echo "<td>$valor2</td>";
            } 
               echo "</tr>";
        }
         echo  "</table>";
?>
      