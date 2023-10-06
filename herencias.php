<?php
       
       //HERENCIAS
        class SupraPersona extends Persona{
        public string $clase='Supra-persona';
        
        //no voy a poder acceder a la propiedad texto pues es privada 
        public function Transformacion(){
            if ($this->nivel>30) {
                //traigo el nombre con el getter.
                $texto=$this->getNombre.' ya es un viejo lesbiano';
            } else {
                $texto=$this->getNombre.' es un tierno conejito';
            }
            return $texto;
        }
    }
?>