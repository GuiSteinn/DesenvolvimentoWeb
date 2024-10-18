<?php 
    
    class Pessoa{
        private $nome; 
        private $sobreNome;

        public function setNome($nome, $sobreNome){
            $this->nome = $nome;
        }
        public function setSobreNome() {
            $this->sobreNome = $sobreNome;
        }
        public function getNomeCompleto() {
            return $this->nome ." ". $this->$sobreNome;
        }
    }
       
     
    function retornaNomeCompleto($nome, $sobreNome){
        return $nome ." ". $sobreNome;
    }
?>