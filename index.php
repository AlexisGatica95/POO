<?php
    require_once 'clase.php';
    require_once 'herencias.php';

    //instacio la clase
    $alexis= new Persona('Alexis',7800);
    $pedro= new Persona('Pedro',3000);


    //saludar recibe argumentos externos
    echo $alexis->Saludar('Hola bombomcito ');
    echo '<br><br>';
    echo $pedro->Saludar('Hola bombomcito culon ');
    $almendra= new SupraPersona('Almendra',9000);
    echo $almendra->Saludar();
    echo '<br><br>';
    echo $almendra->Transformacion();  
    echo '<br><br>';

?>