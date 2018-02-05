<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form name="Formulario con método GET" method="get">

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <label for="name">Apellidos:</label>
            <input type="text" name="apellidos">
        </div>
        <br>
        <button type="submit" value="Submit">Enviar</button>
    </form>    

    <?php
        if (!empty($_GET["nombre"])){

            echo "Nombre:" .$_GET["nombre"];
            echo "<br>";   
            }
        if (!empty($_GET["apellidos"])){
               
            echo "Apellidos:" .$_GET["apellidos"];    
            }
            
    ?>
</body>
</html>