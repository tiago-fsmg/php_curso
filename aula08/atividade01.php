<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    	$vl = $_GET["v"];
    	echo "A Raiz Quadrada de $vl e ". number_format((sqrt($vl)), 2);
    ?>

   
</div>
</body>
</html>
 