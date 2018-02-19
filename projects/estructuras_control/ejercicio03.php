<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
    <form method="post">

        <div>
            <label for="dia">Ponga un número para mostrar un día de la semana:</label>
            <input type="number" name="dia" min="1" max="7">
        </div>
        <br>
        <button type="submit" value="Submit">Enviar</button>
        <br>
        <br>
    </form>    

    <?php

        $dia=$_POST["dia"];
        echo "<h1>Dia: $dia</h1>";
    if (isset($dia)){ 
       switch($dia){
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El número introducido no es válido"; 
            break;   


       }
    }
        
        
            
    ?>

</body> 
</html> 

