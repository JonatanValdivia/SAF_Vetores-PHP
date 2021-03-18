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
 <pre style="font-size: 2em;">
 <?php
 
   $vetorDeInteiros = [1, 54, 63, 81, 32, 36];
   print_r($vetorDeInteiros);
  function deletarIndice(array $vetorDeInteiros, $elemento){
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
      foreach($vetorDeInteiros as $chave => $el){
        if($el == $elemento){
          unset($vetorDeInteiros[$chave]);
          return $vetorDeInteiros;
        }
      }
    }
    return false;
  }
?>
 </pre>
 
 <form action="" method="POST">
  <label for="numero">Valor:</label>
  <input type='number' min='1' id='numero' name='numero'>
  <button>Deletar</button>
 </form>
 <pre style="font-size: 2em;">
  <?php
    if(isset($_POST['numero'])){
      $numero = $_POST['numero'];
       $delete = deletarIndice($vetorDeInteiros, $numero);
       print_r($delete);
     }
  ?>
 </pre>
</body>
</html>