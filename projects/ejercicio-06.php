<?php
$title ="Tabla de multiplicar del 1 al 10";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Tabla de multiplicar del 1 al 10</title>
</head>
<body>

<h1><?php echo $title; ?></h1>

<?php

for($numero = 1; $numero <=10; $numero++){

 echo"<br>";
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
}
echo "</table>";
}
?>
</body>
</html>