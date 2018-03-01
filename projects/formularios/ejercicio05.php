<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanzar un dado</title>
</head>
<body>
    <?php
      $dado = rand(0,5);
      if ($dado == 0){
          echo "<img src=\"images/dado1.jpeg\" />";
      }elseif ($dado == 1){
          echo "<img src=\"images/dado2.jpeg\" />";
      }elseif ($dado == 2){
          echo "<img src=\"images/dado3.jpeg\" />";
      }elseif ($dado == 3){
          echo "<img src=\"images/dado4.jpeg\" />";
      }elseif ($dado == 4){
          echo "<img src=\"images/dado5.jpeg\" />";
      }elseif ($dado == 5){
          echo "<img src=\"images/dado6.jpeg\" />";
        }


    ?>
</body>
</html>