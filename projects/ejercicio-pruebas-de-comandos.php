<?php
echo "Prueba de print_r";
echo "<br>";
echo "<br>";
print_r($_SERVER);
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "Prueba de var_dump";
echo "<br>";
echo "<br>";
var_dump($_SERVER);
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "Prueba de foreach";
echo "<br>";
echo "<br>";
foreach ($_SERVER as $key=> $value){

    echo "$key : $value";
    echo "<br>"; 
}
?>