<?php

include("funciones.php");

//Uso de la función
imprimir_tabla_multiplicar(9);

/*Aquí se define la función pero como está puesta en el fichero funciones.php se comenta
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
*/

?>