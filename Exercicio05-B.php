<?php
$nome = $_POST['nome'];
$cidadeSelecionada = $_POST['cidades'];
$cidade = [
  1 => "Jandira",
  2 => "Itapevi",
  3 => "Barueri",
  4 => "Osasco",
  5 => "Cotia",
  6 => "Santana de Parnaíba",
  7 => "Carapicuíba",
  8 => "São Paulo",
  9 => "Goiana da bretanha",
];
/*Olá {Fulano}, de {Jandira}, seja bem-vindo.*/
echo "<h1>Olá, <em>$nome</em>! da cidade de <em>".$cidade[$cidadeSelecionada] ."</em>. Seja bem-vindo!</h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style_global.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>