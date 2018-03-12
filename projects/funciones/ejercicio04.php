<?php
include("funciones.php");
echo "<h1>Número de elementos: 10</h1>";
//Uso de la funcion
maximo(10);

/*Aquí se define la función pero como está puesta en el fichero funciones.php se comenta
function maximo($num_ele){
    $maximo = $temperaturas[0] ;
    for ($i=0; $i < $num_ele; $i++){
        $temperaturas[$i] = rand (1,30);
      echo "<br>" ;
      echo "El numero aleatorio al que se le va a calcular el máximo es : ";
      echo "$temperaturas[$i]";
      echo "<br>" ;
      echo "<br>" ;
        
        if ($temperaturas[$i] > $maximo) {
            $maximo= $temperaturas[$i];
        }
    } echo "<h2>La temperatura máxima es : $maximo</h2>";
  }
  */
?>
