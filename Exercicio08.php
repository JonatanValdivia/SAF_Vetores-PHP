<?php
$vetorNotas = $_POST; 
function calcularMedia(array $vetor){
  $soma = 0;
  foreach($vetor as $notas){
    $soma += $notas;  
  }
  echo $soma/count($vetor);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style_global.css" type="text/css">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <?php
      for($i = 1; $i <= 4; $i++){
    ?>
    <label for="nota<?= $i?>">Nota <?= $i?>: </label>
    <input type="number" name="nota<?= $i?>" placeholder="Digite a nota <?= $i?>">
    <?php
      }
    ?>
    <button>Calcular</button>
    <h1>  
      <?php
        calcularMedia($vetorNotas);
      ?>
    </h1>
  </form>
</body>
</html>