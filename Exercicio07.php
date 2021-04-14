<?php
$vetor = [1448, 1445, 1444, 10];
$maior = 0;
$menor = 0;
  function maiorMenor($vetor, $maior, $menor){
    for($i = 0; $i <= count($vetor); $i++){
      if($vetor[$i] > $maior){
        $maior = $vetor[$i];
      }if($vetor[$i] < $menor){
        $menor = $vetor[$i];
      }
    }
    echo "<font color='red'>  Maior número: ".$maior."</font>";
    echo "<font color='blue'> Menor número: ".$menor."</font>";
  }

  maiorMenor($vetor, $maior, $menor);
?>