<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form method="post">

        <div>
            <label for="nota">Ponga un número de nota:</label>
            <input type="text" name="nota" placeholder="puedes ponerlo con decimales">
        </div>
        <br>
        <button type="submit" value="Submit">Enviar</button>
        <br>
        <br>
    </form>    

    <?php

        $nota=$_POST["nota"];
        echo "<h1>Nota: $nota</h1>";
        
        if (isset($nota)){
            if ($nota >= 0 && $nota < 5){
                echo "Insuficiente";
            }else if ($nota >= 5 && $nota < 6){
                echo "Suficiente";
            }else if ($nota >= 6 && $nota < 7){
                echo "Bien";
            }else if ($nota >= 7 && $nota < 9){
                echo "Notable";
            }else if ($nota >= 9 && $nota <= 10){
                echo "Sobresaliente";
            }else {
                echo "La nota introducida no es válida";
            }
        }

        
        
            
    ?>

</body> 
</html> 

