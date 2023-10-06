<?php
       
       //HERENCIAS
        class SupraPersona extends Persona{
        public string $clase='Supra-persona';

        public function Transformacion(){
            if ($this->nivel>30) {
                $texto=$this->nombre.' ya es un viejo lesbiano';
            } else {
                $texto=$this->nombre.' es un tierno conejito';
            }
            return $texto;
        }
        
        //POLIMORFISMO
        public function NivelDePelea(){
            // return " tenes un nivel de magia de ".$this->nivel." !, ademas es una ".$this->clase;
            $nivel = $this->nivel*2;
            return $this->nombre."aunmento su magia al doble".$nivel;
        }
    }
?>