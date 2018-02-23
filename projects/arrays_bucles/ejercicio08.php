<?php

$alumnos = array(
    "Maria"=>"29",
    "Juan"=>"28",
    "Antonio"=>"31",
    "Pepe"=>"27");

echo "<h3>Ordenacion ascendente por valor (asort)</h3>";
asort($alumnos);

foreach ($alumnos as $clave => $valor){
    echo "<h5>$clave =$valor</h5>";
}

echo "<h3>Ordenacion descendente por valor (arsort)</h3>";
arsort($alumnos);

foreach ($alumnos as $clave => $valor){
    echo "<h5>$clave =$valor</h5>";
}

echo "<h3>Ordenacion ascendente por clave (ksort)</h3>";
ksort($alumnos);

foreach ($alumnos as $clave => $valor){
    echo "<h5>$clave =$valor</h5>";
}

echo "<h3>Ordenacion descendente por clave (krsort)</h3>";
krsort($alumnos);

foreach ($alumnos as $clave => $valor){
    echo "<h5>$clave =$valor</h5>";
}

?>
