<?php
function calcular_media ($lista){
    $suma = 0;
    $numero_elementos=count($lista); 
    for ($i = 0; $i < $numero_elementos; $i++){
        $suma = $suma + $lista[$i]; 
    }  
    $media = $suma / $numero_elementos;
    return $media;    

}
?>