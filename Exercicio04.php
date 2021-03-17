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
 <pre>
 <?php
 
   $vetorDeInteiros = [1, 54, 63, 81, 32, 36];
  function deletarIndice(array $vetorDeInteiros, $numero){
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
      if($numero == $vetorDeInteiros[0]){
        unset($vetorDeInteiros[0]);
        print_r($vetorDeInteiros);
      }elseif($numero == $vetorDeInteiros[1]){
        unset($vetorDeInteiros[1]);
        print_r($vetorDeInteiros);
      }elseif($numero == $vetorDeInteiros[2]){
        unset($vetorDeInteiros[2]);
        print_r($vetorDeInteiros);
      }elseif($numero == $vetorDeInteiros[3]){
        unset($vetorDeInteiros[3]);
        print_r($vetorDeInteiros);
      }elseif($numero == $vetorDeInteiros[4]){
        unset($vetorDeInteiros[4]);
        print_r($vetorDeInteiros);
      } elseif($numero == $vetorDeInteiros[5]){
        unset($vetorDeInteiros[5]);
        print_r($vetorDeInteiros);
      } else{
        echo '<font color=red>False: </font>';
        print_r($vetorDeInteiros);
      }
    }
  }
  if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
    deletarIndice($vetorDeInteiros, $numero);
   }
  
?>
 </pre>
 
 <form action="" method="POST">
  <label for="numero">Valor:</label>
  <input type='number' min='1' id='numero' name='numero'>
  <button>Deletar</button>
 </form>
</body>
</html>