<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Ejercicio-05</title> 
</head> 
<body>
<h1>Número aleatorio con su multiplicación</h1>
<?php

$numero= rand(1,10);
echo $numero;



echo "<table border=\"1\">";
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

?>

</body> 
</html> 

