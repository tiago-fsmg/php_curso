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

    $d = isset($_GET["ds"])?$_GET["ds"]:0;

    switch ($d) {
    	case 2:
    	case 3:
    	case 4:
    	case 5:
    	case 6:
    		echo "Levante e Vá Estudar :)";
    		break;
    	
    	case 1;
    	case 7;
    		echo "Descanse pequeno Gafanhoto";
    		break;

    	default:
    		echo "Dia Invalido, Apenas Numeros de 1 a 7";
    }
        
    ?>

    <br><br><a href="javascript:history.go(-1)" class="botao">Voutar</a>
</div>
</body>
</html>
 