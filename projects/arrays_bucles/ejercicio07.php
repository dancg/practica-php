<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title></title> 
</head> 
    <body>

    <form method="post">
    <div>
    <label for="numero_temperaturas">Número de temperaturas:</label>
    <input type="number" name="numero_temperaturas" min="1" max="100" value="10">

        <button type="submit">Enviar</button>

    </div> 


    <?php
    $numero_temperaturas = $_POST["numero_temperaturas"];
    echo $numero_temperaturas;
    echo "<br/>";
    $temperaturas = array();
    for($i = 0; $i < $numero_temperaturas; $i++) {
        $temperaturas[$i] = rand(1, 30);
    }
    echo "Array sin ordenar";
    echo "<br/>";
    echo "<br/>";
    print_r($temperaturas);
    echo "<br/>";
    echo "<br/>";
    echo "Array ordenado de mayor a menor";
    rsort($temperaturas);
    echo "<br/>";
    echo "<br/>";
    print_r($temperaturas);
    echo "<br/>";
    echo "<br/>";
    echo "Array ordenado de menor a mayor";
    sort($temperaturas);
    echo "<br/>";
    echo "<br/>";
    print_r($temperaturas);
    echo "<br/>";
    echo "<br/>";
    ?>

    </body> 
</html>
