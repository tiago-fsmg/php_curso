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

    $n1 = isset($_GET["tn1"])?$_GET["tn1"]:"0" ;
    $n2 = isset($_GET["tn2"])?$_GET["tn2"]:"0" ;
    $t = ($n1+$n2)/2;


    echo "Media: $t <br>";
    if ($t < 5){
    	echo "Aluno Reprovado";
    }
    elseif (($t >= 5 ) && ($t < 7))  {
    	echo "Aluno em Recuperação";
    }else {
    	echo "Aluno Aprovado";
    }
        
    ?>
</div>
</body>
</html>
 