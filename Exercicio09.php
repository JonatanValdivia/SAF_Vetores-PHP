<html>
 <head>
 <meta charset="utf-8">
  <title>É um número primo?</title>
  <link rel="stylesheet" type="text/css" href="./style_global.css">
 </head>
 <body>
 <form action="" method="get">
  Digite um numero: <input type="numeroEhPrimo" name="numeroEhPrimo" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php
 
  $n = $_GET['numeroEhPrimo'];
  $divisores = 0;
  
  for($count=2; $count<$n; $count++)
   if($n % $count == 0){
    $divisores++;
   }
  
  if($divisores){  
    echo "Não é um número primo";
  } else{    
    echo "É um número primo!";
  }
  
 ?>
 </body>
</html>