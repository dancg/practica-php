<?php
//Definición de la función
function imprimir_tabla_multiplicar ($numero) {
    echo "<table border=\"1\"";
    for($i = 1; $i <=10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td> $resultado </td>";
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}

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
?>