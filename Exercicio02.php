<?php
//um vetor de nomes e um nome específico
$vetorNomes = ["José", "Pedro", "Maria", "Carlos", "Isaac", "Jadson", "Jonatan"];

if(isset($_POST['nome'])){
  $nome = $_POST['nome'];
}

  function doisParametros($vetorNomes, $nome){
    if($vetorNomes[0] == $nome){
      echo "Verdadeiro";
    } elseif($vetorNomes[1] == $nome){
      echo "Verdadeiro";
    }elseif($vetorNomes[2] == $nome){
      echo "Verdadeiro";
    }elseif($vetorNomes[3] == $nome){
      echo "Verdadeiro";
    }elseif($vetorNomes[4] == $nome){
      echo "Verdadeiro";
    }elseif($vetorNomes[5] == $nome){
      echo "Verdadeiro";
    }elseif($vetorNomes[6] == $nome){
      echo "Verdadeiro";
    }else{
      echo "Falso";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_global.css" type="text/css">
  <title>Document</title>
</head>
<body>
<pre>
  <?php
    echo "Nomes que estão na ";
    print_r($vetorNomes);
  ?>
</pre>
  <form method="POST"> 
  <div class="input-group"> 
    <label for="nome">Digite um nome para ser procurado na array</label>
    <input type="text" name="nome" id="nome">
    <h1>
      <?php
      if(isset($_POST['nome'])){
        doisParametros($vetorNomes, $nome);
      }
      ?>
    </h1>
    <button>Procurar</button>
  </div>
  </form>
</body>
</html>