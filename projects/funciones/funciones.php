<?php
//Definición de la función del ejercicio01
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

//Definición de la función del ejercicio02
function inicializar_array ($numero_elementos, $min, $max){
    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++){
        $lista[$i] = rand($min, $max);
    }
    return $lista;    

}

//Definición de las funciónes del ejercicio03 (para este caso necesito la función del ejercicio02)
//Aunque en este caso necesito comentarla para no crear colisiones de funciones
/*function inicializar_array ($numero_elementos, $min, $max){
    $lista = array();
    for ($i = 0; $i < $numero_elementos; $i++){
        $lista[$i] = rand($min, $max);
    }
    return $lista;    

}*/
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