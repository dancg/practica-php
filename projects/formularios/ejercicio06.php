<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanzar dados</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="numero_dados">Numero de dados:</label>
            <select name="numero_dados">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6" selected >6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>    
        </div>
        <div>
        <button type="submit" value="Submit">Lanzar dado(s)</button>
    </form>
    <?php
        $numero_dados = $_POST["numero_dados"];

        echo $numero_dados;
        echo "<br/>";
        $dados = array();

        for($i = 0; $i < $numero_dados; $i++) {
            $dados[$i] = rand(0,5);

        }

        $images = array();
        $images["uno"] = 'images/dado1.jpeg';
        $images["dos"] = 'images/dado2.jpeg';
        $images["tres"] = 'images/dado3.jpeg';
        $images["cuatro"] = 'images/dado4.jpeg';
        $images["cinco"] = 'images/dado5.jpeg';
        $images["seis"] = 'images/dado6.jpeg';

        for($i = 0; $i < $numero_dados; $i++) {
            if ($dados[$i] == 0){
                echo "<img src=\"".$images["uno"]."\">";
            }elseif ($dados[$i] ==1){
                echo "<img src=\"".$images["dos"]."\">";
            }elseif ($dados[$i] ==2){
                echo "<img src=\"".$images["tres"]."\">";
            }elseif ($dados[$i] ==3){
                echo "<img src=\"".$images["cuatro"]."\">";
            }elseif ($dados[$i] ==4){
                echo "<img src=\"".$images["cinco"]."\">";
            }elseif ($dados[$i] ==5){
                echo "<img src=\"".$images["seis"]."\">";
            }

        }
        
    ?>
</body>
</html>