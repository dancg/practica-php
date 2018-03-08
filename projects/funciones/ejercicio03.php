<?php
include("funciones.php");

//Uso de la función
$lista =inicializar_array(15, 1, 30);
$media = calcular_media($lista);

echo "<pre>";
echo "<h1>Número de elementos: 15</h1>";
echo "<h2>Media: $media</h2>";
echo "</pre>";

/*Aquí utilizo dos funciones para obtener la media que estan en funciones.php
function inicializar_array ($numero_elementos, $min, $max){
    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++){
        $lista[$i] = rand($min, $max);
    }
    return $lista;    

}

function calcular_media ($lista){
    $suma = 0;
    $numero_elementos=count($lista); 
    for ($i = 0; $i < $numero_elementos; $i++){
        $suma = $suma + $lista[$i];
    }  
    $media = $suma / $numero_elementos;
    return $media;    

}
*/
?>