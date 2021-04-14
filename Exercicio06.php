<?php
$vetor = $_POST;
$chaves = 0;
function receber($vetor){
  foreach ($vetor as $key => $valores){
    $chaves = $key;
    echo(" ". $chaves);
  }
}

receber($vetor, $chaves);

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
  <form action="" method="POST">
  <?php
    for($i = 1; $i <= 6; $i++){
  ?>
    <label for="<?=$i?>">Numero <?=$i?>: </label>
    <input type="number" name="<?=$i?>">
  <?php
    }
  ?>
  <button>Exibir chaves</button>
  </form>
</body>
</html>