<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form name="Poner número y realizar su tabla de multiplicación" method="post">

        <div>
            <label for="name">Ponga un número:</label>
            <input type="text" name="numero">
        </div>
        <br>
        <button type="submit" value="Submit">Calcular</button>
        <br>
        <h1>Número puesto por el usuario con su tabla de multiplicación:</h1>
    </form>    

    <?php

        $numero= (int) $_POST["numero"];
        if (is_int($numero) && !empty($numero)){
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
        }else{
            echo "el parámetro introducido no es un número o es incorrecto";
        }
    ?>

</body> 
</html> 

