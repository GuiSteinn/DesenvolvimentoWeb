<?php
   /*
   function metroQuadrado(int $lado1 = 1, int $lado2 = 1) {
        return $lado1 * $lado2;
    }

    function exibemensagem($mensagem) {
        echo $mensagem;
    } 

    exibemensagem("total m2: ". metroQuadrado(10,10));
    */ 

    //Declarar arrays de dados como variáveis de escopo global

    function calculaMediaNotas() {
        $somaNotas = 0;
        for($i = 0; $i < count(notas); $i++) {
            $somaNotas += notas[$i];
        }
        $mediaNotas = $somaNotas / count(notas);
        return $mediaNotas;
    }

    function verificaStatusNotas($mediaNotas) {
        if($mediaNotas >= 7) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function calculaFrequencia() {
        $somaFrequencia = 0;
        for($i = 0; $i < count(aulas); $i++) {
            $somaFrequencia += aulas[$i];
        }
        $frequencia = 100 - (($somaFrequencia * 100) / $i);
        return $frequencia;
    }

    function verificaStatusFrequencia($frequencia){
        if($frequencia >= 70) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function exibeMensagem($mensagem) {
        echo $mensagem;
    }

?>    