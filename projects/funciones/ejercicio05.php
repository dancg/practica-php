<?php
include("funciones.php");
echo "<h1>Número de elementos: 7</h1>";
//Uso de la funcion
minimo(7);
/*Aquí se define la función pero como está puesta en el fichero funciones.php se comenta
function minimo($nume_elementos){
    for ($i=0; $i < $nume_elementos; $i++){
        $temperaturas[$i] = rand (1,30);
        echo "<br>" ;
        echo "El numero aleatorio al que se le va a calcular el mínimo es : ";
        echo "$temperaturas[$i]";
        echo "<br>" ;
        echo "<br>" ;
    }
      $minimo = $temperaturas[0] ;
      foreach ($temperaturas as $valor ) {
          if ($valor < $minimo) {
              $minimo= $valor;
          }
      }
  echo "<h2>La temperatura mínima es : $minimo</h2>";
  }
*/  
?>
