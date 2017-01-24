<?php
    class Animal{
        
        private $sexo;
        
    /////// Metodos especificos //////////
        public function __construc($s = "macho") {
                $this->sexo = $s;
        }
        //cuando hagamos un echo de esta clase se ejecutara el toString
        public function __toString(){
            return "Sexo : $this->sexo";
        }
        
        public function getSexo(){
            return $this->sexo;
        }
    ////// ***************************** ///////
        
        public function come($comida){
            return "Estoy comiendo $comida";
        }
        
        public function duerme(){
            return "ZZzzZZzZzzzZzz";
        }
    }
