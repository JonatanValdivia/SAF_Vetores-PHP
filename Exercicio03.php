<?php
  $vetorInteiros = ["In", "te", "li", "gên", "ci", "a"];
  function inverter($vetorInteiros){
    for ($i=6; $i >= 0; $i--) {
      echo "<font color= 'red'><h1>".$vetorInteiros[$i]. "</h1></font>";
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
<form> 
  
    <?php
      inverter($vetorInteiros);
    ?>
  
  </form>
</body>
</html>