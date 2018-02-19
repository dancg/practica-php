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

        $temperaturas = array();

    // Inicializo el array de temperaturas
        $i = 0;
        while ($i < $numero_elementos){
            $temperaturas[$i] = rand (1, 30);
            $i++;
        }

    // Calculo la media
        $suma = 0;
        $i = 0;  
        while ($i < $numero_elementos){
            $suma = $suma + $temperaturas[$i];
            $i++; 
        }  
        $media = $suma / $numero_elementos;

        echo "<h4>Media: $media</h4>";

    //Calculo el máximo    

        $maximo = $temperaturas[0];
        $i = 1; 
        while ($i < $numero_elementos){
            if ($temperaturas[$i] > $maximo){
                $maximo = $temperaturas[$i];
                
            }
          $i++;
        }

        echo "<h4>Máximo: $maximo</h4>";

    //Calculo el mínimo
    
        $minimo = $temperaturas[0];
        $i = 1; 
        while ($i < $numero_elementos){
            if ($temperaturas[$i] < $minimo){
                $minimo = $temperaturas[$i];
            }
          $i++;   
        }

        echo "<h4>Mínimo: $minimo</h4>";

        echo "<pre>";
        print_r($temperaturas);
        echo "</pre>";
    ?>

</body> 
</html> 