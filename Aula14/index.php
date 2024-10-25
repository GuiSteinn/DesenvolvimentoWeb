<?php

    require_once "time.php";
    
   $time = new time(); 
   
   $time->setNome("Unidavi FC"); 
   $time->setAnoFundacao(2000); 

   $jogador = new jogador(); 
   $jogador->setNome("Pelé"); 
   $jogador->setPosicao("M"); 
   $jogador->setDataNascimento(new DateTime("2001-01-01"));
   $time->addJogador($jogador); 

   echo $time->getNome() . "<br>";
   var_dump($time ->getJogadores());
    
    /*require_once 'calculadora.php';

    $calculadora = new calculadora();

    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10); 

    echo $calculadora->somar();
 */   
?>