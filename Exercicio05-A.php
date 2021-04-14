<?php
if(isset($_POST['nome'])){ 
  $nome = $_POST['nome'];
}
$cidade = [
  1 => "Jandira",
  2 => "Itapevi",
  3 => "Barueri",
  4 => "Osasco",
  5 => "Cotia",
  6 => "Santana de Parnaíba",
  7 => "Carapicuíba",
  8 => "São Paulo",
  9 => "Goiana da Bretanha",
  10 => "SeteAlem"
];

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
  <form method="POST" action="Exercicio05-B.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <select name="cidades">
      <option value="">SELECIONE UMA CIDADE</option>
      <?php
        foreach($cidade as $chave => $city){
      ?>
        <option value="<?=$chave?>"><?=$city?></option>
      <?php
        }
      ?>
    </select>
    <button>Enviar</button>
  </form>
</body>
</html>