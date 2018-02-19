<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanzar monedas</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="numero_monedas">Numero de monedas:</label>
            <select name="numero_monedas">
                <option value="1" selected >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
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
            <label for="tipo_moneda">Tipo de moneda:</label>
            <select name="tipo_moneda">
                <option value="dolar" selected >Dólar</option>
                <option value="euro">Euro</option>
                <option value="libra">Libra esterlina</option>
                <option value="franco">Franco Suizo</option>
                <option value="yen">Yen Japonés</option>
            </select>
        </div>
        <div>
        <button type="submit" value="Submit">Lanzar moneda(s)</button>
    </form>
    <?php
        $numero_monedas = $_POST["numero_monedas"];
        $tipo_moneda = $_POST["tipo_moneda"];

        echo $numero_monedas;
        echo "<br/>";
        echo $tipo_moneda;

        $monedas = array();

        for($i = 0; $i < $numero_monedas; $i++) {
            $monedas[$i] = rand(0,1);

        }

        $images = array();
        $images["dolar"]["cara"] = 'images/dolarcara.jpg';
        $images["dolar"]["cruz"] = 'images/dolarcruz.jpg';
        $images["euro"]["cara"] = 'images/eurocara.jpeg';
        $images["euro"]["cruz"] = 'images/eurocruz.jpeg';
        $images["libra"]["cara"] = 'images/libracara.jpeg';
        $images["libra"]["cruz"] = 'images/libracruz.jpeg';
        $images["franco"]["cara"] = 'images/francocara.jpeg';
        $images["franco"]["cruz"] = 'images/francocruz.jpeg';
        $images["yen"]["cara"] = 'images/yencara.jpeg';
        $images["yen"]["cruz"] = 'images/yencruz.jpeg';

        for($i = 0; $i < $numero_monedas; $i++) {
            if ($monedas[$i] == 0){
                echo "<img src=\"".$images[$tipo_moneda]["cara"]."\">";
            }else{
                echo "<img src=\"".$images[$tipo_moneda]["cruz"]."\">";
            }

        }
        
    ?>
</body>
</html>