<?php

$frutas = array("limón", "naranja", "banana", "albaricoque");
rsort($frutas);
for ($i = 0; $i < count($frutas); $i++){
    echo "<h1>$frutas[$i]</h1>";
}

?>
