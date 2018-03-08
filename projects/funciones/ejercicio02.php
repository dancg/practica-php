<?php

include("funciones.php");

//Uso de la función
$listaA = inicializar_array(10, 1, 20);
echo "<pre>";
print_r($listaA);
echo "</pre>";

$listaB = inicializar_array(15, 1, 40);
echo "<pre>";
print_r($listaB);
echo "</pre>";


/*Aquí se define la función pero como está puesta en el fichero funciones.php se comenta
function inicializar_array ($numero_elementos, $min, $max){
    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++){
        $lista[$i] = rand($min, $max);
    }
    return $lista;    

}
*/
?>