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

        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;


        switch ($o) {
        	case 1:
        		$r = $n * 2;
        		break;
        	case 2:
        		$r = pow($n, 3);
        		break;
        	case 3:
        		$r = sqrt($n); // sqrt ($n)
        }

        echo "O Resultado da Operação e <span class='foco'> $r </span>";
    ?>

    <a href="localhost" class="botao">Voutar</a>

</div>
</body>
</html>
 