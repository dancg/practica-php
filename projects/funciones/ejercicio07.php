<?php
include("funciones.php");
//Llamada a la función del ejercicio01
echo "<h2>Ejercicio01: Imprimir tabla de multiplicar del número 9</h2>";
imprimir_tabla_multiplicar(9);
echo "<br>";
//Llamada a la función del ejercicio02
echo "<h2>Ejercicio02: Inicializar arrays</h2>";
$listaA = inicializar_array(10, 1, 20);
echo "<pre>";
print_r($listaA);
echo "</pre>";

$listaB = inicializar_array(15, 1, 40);
echo "<pre>";
print_r($listaB);
echo "</pre>";
echo "<br>";
//Llamada a la función del ejercicio03
echo "<h2>Ejercicio03: Calcular la media</h2>";
$lista =inicializar_array(15, 1, 30);
$media = calcular_media($lista);

echo "<pre>";
echo "<h1>Número de elementos: 15</h1>";
echo "<h2>Media: $media</h2>";
echo "</pre>";
echo "<br>";
//Llamada a la función del ejercicio04
echo "<h2>Ejercicio04: Calcular el máximo</h2>";
maximo(10);
echo "<br>";
//Llamada a la función del ejercicio05
echo "<h2>Ejercicio05: Calcular el mínimo</h2>";
minimo(7);
echo "<br>";
//Llamada a la función del ejercicio06
echo "<h2>Ejercicio06: Imprimir array</h2>";
imprimir_array(8);

?>