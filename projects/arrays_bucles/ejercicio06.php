<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form method="post">

        <div>
            <label for="numero_elementos">Ponga un número para mostrar la media de unas temperaturas al azar:</label>
            <input type="number" name="numero_elementos" min="1" max="100" value="10">
        </div>
        <br>
        <button type="submit" value="Submit">Enviar</button>
        <br>
        <br>
    </form>    

    <?php

        $numero_elementos=$_POST["numero_elementos"];
        echo "<h1>Temperatura(s): $numero_elementos</h1>";

        if (!isset($numero_elementos) || empty($numero_elementos)) die;


    // Inicializo el array de temperaturas
    $temperaturas = array();
    
    $i = 0;

    do {
        $temperaturas[$i] = rand(1,30);
        $i++; 
    }while ($i < $numero_elementos);




// Calculo la media
$suma = 0;
$i = 0; 

do { $suma = $suma + $temperaturas[$i];
    $i++;
}
while ($i < $numero_elementos);

//Mas eficiente fuera del bucle
$media = $suma / $numero_elementos;

echo "<h4>Media: $media </h4>";

// Calculo el maximo
$maximo = $temperaturas[0];
$i = 1;
do {
    if ($temperaturas[$i] > $maximo)
    {
        $maximo = $temperaturas[$i];
    }
    $i++;
}

while ($i < $numero_elementos);

    echo "<h4>Máximo: $maximo </h4>";
// Calculo el minimo
$minimo = $temperaturas[0];
$i = 1;
do {
    if ($temperaturas[$i] < $minimo)
    {
        $minimo = $temperaturas[$i];
    }
    $i++;
}

while ($i < $numero_elementos);

    
echo "<h4>Mínimo: $minimo </h4>";

echo "<pre>";
print_r($temperaturas);
echo "</pre>";

    ?>

</body> 
</html> 