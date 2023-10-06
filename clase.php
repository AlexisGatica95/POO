<?php
    class Persona{
        public string $nombre;
        public int $nivel_pelea;
        public string $clase='persona';

        public function __construct($nombre,$nivel_pelea){
            // echo "metodo constructor se ejecuta cunado instacio una clase";
            //le asigo lo que recibo fuera de la clase
            $this->nombre=$nombre;
            $this->nivel=$nivel_pelea;
        }

        public function Saludar($texto = 'holi '){
            return $texto.$this->nombre." ".$this->NivelDePelea();
        }

        public function NivelDePelea(){
            return " tenes ".$this->nivel." !, ademas es una ".$this->clase;
        }
    }

    // var_dump($alexis);

    // echo $alexis->nombre;
    // echo $alexis->Saludar();

 

    
?>