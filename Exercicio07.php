<?php
  function maiorMenor(array $inteiros){
    $maior = $inteiros[0];
    $menor = $inteiros[0];
    foreach($inteiros as $numero){
      $maior = $numero > $maior ? $numero : $maior;
      $menor = $numero < $menor ? $numero : $menor;
    }
    return[
        "Maior" => $maior,
        "Menor" => $menor
    ];
  }

  $vetor = [100, 9000, 65, 1001, 2, 3];
  print_r(maiorMenor($vetor));
?>