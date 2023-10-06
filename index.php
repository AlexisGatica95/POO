<?php
    require_once 'clase.php';
    require_once 'herencias.php';

    //para acceder al atributo sin instaciar la clase
    echo Persona::$cabello;
    echo Persona::MostrarColorPelo();

    

?>