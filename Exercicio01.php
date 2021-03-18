<?php
  $numeros = $_POST;
  function soma(array $numeros){
    $soma = 0;
    foreach($numeros as $num){
      $soma += $num;
    }
    return $soma;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ExercicioVetores/style_global.css">
  <title>Document</title>
</head>
<body>
  <form method="POST">
  <?php 
    $quantidadeInputs = 7;
    for($i = 1; $i <= 7; $i++){
  ?>
    <div class="input-group">
      <label for="numero<?= $i?>">Número <?= $i?></label>
      <input type="number" name="numero<?= $i?>" id="numero<?= $i?>" placeholder="Digite um número">
    </div>
    <?php
      }
    ?>
    <button>Calcular</button>
    <h1><?= soma($numeros);?></h1>
  </form>
 
</body>
</html>