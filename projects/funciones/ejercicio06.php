<?php
include("funciones.php");
//Uso de la funcion
imprimir_array(8);
/*Aquí se define la función pero como está puesta en el fichero funciones.php se comenta
function imprimir_array($nro_elementos){
    echo "<table border=\"1\">";
      $valores = array();
      for ($i=0; $i < $nro_elementos; $i++){
          $valores[$i] = rand(1, 20);
          echo "<tr>";
              echo "<td> Posición del array : </td>";
              echo "<td> $i </td>";
              echo "<td> valor = </td>";
              echo "<td>$valores[$i]</td>";
          echo "</tr>";
      } 
    echo "</table>";
    }
*/  
?>
