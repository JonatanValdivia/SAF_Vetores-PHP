<?php
  function estaContido($vetor1, $vetor2){
    $contido = false;
    foreach($vetor2 as $valorVetor2){
      foreach($vetor1 as $valorVetor1){
        if($valorVetor1 == $valorVetor2){
          $contido = true;
          continue;
        }
      }
      if(!$contido){
        return false;
      }
    }
    return true;
  }
  $vator01 = [1,2,3,4,5,6];
  $vator02 = [1,2,3,4,];
  if(estaContido($vator01, $vator02)){
    echo '<h1><em>Sim</em>, está contido!</h1>';
  }else{
    echo '<h1><em>Não</em>, não está contido!</h1>';
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
  
</body>
</html>