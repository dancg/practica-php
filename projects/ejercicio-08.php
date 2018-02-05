<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form name="Formulario con método POST" method="post">

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
        if (!empty($_POST["nombre"])){

            echo "Nombre:" .$_POST["nombre"];
            echo "<br>";   
            }
        if (!empty($_POST["apellidos"])){
               
            echo "Apellidos:" .$_POST["apellidos"];    
            }
            
    ?>
</body>
</html>