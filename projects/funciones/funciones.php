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

//Definición de las funciones del ejercicio03 (para este caso necesito la función del ejercicio02)
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
//Definición de las función del ejercicio04
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
//Definición de la función del ejercicio05
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
//Definición de la función del ejercicio06
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
?>