<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanzar una moneda</title>
</head>
<body>
    <?php
      $moneda = rand(0,1);
      if ($moneda == 0){
          echo "<img src=\"images/eurocara.jpeg\" />";
      }else{
          echo "<img src=\"images/eurocruz.jpeg\" />";
      }


    ?>
</body>
</html>