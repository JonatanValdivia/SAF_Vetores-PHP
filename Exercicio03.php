<?php
  $vetorDeStrings = ["In", "te", "li", "gên", "ci", "a"];
  function inverter(array $vetor){
    $vetorInvertido = [];
    for ($i= (count($vetor) -1); $i >= 0; $i--) {
      echo "<font color= 'red'><h1>".$vetorInvertido[] = $vetor[$i]. "</h1></font>";
  }
  return $vetorInvertido;
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
<form> 
  <pre>
    <?php
      inverter($vetorDeStrings);
    ?>
  </pre>
  
  </form>
</body>
</html>